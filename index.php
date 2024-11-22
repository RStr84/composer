<?php

// zum Laden bzw. Verwenden des Composers
require_once __DIR__ . '/vendor/autoload.php';

// Exceptionhandling with Whoops
$errorHandler = new Whoops\Run();
$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler());
$errorHandler->register();

use Carbon\Carbon;

$today = Carbon::now()->toDayDateTimeString();

// mit ppp+tab erzeugt pre print_r
echo '<pre>';
print_r($today);
echo '</pre>';

// Alternative Zeitausgabe mit var_dump
//var_dump($today);

new Book();
echo '<br>';
new App\TextBook();
echo '<br>';

// Alternative zu App\Textbook nur ohne App-Directory als kuenstlichen Fehler
//new TextBook();
//echo '<br>';


//require __DIR__ . '/classes/Move.php';
//require __DIR__ . '/library/Lib.php';

new Lib;
echo '<br>';
new Move;
echo '<br>';
connect();