<?php
/**
 * Déclaration des pipelines
 *
 * @plugin     Privé perso
 * @copyright  2015
 * @author     emmanuel kormann
 * @licence    GNU/GPL
 * @package    SPIP\prive_perso\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;




/*--- le css chargé --*/
function prive_perso_header_prive($flux) {
    return $flux .= '  
	<link rel="stylesheet" type="text/css" href="'._DIR_PLUGIN_PRIVE_PERSO.'css/style_prive_perso.css" media="all" />
	';
}


?>