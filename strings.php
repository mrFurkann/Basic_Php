<?php 


    $urunAdi = "Iphone 14";
    $urunFiyat = 30000;
    $kdvOrani = 0.18;

    $urunFiyat = $urunFiyat + ($urunFiyat * $kdvOrani);


    // $sonuc = $urunAdi." İsimli Ürün Fiyatı ".$urunFiyat." TL.";
    $sonuc = "{$urunAdi} İsimli Ürün Fiyatı {$urunFiyat}TL.";  // Yukarıdaki işlevin farklı kullanımı 

    echo $sonuc."<br>";
    echo $sonuc[0]."<br>";
    echo $sonuc[20]."<br>";

    // string Foknsiyonları

    echo strlen($sonuc)."<br>"; // strlen() girilen string parametrenin kaç karakterli olduğunu söyler.

    echo str_word_count($sonuc)."<br>";  // Kelime Sayısını Verir.
    echo strtolower($sonuc)."<br>"; // Gönderilen Değerin Bütün Hepsini Küçük Harfe Çevirir.
    echo strtoupper($sonuc)."<br>"; // Gönderilen Değerin bütün Hepsini Büyük Harfe Çevirir.

    // String Fonksiyonlarına İhtiyaç Halinde 'PHP String Functions' dediğinizde Bakabilirsiniz.

    ?>