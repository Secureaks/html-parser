<?php

use App\Utils\Parser;

require_once "../vendor/autoload.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Parser</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<h1>HTML Parser</h1>
<div class="container">
    <form action="" method="post">
        <h2>HTML to parse</h2>
        <label for="html"></label><textarea id="html" name="html" rows="10" cols="50"></textarea><br>
        <input type="submit" value="Parse">
    </form>
    <div id="output">
        <h2>Parsed HTML</h2>
        <div><?= htmlspecialchars(Parser::parse(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
    </div>
</div>
</body>
</html>