<?php

declare(strict_types=1);

/*
 * This file is part of the zibios/wrike-php-library package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpLibrary\Tests\Exception\Api;

use Zibios\WrikePhpLibrary\Exception\Api\NotAllowedException;

/**
 * Not Allowed Exception Test.
 */
class NotAllowedExceptionTest extends ApiExceptionTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = NotAllowedException::class;
}
