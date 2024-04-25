<?php

// require_once 'components/test/include_file.php';

$test_array = ['a' => 100, 'b' => 2315, 'c' => 3345, 'd' => 4542];
$test_array2 = ['a' => 1123, 'b' => 273546, 'c' => 33645, 'd' => 484];

$a = array_combine($test_array2, $test_array);

usort($a, fn ($a, $b) => $a <=> $b);

?>

<div>
    <h1>Index</h1>
    <pre>
        <?= print_r($a) ?>
</pre>
</div>