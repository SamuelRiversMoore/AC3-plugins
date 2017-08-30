<?php
/**
 * Préchargement des formulaires d'édition de projet
 *
 * @plugin     MC3 inventaires
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_inventaire\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/precharger_objet');

/**
 * Retourne les valeurs à charger pour un formulaire d'édition d'un projet
 *
 * Lors d'une création, certains champs peuvent être préremplis
 * (c'est le cas des traductions) 
 *
 * @param string|int $id_projet
 *     Identifiant de projet, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger.
**/
function inc_precharger_projet_dist($id_projet, $id_rubrique=0, $lier_trad=0) {
	return precharger_objet('projet', $id_projet, $id_rubrique, $lier_trad, 'titre_fr');
}

/**
 * Récupère les valeurs d'une traduction de référence pour la création
 * d'un projet (préremplissage du formulaire). 
 *
 * @note
 *     Fonction facultative si pas de changement dans les traitements
 * 
 * @param string|int $id_projet
 *     Identifiant de projet, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger
**/
function inc_precharger_traduction_projet_dist($id_projet, $id_rubrique=0, $lier_trad=0) {
	return precharger_traduction_objet('projet', $id_projet, $id_rubrique, $lier_trad, 'titre_fr');
}


?>