<?php
/**
 * This file is part of the ua-display-size package.
 *
 * Copyright (c) 2018-2019, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaDisplaySize;

final class Custom1080x2240 implements DisplayTypeInterface
{
    use DisplayType;

    public const TYPE = 'Custom 1080x2240';

    /**
     * the display with
     */
    private const WIDTH = 2240;

    /**
     * the display height
     */
    private const HEIGHT = 1080;
}
