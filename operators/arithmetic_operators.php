<?php

$siparisAdet1 = 56;

$siparisAdet2 = 67;

$birimFiyat = 25.20;

$kdv = 18;

echo '<br>';

$toplamSiparisAdet = $siparisAdet1 + $siparisAdet2;

$toplamKdvHaricTutar = $toplamSiparisAdet + $birimFiyat;

$toplamKdvDahilTutar = $toplamKdvHaricTutar + ($toplamKdvHaricTutar / 100 * $kdv);

echo 'Toplam Borcunuz: '. number_format($toplamKdvDahilTutar, 2, ',','.').'<br>';



