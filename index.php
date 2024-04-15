<?php
error_reporting(0);

$array = [];
$array['one'] = 1;
array_push($array, 2, 3, 4, 5);
$x = isset($array[0]);
array_shift($array);

?>

<html>

<body>
    <p>Value: <?= print_r($array) ?></p>
    <p>Type: <?= var_dump($array) ?></p>
    <p>Null test: <?= var_dump(is_null($array)) ?></p>
    <p>Other: <?= count($array) ?></p>
</body>

</html>