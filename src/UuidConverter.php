<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three UUID.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Uuid;

/**
 * This is the uuid converter class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class UuidConverter
{
    /**
     * Convert a uuid to a 64-bit signed integer.
     *
     * This is a lossy conversion, performed by xoring the both halves.
     *
     * @param string $uuid
     *
     * @return int
     */
    public static function convert(string $uuid)
    {
        // convert to 16 byte binary representation
        $bin = hex2bin(str_replace(['{', '-', '}'], '', $uuid));

        // xor first half with second to give 8 bytes
        $xor = self::xor(...str_split($bin, 8));

        // convert to a 64-bit signed integer
        return unpack('q', $xor)[1];
    }

    /**
     * Bitwise xor both strings.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    private static function xor(string $a, string $b)
    {
        return $a ^ $b;
    }
}
