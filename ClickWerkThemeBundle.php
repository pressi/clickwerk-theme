<?php
/*******************************************************************
 *
 * (c) 2017 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 *
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *
 *******************************************************************/

namespace ClickWerk\ThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use ClickWerk\ThemeBundle\DependencyInjection\ClickWerkThemeExtension;

/**
 * Configures the Contao IIDO Basic Bundle.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
class ClickWerkThemeBundle extends Bundle
{

    /**
     * Register extension
     * @return \ClickWerk\ThemeBundle\DependencyInjection\ClickWerkThemeExtension
     */
    public function getContainerExtension()
    {
        return new ClickWerkThemeExtension();
    }
}
