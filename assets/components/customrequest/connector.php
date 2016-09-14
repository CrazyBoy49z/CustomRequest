<?php
/**
 * CustomRequest Connector
 *
 * @package customrequest
 * @subpackage connector
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('customrequest.core_path', null, $modx->getOption('core_path') . 'components/customrequest/');
$customrequest = $modx->getService('customrequest', 'CustomRequest', $corePath . 'model/customrequest/', array(
    'core_path' => $corePath
));

// Handle request
$modx->request->handleRequest(array(
    'processors_path' => $customrequest->getOption('processorsPath'),
    'location' => ''
));