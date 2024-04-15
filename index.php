<?php
error_reporting(0);

$x = 2;
$x **= 3;
$target = null ?? '1';

?>

<html>

<body>
    <p>Value: <?= $target <=> 0 ?></p>
    <p>Type: <?= var_dump($target) ?></p>
    <p>Null test: <?= var_dump(is_null($target)) ?></p>
    <p>Other: <?= $target ?></p>
</body>

</html>