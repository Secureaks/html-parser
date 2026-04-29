<?php

namespace App\Utils;

class Parser
{
    public static function parse() {
        return htmlspecialchars($_POST['html'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}