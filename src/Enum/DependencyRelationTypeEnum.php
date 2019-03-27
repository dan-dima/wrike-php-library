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

namespace Zibios\WrikePhpLibrary\Enum;

/**
 * Dependency Relation Type Enum.
 */
class DependencyRelationTypeEnum extends AbstractEnum
{
    const START_TO_START = 'StartToStart';
    const START_TO_FINISH = 'StartToFinish';
    const FINISH_TO_START = 'FinishToStart';
    const FINISH_TO_FINISH = 'FinishToFinish';
}
