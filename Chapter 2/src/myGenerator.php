<?php
function myGenerator()
{
    yield 'asdfas';
    yield '1111';
    yield 'cccc';
}

foreach (myGenerator()  as $yieldedValue) {
    echo $yieldedValue, PHP_EOL;
}
 ?>
