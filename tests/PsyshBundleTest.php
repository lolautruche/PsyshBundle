<?php

/*
 * This file is part of the PsyshBundle package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\PsyshBundle;

use Psy\Shell;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @coversNothing
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class PsyshBundleTest extends KernelTestCase
{
    /**
     * Test that the bundle loads and compiles.
     */
    public function testServicesLoading()
    {
        static::bootKernel();

        $this->assertInstanceOf(
            Shell::class,
            static::$kernel->getContainer()->get('psysh.shell')
        );
    }
}
