<?php

require __DIR__ . '/vendor/autoload.php';

use Mghz\SearchEngine\SearchEngine;

$engine = new SearchEngine();
$engine->setEngine('google.ae');
$engine->search(['Motasesm']);