<?php

// require_once 'components/test/include_file.php';

$test_array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
$test_array2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

?>

<div>
    <h1>Index</h1>
    <pre>
        <?= print_r(array_filter($test_array, fn ($item) => $item % 2 === 0)) ?>
</pre>
</div>