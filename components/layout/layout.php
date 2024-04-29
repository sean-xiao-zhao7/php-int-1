<?php
$title = $title ?? 'Page';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="A test app for PHP." />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,700;1,700&family=Libre+Caslon+Text:wght@400;700&display=swap" rel="stylesheet">

    <title>PHP Cool App - <?= $title ?></title>
</head>

<body>
    <div id='hero'>
        <img src='/assets/images/main_icon3.png' alt='main logo' />
    </div>
    <nav>
        <a href='/'>Home</a>
        <a href='/'>Page 2</a>
        <a href='/'>Page 3</a>
        <a href='/'>Page 4</a>
    </nav>
    <main>
        <?php require_once $child_path; ?>
    </main>
</body>

</html>