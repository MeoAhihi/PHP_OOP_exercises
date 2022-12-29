<?php

require 'fraction.php';

$a = new \fraction\fraction(3,8);
$b = new fraction\fraction(-1, 3);

echo $a->add($b).'<br>';
echo $a->subtract($b).'<br>';
echo $a->multiply($b).'<br>';
echo $a->divide($b).'<br>';
echo $a->compare($b).'<br>';
