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

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Open Graph extension
 *
 * @author Jawad ELHAOUCHI <jawad.elhaouchi@gmail.com>
 */
class OpenGraphExtension extends Extension
{
    /**
     * Responds to the app.config configuration parameter.
     *
     * @param array $configs
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
