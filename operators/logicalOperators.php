<?php

/* 
 *
    and	And	$x and $y	 True if both $x and $y are true
    or	Or	$x or $y	 True if either $x or $y is true
    xor	Xor	$x xor $y	 True if either $x or $y is true, but not both
    &&	And	$x && $y	 True if both $x and $y are true
    ||	Or	$x || $y	 True if either $x or $y is true
    !	Not	!$x              True if $x is not true
 * 
 */

/**
 * Kurallar:
 * Devamsızlık 90 saatin %70'inden fazla ise Sertifika ALAMAZ!
 * Not 70'ten az ise Sertifika ALAMAZ!
 * 90 saatin %70'inden fazla DEVAM eder ve not 70'ten fazla olursa SERTİFİKA alır!
 * 90 saatin %70'inden fazla DEVAM eder ve not 70'ten az olursa KATILIM BELGESİ alır!
*/
header('Content-Type:text/html; Charset = UTF-8');

$ogrenci = array(
    'ad' =>'asd',
    'soyad'=> 'asdf',
    'not' => rand(0, 100),
    'devamsızlık'=>rand(0,90),
);

$objOgrenci1 = (object)$ogrenci;

echo 'Öğrencinin adı soyadı: '. $objOgrenci1->ad .''.$objOgrenci1->soyad;
echo '<br>';
echo 'Öğrencinin devamsızlığı: '. $objOgrenci1->devamsızlık .' /90';
echo '<br>';
echo 'Öğrencinin notu: '. $objOgrenci1->not .' /100';
echo '<br>';

$belgedurum = null;

if ($objOgrenci1->katılım * 100 / 90 >= 70) { //devamsızlık %70 ten büyük veya eşit ise
    echo 'Öğrenci belge almaya <span style = "color:green"> hak kazandı</span>'.'<br>';
    $belgeDurum = true;
}else {
    echo 'Öğrenci belge almaya<span style = "color:red"> hak kazanamadı </span>';
    $belgeDurum = false;
}

if ($belgeDurum == true && $objOgrenci1->not >= 70) { // belge almaya hak kazandıysa ve notu 70 ten büyükse 
    echo 'Öğrenci Sertifika almaya hak kazandı'.'<br>';
} else {
    echo 'Öğrenci Katılım Belgesi almaya hak kazandı'.'<br>';
}