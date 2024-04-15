<?php
error_reporting(0);

$x = 10.12 % 3.1231;

?>

<html>

<body>
    <p>Value: <?= $x ?></p>
    <p>Type: <?= var_dump($x) ?></p>
    <p>Null test: <?= var_dump(is_null($x)) ?></p>
    <p>Other: <?= $x ?></p>
</body>

</html>