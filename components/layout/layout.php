<?php
error_reporting(0);
$title = $title ?? 'Page';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="A test app for PHP." />
    <title>PHP Cool App - <?= $title ?></title>
</head>

<body>
    <nav>
        <a href='/'>Home</a>
        <a href='/'>Page 2</a>
        <a href='/'>Page 3</a>
        <a href='/'>Page 4</a>
    </nav>
    <main>
        <?= require_once $child_path ?>
    </main>
</body>

</html>