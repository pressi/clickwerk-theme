<?php
/*******************************************************************
 * (c) 2017 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *******************************************************************/

$listenerName = 'clickwerk_theme';

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['outputBackendTemplate'][]             = array($listenerName . '.listener.backend_template', 'outputCustomizeBackendTemplate');