<?php
/**
 * Utilisation de l'action supprimer pour l'objet partenaire
 *
 * @plugin     mc3_partenaires
 * @copyright  2017
 * @author     emmanuel.kormann
 * @licence    GNU/GPL
 * @package    SPIP\Mc3_partenaires\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e partenaire
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_partenaire_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_partenaires',  'id_partenaire=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_partenaire_dist $arg pas compris");
	}
}
