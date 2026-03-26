<?php

namespace App\Utils;

class Parser
{
    public static function parse(): string {
        $dirtyHtml = $_POST['html'] ?? '';
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('HTML.SafeIframe', true);
        $purifier = new \HTMLPurifier($config);
        return $purifier->purify($dirtyHtml);
    }
}