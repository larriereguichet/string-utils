<?php

namespace LAG\Component\StringUtils;

class StringUtils
{
    /**
     * Camelize a string.
     *
     * @param string $id A string to camelize
     * @param bool   $lowerCase
     *
     * @return string The camelized string
     */
    public static function camelize(string $id, bool $lowerCase = false): string
    {
        $value = strtr(ucwords(strtr($id, ['_' => ' ', '.' => '_ ', '\\' => '_ '])), [' ' => '']);

        if ($lowerCase) {
            $value = strtolower($value);
        }

        return $value;
    }

    /**
     * A string to underscore.
     *
     * @param string $value The string to underscore
     *
     * @return string The underscored string
     */
    public static function underscore(string $value): string
    {
        $value = strtolower(preg_replace([
                '/([A-Z]+)([A-Z][a-z])/',
                '/([a-z\d])([A-Z])/',
            ], [
                '\\1_\\2',
                '\\1_\\2',
            ],
                str_replace('_', '.', $value))
        );

        $value = preg_replace('/\B([A-Z])/', '_$1', $value);

        return $value;
    }

    /**
     * Return the start of a string.
     *
     * @param string $string The string
     * @param int $length The number of characters
     *
     * @return string
     */
    public static function start(string $string, int $length = 1): string
    {
        return substr($string, 0, $length);
    }

    /**
     * Return the end of a string.
     *
     * @param string $string The string
     * @param int $length The number of characters
     *
     * @return string
     */
    public static function end(string $string, int $length = 1): string
    {
        return substr($string, -$length);
    }

    /**
     * Return true if the given string starts with $start.
     *
     * @param string $string
     * @param string $start
     *
     * @return bool
     */
    public static function startsWith(string $string, string $start): bool
    {
        return self::start($string, strlen($start)) === $start;
    }

    /**
     * Return true if the given string starts with $start.
     *
     * @param string $string
     * @param string $end
     *
     * @return bool
     */
    public static function endsWith(string $string, string $end): bool
    {
        return self::end($string, strlen($end)) === $end;
    }
}
