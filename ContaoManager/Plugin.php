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

namespace Clickwerk\ThemeBundle\ContaoManager;

use Clickwerk\ThemeBundle\ClickwerkThemeBundle;
use Contao\CoreBundle\ContaoCoreBundle;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
class Plugin implements BundlePluginInterface, RoutingPluginInterface
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
