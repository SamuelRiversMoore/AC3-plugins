<?php
/**
 * Utilisations de pipelines par MC3 inventaires
 *
 * @plugin     MC3 inventaires
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_inventaire\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Ajout du css de mise en forme
 */
function mc3_inventaire_header_prive($flux) {
    return $flux .= '  
	<link rel="stylesheet" type="text/css" href="'._DIR_PLUGIN_MC3_INVENTAIRE.'css/style.css" media="all" />
	';
}
 
/**
 * Ajout du menu de hierarchie
 */ 
function mc3_inventaire_affiche_gauche($flux) {
	$exec = $flux["args"]["exec"];

	if ($exec == "chapitre"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie", array('id_chapitre'=>$flux["args"]["id_chapitre"]));	
	}

	if ($exec == "thematique"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie", array('id_thematique'=>$flux["args"]["id_thematique"]));	
	}
	
	if ($exec == "ville"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie", array('id_ville'=>$flux["args"]["id_ville"]));	
	}
	
	if ($exec == "projet"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie", array('id_projet'=>$flux["args"]["id_projet"]));	
	}
	
	if ($exec == "pay"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie", array('id_pay'=>$flux["args"]["id_pay"]));	
	}
	
	if ($exec == "pays" or $exec == "villes" or $exec == "thematiques" or $exec == "chapitres" or $exec == "projets"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/hierarchie_pays");	
	}
 
	return $flux;
}



/**
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 *
 * @pipeline affiche_milieu
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function mc3_inventaire_affiche_milieu($flux) {
	$texte = "";
	$e = trouver_objet_exec($flux['args']['exec']);

	// auteurs sur les projets, thematiques, chapitres
	if (!$e['edition'] AND in_array($e['type'], array('projet', 'thematique', 'chapitre'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'auteurs',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}


	// villes sur les pays
	if (!$e['edition'] AND in_array($e['type'], array('pay'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'villes',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// projets sur les villes
	if (!$e['edition'] AND in_array($e['type'], array('ville'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'projets',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// thematiques sur les pays, projets, villes
	if (!$e['edition'] AND in_array($e['type'], array('pay', 'projet', 'ville'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'thematiques',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// chapitres sur les thematiques
	if (!$e['edition'] AND in_array($e['type'], array('thematique'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'chapitres',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}	

	if ($texte) {
		if ($p=strpos($flux['data'],"<!--affiche_milieu-->"))
			$flux['data'] = substr_replace($flux['data'],$texte,$p,0);
		else
			$flux['data'] .= $texte;
	}

	return $flux;
}


/**
 * Ajout de liste sur la vue d'un auteur
 *
 * @pipeline affiche_auteurs_interventions
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function mc3_inventaire_affiche_auteurs_interventions($flux) {
	if ($id_auteur = intval($flux['args']['id_auteur'])) {

		$flux['data'] .= recuperer_fond('prive/objets/liste/projets', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('projet:info_projets_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/thematiques', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('thematique:info_thematiques_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/chapitres', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('chapitre:info_chapitres_auteur')
		), array('ajax' => true));

	}
	return $flux;
}



/**
 * Optimiser la base de données en supprimant les liens orphelins
 * de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function mc3_inventaire_optimiser_base_disparus($flux){
	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('ville'=>'*', 'projet'=>'*', 'thematique'=>'*', 'chapitre'=>'*'),'*');
	return $flux;
}

?>