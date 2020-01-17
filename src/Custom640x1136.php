<?php
/**
 * This file is part of the ua-display-size package.
 *
 * Copyright (c) 2018-2020, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaDisplaySize;

final class Custom640x1136 implements DisplayTypeInterface
{
    use DisplayType;

    public const TYPE = 'Custom 640x1136';

    /**
     * the display with
     */
    private const WIDTH = 1136;

    /**
     * the display height
     */
    private const HEIGHT = 640;
}
