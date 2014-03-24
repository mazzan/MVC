<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package RamaCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('RAMA_INSTALL_PATH', dirname(__FILE__));
define('RAMA_SITE_PATH', RAMA_INSTALL_PATH . '/site');

require(RAMA_INSTALL_PATH.'/src/bootstrap.php');

$ra = CRama::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ra->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$ra->ThemeEngineRender();
