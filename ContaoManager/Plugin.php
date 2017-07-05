<?php
/*******************************************************************
 *
 * (c) 2017 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 *
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by ClickWerk
 * www.clickwerk.at <development@clickwerk.at>
 *
 *******************************************************************/

namespace Clickwerk\Theme\ContaoManager;

use Clickwerk\Theme\ClickwerkThemeBundle;
use Contao\CoreBundle\ContaoCoreBundle;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ClickwerkThemeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
