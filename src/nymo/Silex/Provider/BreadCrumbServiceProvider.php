<?php
/**
 * This file is part of silex-twig-breadcrumb-extension
 *
 * (c) 2014 Gregor Panek
 */
namespace nymo\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use nymo\Resources\Library\BreadCrumbCollection;

/**
 * Class BreadCrumbServiceProvider
 * @package nymo\Silex\Provider
 * @author Gregor Panek <gp@gregorpanek.de>
 */
class BreadCrumbServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $container A Container instance
     */
    public function register(Container $container)
    {
        $container['breadcrumbs'] = BreadCrumbCollection::getInstance();
    }
}
