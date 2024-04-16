<?php
error_reporting(0);
$title = $title ?? 'Page';
?>
<html>

<head>
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