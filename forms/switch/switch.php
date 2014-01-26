<?php

$departman = isset($_POST['dropDownDepaartman']) ? $_POST['dropDownDepartman'] : null;

if ( !is_null($departman))
{
    switch ($departman) {
       case 1:
            echo 'emailiniz pazarlama@sirket.com\'agönderildi';
       break;
       case 2:
            echo 'emailiniz satıs@sirket.com\'agönderildi';
       break;
       case 3:
            echo 'emailiniz ik@sirket.com\'agönderildi';
       break;
       
       default:
            echo 'Seçilen departman mevcut değil';
       break;
    }
}