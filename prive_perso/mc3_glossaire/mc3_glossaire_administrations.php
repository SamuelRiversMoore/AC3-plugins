<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin MC3 glossaire
 *
 * @plugin     MC3 glossaire
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_glossaire\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation et de mise à jour du plugin MC3 glossaire.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function mc3_glossaire_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	$maj['create'] = array(array('maj_tables', array('spip_glomots', 'spip_glodefs', 'spip_glodefs_liens', 'spip_glorefs', 'spip_glorefs_liens')));

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin MC3 glossaire.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function mc3_glossaire_vider_tables($nom_meta_base_version) {

	sql_drop_table("spip_glomots");
	sql_drop_table("spip_glodefs");
	sql_drop_table("spip_glodefs_liens");
	sql_drop_table("spip_glorefs");
	sql_drop_table("spip_glorefs_liens");

	# Nettoyer les versionnages et forums
	sql_delete("spip_versions",              sql_in("objet", array('glomot', 'glodef', 'gloref')));
	sql_delete("spip_versions_fragments",    sql_in("objet", array('glomot', 'glodef', 'gloref')));
	sql_delete("spip_forum",                 sql_in("objet", array('glomot', 'glodef', 'gloref')));

	effacer_meta($nom_meta_base_version);
}

?>