<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Loads runtime implementations for extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_RuntimeLoaderInterface
{
    /**
     * Loads the runtime for an extension.
     *
     * @param string $name The extension name
     *
     * @return object|null The runtime instance or null if the runtime has not be loaded
     */
    public function load($name);
}
