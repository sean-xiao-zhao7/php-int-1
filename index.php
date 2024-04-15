<?php
error_reporting(0);

?>

<html>

<body>
    <p>Value: <?= $x ?></p>
    <p>Type: <?= var_dump($x) ?></p>
    <p>Test: <?= var_dump(is_null($x)) ?></p>
</body>

</html>