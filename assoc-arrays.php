<?php

    //Associative Diziler
    // key - value ---ÖNEMLİ---
    
    // 41 => kocaeli

    $plakar = array("41","53","34");
    $sehirler = array("kocaeli","rize","istanbul");


     //----------------------------------------------------------------

    $plakaBilgileri = array(
        "41" => "Kocaeli",
        "53" => "Rize",
        "34" => "İstanbul"
    );

    echo $plakaBilgileri["41"]."<br>";
    echo $plakaBilgileri["34"]."<br>";
    echo $plakaBilgileri["53"]."<br>";


     //----------------------------------------------------------------
    $telefonRehberi = [
        "Ali" => "44444",
        "Canan" => "55555",
        "Ahmet" => "66666"
    ];

    echo $telefonRehberi["Ali"]."<br>";


     //----------------------------------------------------------------


     $urun = [
        "urunAdi" => "Iphone 14",
        "fiyat" => 30000,
        "satisdami" => true
     ];

     echo $urun["urunAdi"]." ".$urun["fiyat"]." ".$urun["satisdami"]."<br>";


      //----------------------------------------------------------------


     // Birden Fazla Bilgiyi Nasıl Saklarız. Örneğin Ürünler Listesi Yapmak İsterseniz Aşağıdaki Gibi Yapmalısınız.

      $urunler = [
        [
            "urunAdi" => "Iphone 14",
            "fiyat" => 40000,
            "satisdami" => true
        ],
        [
            "urunAdi" => "Iphone 13",
            "fiyat" => 30000,
            "satisdami" => true
        ],
        [
            "urunAdi" => "Iphone 12",
            "fiyat" => 2000,
            "satisdami" => true
         ]
        ];

        echo $urunler[0]["urunAdi"]."<br>";     
        echo $urunler[1]["urunAdi"]."<br>";     
             
?>