<?php

require 'fraction.php';

$a = new fraction\fraction(5, 9);
echo $a.PHP_EOL;

$a->input(4,-8);
$a->simplify();
echo $a;