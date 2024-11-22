<?php

// zum Laden bzw. Verwenden des Composers
require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

new Book();
echo '<br>';
new TextBook();


$today = Carbon::now()->toDayDateTimeString();

//var_dump($today);

// mit ppp+tab erzeugt pre print_r
echo '<pre>';
print_r($today);
echo '</pre>';

//require __DIR__ . '/classes/Move.php';
//require __DIR__ . '/library/Lib.php';

new Lib;
echo '<br>';
new Move;
echo '<br>';
connect();