<?php

$dir = scandir(__DIR__);

$service = new \Xi\Php\DebitCollectorService();
$result = $service->collect(new \Xi\Php\DebtCollector());

?>

<div>
    <h1>Collector test</h1>
    <pre>
        Amount: <?= $result ?>
    </pre>
</div>