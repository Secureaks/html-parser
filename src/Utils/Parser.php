<?php

namespace App\Utils;
use HTMLPurifier;
use HTMLPurifier_Config;

class Parser
{
    public static function parse() {
        $html = $_POST['html'] ?? '';
        $config = HTMLPurifier_Config::createDefault();
        $config->set(
            'HTML.Allowed',
            'p,b,strong,i,em,ul,ol,li,a[href],br'
        );
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($html);    
    }
}