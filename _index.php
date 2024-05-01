<?php

$period = new DatePeriod(new DateTime(), new DateInterval("P1D"), new DateTime("next month"));

?>

<div>
    <h1>Sandbox</h1>
    <?php foreach ($period as $day) { ?>
        <pre>
            <?= $day->format('D M/d/Y') ?>        
        </pre>
    <?php } ?>
</div>