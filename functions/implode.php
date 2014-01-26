<?php

/*
 * Diziyi birleştirerek bir string döndürür.
*/

$meyveler = array(elma, armut, portakal);

$cumle_yap = implode(', ',$meyveler); // , ile ayırark meyveler dizisinin elemanlarını birleştirerek string oluşturur

echo $cumle_yap;