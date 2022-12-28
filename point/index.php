<?php
require './point.php';

$A = new Point(2,9);
$B = new Point(-1,-5);

var_dump($A->distance($B));

$B->input(2,-6);

var_dump($B->distance($A));

var_dump($A->output());
var_dump($B->output());