<?php
/*
variabel berisi string
*/
$a = 'Alwi';
//echo $a;
// variabel berisi string
// atau desimal
$d = 1.2;
$e = 1;
//echo $d;
//echo $e;


//menggabungkan 2 variabel
$x = "Hello ";
$w = "World";
$z = $x.$w;
//echo $z; //Hello World

$m = "Test 1";
//echo $m."<br>";//Test 1
$m .= "Test 2";
//echo $m."<br>";//Test 1Test 2
$m .= "Test 3";
//echo $m;//Test 1Test 2Test 3

$q = 10;
$v = 5;
$ka = $q*$v;
$ba = $q/$v;
$ta = $q+$v;
$ku = $q-$v;
$mod = $q%$v;
//echo $ka."<br>";
//echo $ba."<br>";
//echo $ta."<br>";
//echo $ku."<br>";
//echo $mod."<br>";

//tipe data
$s = "Hello"; //<- teks
$i = 4; //integer/angka
$d = 1.2;//double/desimal
$b = true;//boolean
$arr = array(8);//array

var_dump($s);//string(5) "Hello"
var_dump($i);//int(4)
var_dump($d);//float(1.2)
var_dump($b);//bool(true)
var_dump($arr);//array(0){}


?>
