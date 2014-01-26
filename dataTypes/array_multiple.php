<?php

$musteri = array(
    'ad'=> 'asd',
    'soyad'=> 'asdf',
    'email'=> 'asd@ghm.com',
    'adres'=> array(
        'ev'=> 'eyüp',
        'fatura'=>'bjk',
    ),
    'banka'=> array(
    array(
        'bankaAdi'=>'a',
        'subeKodu'=>123,
        'hesapNo'=>123456,
    ),
    array(
        'bankaAdi'=>'b',
        'subeKodu'=>123,
        'hesapNo'=>123456,
    )
  )
);

//müşteri adı yazdırılır
echo $musteri['ad'].'<br>';

//müşteri fatura adresi yazdırılır
echo $musteri['adres']['fatura'].'<br>';

//2. banka hesap bilgilerine ulaşılır
echo $musteri['banka'][1]['hesapNo'];
echo $musteri['banka'][2]['hesapNo'];


//diziyi objeye çevirelim
$objMusteri = (object)$musteri;

//müsteri ası yazılır
echo $objMusteri->ad. '<br>';

//müsteri fatura adresi

