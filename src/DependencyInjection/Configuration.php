<?php

/*
 * This file is part of the OpenGraphBundle package.
 *
 * (c) 2017 Jawad ELHAOUCHI <jawad.elhaouchi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JEL\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 *  This class contains the configuration information for the bundle
 *
 * @author Jawad Elhaouchi <jawad.elhaouchi@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('opengraph');

        return $treeBuilder;
    }
}
