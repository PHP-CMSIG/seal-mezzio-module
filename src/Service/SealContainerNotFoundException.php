<?php

declare(strict_types=1);

/*
 * This file is part of the Schranz Search package.
 *
 * (c) Alexander Schranz <alexander@sulu.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Schranz\Search\Integration\Mezzio\Service;

use Psr\Container\NotFoundExceptionInterface;

/**
 * @internal
 */
class SealContainerNotFoundException extends \Exception implements NotFoundExceptionInterface
{
    public function __construct(string $id)
    {
        parent::__construct(
            \sprintf('Service with id "%s" not found', $id),
        );
    }
}
