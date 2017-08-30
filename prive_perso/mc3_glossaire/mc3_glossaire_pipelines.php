<?php
/**
 * Utilisations de pipelines par MC3 glossaire
 *
 * @plugin     MC3 glossaire
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_glossaire\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Ajout du css de mise en forme
 */
function mc3_glossaire_header_prive($flux) {
    return $flux .= '  
	<link rel="stylesheet" type="text/css" href="'._DIR_PLUGIN_MC3_GLOSSAIRE.'css/style.css" media="all" />
	';
}

	
/**
 * Ajout du menu de hierarchie
 */ 
function mc3_glossaire_affiche_gauche($flux) {
	$exec = $flux["args"]["exec"];

	if ($exec == "glomot"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/glossaire", array('id_glomot'=>$flux["args"]["id_glomot"]));	
	}

	if ($exec == "glodef"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/glossaire", array('id_glodef'=>$flux["args"]["id_glodef"]));	
	}
	
	if ($exec == "gloref"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/glossaire", array('id_gloref'=>$flux["args"]["id_gloref"]));	
	}
	
	if ($exec == "glomots" or $exec == "glorefs" or $exec == "glodefs"){
			$flux["data"] .= recuperer_fond("prive/squelettes/contenu/glossaire");	
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
function mc3_glossaire_affiche_milieu($flux) {
	$texte = "";
	$e = trouver_objet_exec($flux['args']['exec']);

	// glodefs sur les glomots
	if (!$e['edition'] AND in_array($e['type'], array('glomot'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'glodefs',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// glorefs sur les glodefs
	if (!$e['edition'] AND in_array($e['type'], array('glodef'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'glorefs',
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
 * Optimiser la base de données en supprimant les liens orphelins
 * de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function mc3_glossaire_optimiser_base_disparus($flux){
	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('glodef'=>'*', 'gloref'=>'*'),'*');
	return $flux;
}

?>