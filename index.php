<?php
error_reporting(0);

$x = 2;
$x **= 3;
$target = $x;

?>

<html>

<body>
    <p>Value: <?= $target <=> 8 ?></p>
    <p>Type: <?= var_dump($target) ?></p>
    <p>Null test: <?= var_dump(is_null($target)) ?></p>
    <p>Other: <?= $target ?></p>
</body>

</html>