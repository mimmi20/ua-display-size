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

interface DisplayTypeInterface
{
    /**
     * Returns the type name of the device
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Returns the Width of the Display
     *
     * @return int|null
     */
    public function getWidth(): ?int;

    /**
     * Returns the Height of the Display
     *
     * @return int|null
     */
    public function getHeight(): ?int;
}
