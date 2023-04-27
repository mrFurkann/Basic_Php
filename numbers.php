<?php

    $sayi1 = 10;
    $sayi2 = 20;

    echo "sonuc: ".($sayi1 + $sayi2)."<br>";
    echo "sonuc: ".($sayi1 - $sayi2)."<br>";
    echo "sonuc: ".($sayi1 * $sayi2)."<br>";
    echo "sonuc: ".($sayi1 / $sayi2)."<br>";
 
    echo is_int($sayi1)."<br>";  // is_int değerin integer mi değil olduğunu kontrol eder mi eğer int ise 1 değeri gelir ekrana eğer int değilse ekrana bir şey gelmez (false) olur.

    echo var_dump(is_int($sayi1))."<br>";  // var_dump() veri tipini ekrana yazar

    echo var_dump($sayi2)."<br>"; // var_dump() veri tipini ekrana yazar

    echo var_dump(is_float($sayi1))."<br>"; //is_float ondalık mı değil mi kontrol eder.

    echo var_dump(is_numeric('a10'))."<br>"; //numeric mi değil mi kontrol eder.

    // Yuvarlama Methotları

    echo ceil(4.3)."<br>"; //ceil() Dediğimizde sayıyı her zaman yukarıya yuvarlar.
    echo floor(4.7)."<br>"; //floor() Dediğimizde Sayıyı Her Zaman Aşağı Yuvarlar.
    echo round(4.7)."<br>"; //round() Dediğimizde Sayı Hangi Sayıya Yakınsa Ona Yuvarlar.
    echo round(4.4)."<br>"; //round() Dediğimizde Sayı Hangi Sayıya Yakınsa Ona Yuvarlar.
    echo sqrt(25)."<br>"; //sqrt() Dediğimizde Girilen Sayının Karekökünü Alır.
    echo abs(-25)."<br>"; //abs() Dediğimizde Girilen Sayının Mutlak Değerini Alır.
    



?>