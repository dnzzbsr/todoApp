<?php
/**

echo $_GET['txtSayi'];

echo $_GET['btnSubmit'];

echo $_GET['txtSayi2'];
 * 
 */
header('Content-Type: text/html; charset=utf-8');

$sayi = isset($_GET['txtSayi']) ? $_GET['txtSayi']: NULL;

$mod = $sayi % 2; 

if (is_null($sayi)){
    echo 'Lütfen bir sayi giriniz';
}else if ( $mod == 1){
    echo 'Sayi tektir.';
} else{
    echo 'Sayi çifttir.';
}