<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     MC3 glossaire
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_glossaire\Pipelines
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
function mc3_glossaire_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['glomots'] = 'glomots';
	$interfaces['table_des_tables']['glodefs'] = 'glodefs';
	$interfaces['table_des_tables']['glorefs'] = 'glorefs';

	$interfaces['table_des_traitements']['DEFINITION'][]= _TRAITEMENT_RACCOURCIS;


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
function mc3_glossaire_declarer_tables_objets_sql($tables) {

	$tables['spip_glomots'] = array(
		'type' => 'glomot',
		'principale' => "oui",
		'field'=> array(
			"id_glomot"          => "bigint(21) NOT NULL",
			"titre"              => "mediumtext NOT NULL DEFAULT ''",
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"lang"               => "VARCHAR(10) NOT NULL DEFAULT ''",
			"langue_choisie"     => "VARCHAR(3) DEFAULT 'non'", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_glomot",
			"KEY lang"           => "lang", 
			"KEY statut"         => "statut", 
		),
		'titre' => "titre AS titre, lang AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre'),
		'champs_versionnes' => array('titre'),
		'rechercher_champs' => array("titre" => 8),
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
		'texte_changer_statut' => 'glomot:texte_changer_statut_glomot', 
		

	);

	$tables['spip_glodefs'] = array(
		'type' => 'glodef',
		'principale' => "oui",
		'field'=> array(
			"id_glodef"          => "bigint(21) NOT NULL",
			"definition"         => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_glodef",
			"KEY statut"         => "statut", 
		),
		'titre' => "definition AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('definition'),
		'champs_versionnes' => array('definition'),
		'rechercher_champs' => array("definition" => 6),
		'tables_jointures'  => array('spip_glodefs_liens'),
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
		'texte_changer_statut' => 'glodef:texte_changer_statut_glodef', 
		

	);

	$tables['spip_glorefs'] = array(
		'type' => 'gloref',
		'principale' => "oui",
		'field'=> array(
			"id_gloref"          => "bigint(21) NOT NULL",
			"titre"              => "mediumtext NOT NULL DEFAULT ''",
			"description"        => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_gloref",
			"KEY statut"         => "statut", 
		),
		'titre' => "titre AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('titre', 'description'),
		'champs_versionnes' => array('titre', 'description'),
		'rechercher_champs' => array("titre" => 8, "description" => 6),
		'tables_jointures'  => array('spip_glorefs_liens'),
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
		'texte_changer_statut' => 'gloref:texte_changer_statut_gloref', 
		

	);

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 *
 * @pipeline declarer_tables_auxiliaires
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function mc3_glossaire_declarer_tables_auxiliaires($tables) {

	$tables['spip_glodefs_liens'] = array(
		'field' => array(
			"id_glodef"          => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_glodef,id_objet,objet",
			"KEY id_glodef"      => "id_glodef"
		)
	);
	$tables['spip_glorefs_liens'] = array(
		'field' => array(
			"id_gloref"          => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_gloref,id_objet,objet",
			"KEY id_gloref"      => "id_gloref"
		)
	);

	return $tables;
}


?>