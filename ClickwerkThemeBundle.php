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

namespace Clickwerk\Theme;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use ClickWerk\ThemeBundle\DependencyInjection\ClickWerkThemeExtension;

/**
 * Configures the Contao IIDO Basic Bundle.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
class ClickwerkThemeBundle extends Bundle
{

    /**
     * Register extension
     * @return \Clickwerk\Theme\DependencyInjection\ClickwerkThemeExtension
     */
    public function getContainerExtension()
    {
        return new ClickwerkThemeExtension();
    }
}
