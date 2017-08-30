<?php
/**
 * Définit les autorisations du plugin MC3 glossaire
 *
 * @plugin     MC3 glossaire
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_glossaire\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function mc3_glossaire_autoriser(){}


// -----------------
// Objet glomots


/**
 * Autorisation de voir un élément de menu (glomots)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomots_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (glomot)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomotcreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'glomot', '', $qui, $opt);
}

/**
 * Autorisation de créer (glomot)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomot_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (glomot)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomot_voir_dist($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_glomots','id_glomot=' . intval($id));
	if ($statut == 'poubelle'){ return false; } // si c'est publié tout le monde peut voir

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (glomot)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomot_modifier_dist($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_glomots','id_glomot=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (glomot)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glomot_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


// -----------------
// Objet glodefs


/**
 * Autorisation de voir un élément de menu (glodefs)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodefs_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (glodef)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodefcreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'glodef', '', $qui, $opt);
}

/**
 * Autorisation de créer (glodef)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodef_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (glodef)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodef_voir_dist($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_glodefs','id_glodef=' . intval($id));
	if ($statut == 'poubelle'){ return false; } // si c'est publié tout le monde peut voir

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (glodef)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodef_modifier_dist($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_glodefs','id_glodef=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (glodef)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glodef_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


/**
 * Autorisation de lier/délier l'élément (glodefs)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associerglodefs_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}
// -----------------
// Objet glorefs


/**
 * Autorisation de voir un élément de menu (glorefs)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glorefs_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (gloref)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_glorefcreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'gloref', '', $qui, $opt);
}

/**
 * Autorisation de créer (gloref)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_gloref_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (gloref)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_gloref_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
 * Autorisation de modifier (gloref)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_gloref_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de supprimer (gloref)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_gloref_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


/**
 * Autorisation de lier/délier l'élément (glorefs)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associerglorefs_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


?>
