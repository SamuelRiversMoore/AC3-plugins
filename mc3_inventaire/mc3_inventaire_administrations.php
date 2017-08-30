<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin MC3 inventaires
 *
 * @plugin     MC3 inventaires
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_inventaire\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation et de mise à jour du plugin MC3 inventaires.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function mc3_inventaire_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	$maj['create'] = array(array('maj_tables', array('spip_pays', 'spip_villes', 'spip_villes_liens', 'spip_projets', 'spip_projets_liens', 'spip_thematiques', 'spip_thematiques_liens', 'spip_chapitres', 'spip_chapitres_liens')));

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin MC3 inventaires.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function mc3_inventaire_vider_tables($nom_meta_base_version) {

	sql_drop_table("spip_pays");
	sql_drop_table("spip_villes");
	sql_drop_table("spip_villes_liens");
	sql_drop_table("spip_projets");
	sql_drop_table("spip_projets_liens");
	sql_drop_table("spip_thematiques");
	sql_drop_table("spip_thematiques_liens");
	sql_drop_table("spip_chapitres");
	sql_drop_table("spip_chapitres_liens");

	# Nettoyer les versionnages et forums
	sql_delete("spip_versions",              sql_in("objet", array('pay', 'ville', 'projet', 'thematique', 'chapitre')));
	sql_delete("spip_versions_fragments",    sql_in("objet", array('pay', 'ville', 'projet', 'thematique', 'chapitre')));
	sql_delete("spip_forum",                 sql_in("objet", array('pay', 'ville', 'projet', 'thematique', 'chapitre')));

	effacer_meta($nom_meta_base_version);
}

?>