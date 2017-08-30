<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     MC3 réseau
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_reseau\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function mc3_reseau_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['personnes'] = 'personnes';
	$interfaces['table_des_tables']['institutions'] = 'institutions';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function mc3_reseau_declarer_tables_objets_sql($tables) {

	$tables['spip_personnes'] = array(
		'type' => 'personne',
		'principale' => "oui",
		'field'=> array(
			"id_personne"        => "bigint(21) NOT NULL",
			"id_rubrique"        => "bigint(21) NOT NULL DEFAULT 0", 
			"nom"                => "text NOT NULL DEFAULT ''",
			"fonction"           => "text NOT NULL DEFAULT ''",
			"societe"            => "text NOT NULL DEFAULT ''",
			"pays"               => "text NOT NULL DEFAULT ''",
			"email"              => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_personne",
			"KEY id_rubrique"    => "id_rubrique", 
			"KEY statut"         => "statut", 
		),
		'titre' => "nom AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('nom', 'fonction', 'societe', 'pays', 'email'),
		'champs_versionnes' => array('nom', 'fonction', 'societe', 'pays', 'email'),
		'rechercher_champs' => array("nom" => 8, "fonction" => 5, "societe" => 5, "pays" => 4, "email" => 3),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date', 
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'personne:texte_changer_statut_personne', 
		

	);

	$tables['spip_institutions'] = array(
		'type' => 'institution',
		'principale' => "oui",
		'field'=> array(
			"id_institution"     => "bigint(21) NOT NULL",
			"id_rubrique"        => "bigint(21) NOT NULL DEFAULT 0", 
			"nom"                => "text NOT NULL DEFAULT ''",
			"description"        => "text NOT NULL DEFAULT ''",
			"lien"               => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_institution",
			"KEY id_rubrique"    => "id_rubrique", 
			"KEY statut"         => "statut", 
		),
		'titre' => "nom AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('nom', 'description', 'lien'),
		'champs_versionnes' => array('nom', 'description', 'lien'),
		'rechercher_champs' => array("nom" => 8, "description" => 5, "lien" => 5),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date', 
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'institution:texte_changer_statut_institution', 
		

	);

	return $tables;
}



?>