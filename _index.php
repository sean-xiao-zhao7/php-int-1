<?php

// require_once 'components/test/include_file.php';

$dir = scandir(__DIR__)

?>

<div>
    <h1>Index</h1>
    <pre>
        <?= print_r($dir) ?>
</pre>
</div>