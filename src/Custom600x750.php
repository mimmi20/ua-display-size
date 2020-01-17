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

final class Custom600x750 implements DisplayTypeInterface
{
    use DisplayType;

    public const TYPE = 'Custom 600x750';

    /**
     * the display with
     */
    private const WIDTH = 750;

    /**
     * the display height
     */
    private const HEIGHT = 600;
}
