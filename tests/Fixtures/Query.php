<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Fixtures;

/**
 * Replace Doctrine\ORM\Query in tests because it cannot be mocked.
 */
class Query
{
    public function getFirstResult(): ?int
    {
        return null;
    }

    public function getMaxResults(): ?int
    {
        return null;
    }
}
