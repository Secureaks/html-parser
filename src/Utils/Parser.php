<?php

namespace App\Utils;

class Parser
{
    public static function parse() {
        return htmlentities($_POST['html']) ?? '';
    }
}