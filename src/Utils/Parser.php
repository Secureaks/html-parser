<?php

namespace App\Utils;

class Parser
{
    public static function parse() {
        static $purifier = null;
        if ($purifier === null) {
            $purifier = new \HTMLPurifier(\HTMLPurifier_Config::createDefault());
        }
        return $purifier->purify($_POST['html'] ?? '');
    }
}