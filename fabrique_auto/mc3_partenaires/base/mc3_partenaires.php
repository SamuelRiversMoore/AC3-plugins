<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     mc3_partenaires
 * @copyright  2017
 * @author     emmanuel.kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_partenaires\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function mc3_partenaires_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['partenaires'] = 'partenaires';

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
function mc3_partenaires_declarer_tables_objets_sql($tables) {

	$tables['spip_partenaires'] = array(
		'type' => 'partenaire',
		'principale' => 'oui',
		'field'=> array(
			'id_partenaire'      => 'bigint(21) NOT NULL',
			'titre'              => 'mediumtext NOT NULL DEFAULT ""',
			'lien'               => 'mediumtext NOT NULL DEFAULT ""',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_partenaire',
		),
		'titre' => 'titre AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array('titre', 'lien'),
		'champs_versionnes' => array('titre', 'lien'),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),


	);

	return $tables;
}
