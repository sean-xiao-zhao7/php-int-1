<?php

$dir = scandir(__DIR__);

$collector = new \Xi\Php\DebtCollector();
$amount = $collector->collect(10);

?>

<div>
    <h1>Collector test</h1>
    <pre>
        Amount: <?= $amount ?>
    </pre>
</div>