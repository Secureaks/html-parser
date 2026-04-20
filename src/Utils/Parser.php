<?php

namespace App\Utils;

class Parser
{
    public static function parse(): string
    {
        $html = $_POST['html'] ?? '';
        if ($html === '') {
            return '';
        }

        return self::sanitize($html);
    }

    private static function sanitize(string $html): string
    {
        $config = \HTMLPurifier_Config::createDefault();
        $purifier = new \HTMLPurifier($config);

        return $purifier->purify($html);
    }
}
