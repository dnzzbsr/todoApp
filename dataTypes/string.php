<?php

$foo = '2so4';

$ad = 'Hasan  $foo'; // hasan $foo döner
echo $ad;
echo '<br>';

$ad2 = "Hasan <span onclik='alert(\"Holla!\");'>$foo</span>"; // hasan 2so4 döner
echo $ad2;
echo '<br>';
echo "\n test".'<br>'."\n";


$ogrenciAdi = 'asd';
$ogrenciSoyadi = 'bsd';

echo $ogrenciAdi.' '.$ogrenciSoyadi;