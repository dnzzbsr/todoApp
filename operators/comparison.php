<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sonuc = 5 <7 ; // > , < , <=, >=, ==, ===
//echo $sonuc; // 1, ' ' döner, bool çünkü
var_dump($sonuc);

$a = 5;
$b = 10/2;
$sonuc2 = $a != $b;  // a=b, sonuc2 a'nın b'ye eşit olmama durumunda mı --> false!!
var_dump($sonuc2);

$not1 = rand(0, 100);
echo $not1;
$sonuc3 = $not >= 80; // eğer not 80 e eşitse ya da büyükse TRUE
$sonuc4 = $not <= 44; // eğer not 44 e eşitse ya da küçükse TRUE
var_dump($sonuc3);
// Equal:      ==   veri değerleri aynı mı bakar
// Identical:  ===  veri tipleri ve değerleri aynımı diye bakar
// Not Identical: !==
$sayi4 = 69;
$sayi5 = '69';
$sonuc5 = $sayı4 == $sayı5;  //true
$sonuc6 = $sayı4 === $sayı5; //false
var_dump($sonuc5);
var_dump($sonuc6);