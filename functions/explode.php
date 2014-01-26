<?php

/* 
 * String ifadeyi diziye döznüştürür
 */

$cumle = 'YILDIZSEM egitim gurubu';

$dizi = explode(' ',$cumle); // boşluklarla ayır, cümleyi
var_dump($dizi);

echo 'Bu cümlede toplam'.count($dizi).'sözcük vardır';
       
