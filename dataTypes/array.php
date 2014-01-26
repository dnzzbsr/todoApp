<?php

$ad = 'Hasan';

$notlar = array(35,40,70,81);
 var_dump($notlar); // var dump içine koyduğun değişkeni v tipini söyler
 print_r($notlar);  // print_r ile de yapılabilir.
 
 //indexdeki veriyi yazdırmak
  echo $notlar[3].'<br>';
 
 //count fonk: verilen değişkenin eleman sayısını belirtir
 echo count($notlar);
 
 $notlar[6]=68;
 var_dump($notlar); 
 
 echo '<br>';
 
 $notlar[] =79;
 var_dump($notlar); 
 
 $notlar[kanaat] = 99; // string de tutar
 var_dump($notlar); 
 
  $notlar[] =712; // index kaldığı yerden devam eder
 var_dump($notlar); 
 
 

