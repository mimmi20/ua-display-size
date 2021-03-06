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
namespace UaDisplaySizeTest;

use PHPUnit\Framework\TestCase;
use UaDisplaySize\Unknown;

final class UnknownTest extends TestCase
{
    /**
     * tests the constructor and the getter
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @return void
     */
    public function testSetterGetter(): void
    {
        $type = 'unknown';

        $result = new Unknown();

        self::assertSame($type, $result->getType());
        self::assertNull($result->getWidth());
        self::assertNull($result->getHeight());
    }
}
