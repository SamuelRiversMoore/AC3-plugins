<?php
/**
 * Définit les autorisations du plugin MC3 inventaires
 *
 * @plugin     MC3 inventaires
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_inventaire\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function mc3_inventaire_autoriser(){}


// -----------------
// Objet pays


/**
 * Autorisation de voir un élément de menu (pays)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_pays_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (pay)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_paycreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'pay', '', $qui, $opt);
}

/**
 * Autorisation de créer (pay)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_pay_creer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}

/**
 * Autorisation de voir (pay)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_pay_voir_dist($faire, $type, $id, $qui, $opt) {

	$statut = sql_getfetsel('statut', 'spip_pays','id_pay=' . intval($id));

	if ($qui['statut'] == '0minirezo' && $statut!='poubelle'){ return true; } // si on est admin on a tous les droits
	if ($qui['statut'] == '1comite' && in_array($statut, array('prop', 'publie') ) ){ return true; } // si c'est publié ou en proposition
	if ($statut == 'publie') {return true;}
	return false;
}

/**
 * Autorisation de modifier (pay)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_pay_modifier_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}

/**
 * Autorisation de supprimer (pay)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_pay_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}


// -----------------
// Objet villes


/**
 * Autorisation de voir un élément de menu (villes)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_villes_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (ville)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_villecreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'ville', '', $qui, $opt);
}

/**
 * Autorisation de créer (ville)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_ville_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (ville)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_ville_voir_dist($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_villes','id_ville=' . intval($id));
	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));

	if ($qui['statut'] == '0minirezo' && $statut!='poubelle'){ return true; } // si on est admin on a tous les droits

	if ($qui['statut'] == '1comite' &&  $test_contributeur  && $statut!='poubelle' ){ return true; } // si c'est publié ou en proposition

	if ($qui['statut'] == '1comite' && in_array($statut, array('prop', 'publie') ) ){ return true; } // si c'est publié ou en proposition
	if ($statut == 'publie') {return true;}

	return false;
}

/**
 * Autorisation de modifier (ville)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_ville_modifier_dist($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_villes','id_ville=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (ville)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_ville_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}


/**
 * Autorisation de lier/délier l'élément (villes)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associervilles_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}
// -----------------
// Objet projets


/**
 * Autorisation de voir un élément de menu (projets)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projets_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (projet)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projetcreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'projet', '', $qui, $opt);
}

/**
 * Autorisation de créer (projet)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projet_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (projet)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projet_voir_dist($faire, $type, $id, $qui, $opt) {

	$statut = sql_getfetsel('statut', 'spip_projets','id_projet=' . intval($id));
	if ($statut == 'poubelle'){ return false; }

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (projet)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projet_modifier_dist($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_projets','id_projet=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (projet)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_projet_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}


/**
 * Autorisation de lier/délier l'élément (projets)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associerprojets_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}
// -----------------
// Objet thematiques


/**
 * Autorisation de voir un élément de menu (thematiques)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematiques_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (thematique)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematiquecreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'thematique', '', $qui, $opt);
}

/**
 * Autorisation de créer (thematique)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematique_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (thematique)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematique_voir_dist($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_thematiques','id_thematique=' . intval($id));
	if ($statut == 'poubelle'){ return false; } // si c'est publié tout le monde peut voir

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (thematique)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematique_modifier_dist($faire, $type, $id, $qui, $opt) {

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_thematiques','id_thematique=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (thematique)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_thematique_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo';
}


/**
 * Autorisation de lier/délier l'élément (thematiques)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associerthematiques_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}
// -----------------
// Objet chapitres


/**
 * Autorisation de voir un élément de menu (chapitres)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitres_menu_dist($faire, $type, $id, $qui, $opt){
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (chapitre)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitrecreer_menu_dist($faire, $type, $id, $qui, $opt){
	return autoriser('creer', 'chapitre', '', $qui, $opt);
}

/**
 * Autorisation de créer (chapitre)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitre_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (chapitre)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitre_voir_dist($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_chapitres','id_chapitre=' . intval($id));
	if ($statut == 'poubelle'){ return false; } // si c'est poubelle on affiche pas

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (chapitre)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitre_modifier_dist($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_chapitres','id_chapitre=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de supprimer (chapitre)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_chapitre_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


/**
 * Autorisation de lier/délier l'élément (chapitres)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associerchapitres_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}


/** AJOUT PERSO **/

/**
 * Autorisation de voir (document)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_document_voir($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_documents','id_document=' . intval($id));

	if ($statut == 'poubelle'){ return false; } // si c'est publié tout le monde peut voir

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (document)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_document_modifier($faire, $type, $id, $qui, $opt) {
	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_documents','id_document=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

/**
 * Autorisation de voir (article)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_article_voir($faire, $type, $id, $qui, $opt) {
	$statut = sql_getfetsel('statut', 'spip_articles','id_article=' . intval($id));

	if ($statut == 'poubelle'){ return false; } // si c'est publié tout le monde peut voir

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	if ($statut == 'publie'){ return true; } // si c'est publié tout le monde peut voir

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens', 'id_objet=' . intval($id) .' AND objet=' . sql_quote($type) .' AND id_auteur=' . intval($qui['id_auteur']));
	if ($test_contributeur){ return true; } // si on est contributeurs on peut voir

	return false;
}

/**
 * Autorisation de modifier (article)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_article_modifier($faire, $type, $id, $qui, $opt) {

	if ($qui['statut'] == '0minirezo'){ return true; } // si on est admin on a tous les droits

	$test_contributeur = sql_getfetsel('id_auteur', 'spip_auteurs_liens','id_objet=' . intval($id) . ' AND objet=' . sql_quote($type) . ' AND id_auteur=' . intval($qui['id_auteur']));
	$statut = sql_getfetsel('statut', 'spip_articles','id_article=' . intval($id));

	if ($qui['statut'] == '1comite'){
		if ($test_contributeur)	return true; // si on contributeur et redacteur on peut modifier
	}

	return false;
}

?>
