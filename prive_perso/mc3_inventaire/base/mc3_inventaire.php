<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     MC3 inventaires
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_inventaire\Pipelines
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
function mc3_inventaire_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['pays'] = 'pays';
	$interfaces['table_des_tables']['villes'] = 'villes';
	$interfaces['table_des_tables']['projets'] = 'projets';
	$interfaces['table_des_tables']['thematiques'] = 'thematiques';
	$interfaces['table_des_tables']['chapitres'] = 'chapitres';
	
	$interfaces['table_des_traitements']['TEXTE_FR'][]= _TRAITEMENT_RACCOURCIS;
	$interfaces['table_des_traitements']['TEXTE_EN'][]= _TRAITEMENT_RACCOURCIS;
	$interfaces['table_des_traitements']['DESCRIPTION_FR'][]= _TRAITEMENT_RACCOURCIS;
	$interfaces['table_des_traitements']['DESCRIPTION_EN'][]= _TRAITEMENT_RACCOURCIS;
	

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
function mc3_inventaire_declarer_tables_objets_sql($tables) {

	$tables['spip_pays'] = array(
		'type' => 'pay',
		'principale' => "oui",
		'field'=> array(
			"id_pay"             => "bigint(21) NOT NULL",
			"nom_fr"             => "mediumtext NOT NULL DEFAULT ''",
			"nom_en"             => "mediumtext NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_pay",
			"KEY statut"         => "statut", 
		),
		'titre' => "nom_fr AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('nom_fr', 'nom_en'),
		'champs_versionnes' => array('nom_fr', 'nom_en'),
		'rechercher_champs' => array("nom_fr" => 8, "nom_en" => 8),
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
		'texte_changer_statut' => 'pay:texte_changer_statut_pay', 
		

	);

	$tables['spip_villes'] = array(
		'type' => 'ville',
		'principale' => "oui",
		'field'=> array(
			"id_ville"           => "bigint(21) NOT NULL",
			"nom_fr"             => "mediumtext NOT NULL DEFAULT ''",
			"nom_en"             => "mediumtext NOT NULL DEFAULT ''",
			"latitude"           => "mediumtext NOT NULL DEFAULT ''",
			"longitude"          => "mediumtext NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_ville",
			"KEY statut"         => "statut", 
		),
		'titre' => "nom_fr AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('nom_fr', 'nom_en', 'latitude', 'longitude'),
		'champs_versionnes' => array('nom_fr', 'nom_en', 'latitude', 'longitude'),
		'rechercher_champs' => array("nom_fr" => 8, "nom_en" => 8),
		'tables_jointures'  => array('spip_villes_liens'),
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
		'texte_changer_statut' => 'ville:texte_changer_statut_ville', 
		

	);

	$tables['spip_projets'] = array(
		'type' => 'projet',
		'principale' => "oui",
		'field'=> array(
			"id_projet"          => "bigint(21) NOT NULL",
			"titre_fr"           => "text NOT NULL DEFAULT ''",
			"description_fr"     => "text NOT NULL DEFAULT ''",
			"titre_en"           => "mediumtext NOT NULL DEFAULT ''",
			"description_en"     => "text NOT NULL DEFAULT ''",
			"latitude"           => "mediumtext NOT NULL DEFAULT ''",
			"longitude"          => "mediumtext NOT NULL DEFAULT ''",
			"mapbox"             => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"lang"               => "VARCHAR(10) NOT NULL DEFAULT ''",
			"langue_choisie"     => "VARCHAR(3) DEFAULT 'non'", 
			"id_trad"            => "bigint(21) NOT NULL DEFAULT 0", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_projet",
			"KEY lang"           => "lang", 
			"KEY id_trad"        => "id_trad", 
			"KEY statut"         => "statut", 
		),
		'titre' => "titre_fr AS titre, lang AS lang",
		'date' => "date",
		'champs_editables'  => array('titre_fr', 'description_fr', 'titre_en', 'description_en', 'latitude', 'longitude', 'mapbox'),
		'champs_versionnes' => array('titre_fr', 'description_fr', 'titre_en', 'description_en', 'latitude', 'longitude', 'mapbox'),
		'rechercher_champs' => array("titre_fr" => 8, "description_fr" => 6, "titre_en" => 8, "description_en" => 6),
		'tables_jointures'  => array('spip_projets_liens'),
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
		'texte_changer_statut' => 'projet:texte_changer_statut_projet', 
		

	);

	$tables['spip_thematiques'] = array(
		'type' => 'thematique',
		'principale' => "oui",
		'field'=> array(
			"id_thematique"      => "bigint(21) NOT NULL",
			"titre_fr"           => "mediumtext NOT NULL DEFAULT ''",
			"texte_fr"           => "text NOT NULL DEFAULT ''",
			"titre_en"           => "mediumtext NOT NULL DEFAULT ''",
			"texte_en"           => "text NOT NULL DEFAULT ''",
			"date"               => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'", 
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_thematique",
			"KEY statut"         => "statut", 
		),
		'titre' => "titre_fr AS titre, '' AS lang",
		'date' => "date",
		'champs_editables'  => array('titre_fr', 'texte_fr', 'titre_en', 'texte_en'),
		'champs_versionnes' => array('titre_fr', 'texte_fr', 'titre_en', 'texte_en'),
		'rechercher_champs' => array("titre_fr" => 8, "texte_fr" => 6, "titre_en" => 8, "texte_en" => 6),
		'tables_jointures'  => array('spip_thematiques_liens'),
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
		'texte_changer_statut' => 'thematique:texte_changer_statut_thematique', 
		

	);

	$tables['spip_chapitres'] = array(
		'type' => 'chapitre',
		'principale' => "oui",
		'field'=> array(
			"id_chapitre"        => "bigint(21) NOT NULL",
			"titre_fr"           => "text NOT NULL DEFAULT ''",
			"texte_fr"           => "text NOT NULL DEFAULT ''",
			"titre_en"           => "mediumtext NOT NULL DEFAULT ''",
			"texte_en"           => "text NOT NULL DEFAULT ''",
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_chapitre",
			"KEY statut"         => "statut", 
		),
		'titre' => "titre_fr AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre_fr', 'texte_fr', 'titre_en', 'texte_en'),
		'champs_versionnes' => array('titre_fr', 'texte_fr', 'titre_en', 'texte_en'),
		'rechercher_champs' => array("titre_fr" => 8, "texte_fr" => 6, "titre_en" => 8, "texte_en" => 6),
		'tables_jointures'  => array('spip_chapitres_liens'),
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
		'texte_changer_statut' => 'chapitre:texte_changer_statut_chapitre', 
		

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
function mc3_inventaire_declarer_tables_auxiliaires($tables) {

	$tables['spip_villes_liens'] = array(
		'field' => array(
			"id_ville"           => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_ville,id_objet,objet",
			"KEY id_ville"       => "id_ville"
		)
	);
	$tables['spip_projets_liens'] = array(
		'field' => array(
			"id_projet"          => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_projet,id_objet,objet",
			"KEY id_projet"      => "id_projet"
		)
	);
	$tables['spip_thematiques_liens'] = array(
		'field' => array(
			"id_thematique"      => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_thematique,id_objet,objet",
			"KEY id_thematique"  => "id_thematique"
		)
	);
	$tables['spip_chapitres_liens'] = array(
		'field' => array(
			"id_chapitre"        => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_chapitre,id_objet,objet",
			"KEY id_chapitre"    => "id_chapitre"
		)
	);

	return $tables;
}


?>