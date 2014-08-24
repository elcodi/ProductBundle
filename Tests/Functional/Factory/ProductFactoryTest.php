<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Bundle\ProductBundle\Tests\Functional\Factory;

use Elcodi\Bundle\TestCommonBundle\Functional\WebTestCase;

/**
 * Class ProductFactoryTest
 */
class ProductFactoryTest extends WebTestCase
{
    /**
     * Returns the callable name of the service
     *
     * @return string service name
     */
    public function getServiceCallableName()
    {
        return [
            'elcodi.core.product.factory.product',
            'elcodi.factory.product',
        ];
    }

    /**
     * Load fixtures of these bundles
     *
     * @return array Bundles name where fixtures should be found
     */
    protected function loadFixturesBundles()
    {
        return array(
            'ElcodiCurrencyBundle'
        );
    }

    /**
     * Test product factory provider
     */
    public function testFactoryProvider()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.product.entity.product.class'),
            $this->get('elcodi.core.product.entity.product.instance')
        );
    }

    /**
     * Test product factory provider alias
     */
    public function testFactoryProviderAlias()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.product.entity.product.class'),
            $this->get('elcodi.entity.product.instance')
        );
    }
}
