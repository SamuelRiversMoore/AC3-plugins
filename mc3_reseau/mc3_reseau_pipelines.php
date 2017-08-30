<?php
/**
 * Utilisations de pipelines par MC3 réseau
 *
 * @plugin     MC3 réseau
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_reseau\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
	

/**
 * Ajouter les objets sur les vues de rubriques
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function mc3_reseau_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec'])
		AND $e['type'] == 'rubrique'
		AND $e['edition'] == false) {

		$id_rubrique = $flux['args']['id_rubrique'];
		$lister_objets = charger_fonction('lister_objets', 'inc');

		$bouton = '';
		if (autoriser('creerpersonnedans', 'rubrique', $id_rubrique)) {
			$bouton .= icone_verticale(_T("personne:icone_creer_personne"), generer_url_ecrire("personne_edit", "id_rubrique=$id_rubrique"), "personne-24.png", "new", "right")
					. "<br class='nettoyeur' />";
		}

		/*-- forcer sur branche --*/
		$li_branche=inc_calcul_branche_in_dist(10);
		$tab_branche=explode(',',$li_branche);
		if (in_array($id_rubrique, $tab_branche)){
			$flux['data'] .= $lister_objets('personnes', array('titre'=>_T('personne:titre_personnes_rubrique') , 'id_rubrique'=>$id_rubrique, 'par'=>'nom'));
			$flux['data'] .= $bouton;
		}


		$bouton = '';
		if (autoriser('creerinstitutiondans', 'rubrique', $id_rubrique)) {
			$bouton .= icone_verticale(_T("institution:icone_creer_institution"), generer_url_ecrire("institution_edit", "id_rubrique=$id_rubrique"), "institution-24.png", "new", "right")
					. "<br class='nettoyeur' />";
		}

		/*-- forcer sur branche --*/
		$li_branche=inc_calcul_branche_in_dist(11).','.inc_calcul_branche_in_dist(12).','.inc_calcul_branche_in_dist(13);
		$tab_branche=explode(',',$li_branche);
		if (in_array($id_rubrique, $tab_branche)){
			$flux['data'] .= $lister_objets('institutions', array('titre'=>_T('institution:titre_institutions_rubrique') , 'id_rubrique'=>$id_rubrique, 'par'=>'nom'));
			$flux['data'] .= $bouton;
		}

	}
	return $flux;
}


/**
 * Compter les enfants d'une rubrique
 *
 * @pipeline objets_compte_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function mc3_reseau_objet_compte_enfants($flux) {
	if ($flux['args']['objet']=='rubrique'
		AND $id_rubrique=intval($flux['args']['id_objet'])) {

	 
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['personnes'] = sql_countsel('spip_personnes', "id_rubrique=".intval($id_rubrique)." AND (statut='publie')");
		} else {
			$flux['data']['personnes'] = sql_countsel('spip_personnes', "id_rubrique=".intval($id_rubrique)." AND (statut<>'poubelle')");
		}
	

	 
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['institutions'] = sql_countsel('spip_institutions', "id_rubrique=".intval($id_rubrique)." AND (statut='publie')");
		} else {
			$flux['data']['institutions'] = sql_countsel('spip_institutions', "id_rubrique=".intval($id_rubrique)." AND (statut<>'poubelle')");
		}
	

	}
	return $flux;
}


?>