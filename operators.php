<?php 

    // 1 - Aritmetik 
    // 2 - Atama
    // 3 - Karşılaştırma
    // 4 - Mantıksal

  


    // 1 - Aritmetik
            // $a = 10;
            // $b = 5;

    // echo $a + $b."<br>";
    // echo $a - $b."<br>";
    // echo $a * $b."<br>";
    // echo $a / $b."<br>";
    // echo $a % $b."<br>"; // % mod alma kalanı bulma (Tek çift Karşılaştırmasını % ile yapabiliriz.)
    // echo $a * $b."<br>"; // * Üst almanıza yarar (Burada 10 un 5 Kere Çarpımnı Alır.)

    // echo $a++."<br>"; //a değeri 1 artar ++ sonda ekledğimiz için işlem sonrası artırma operatörüdür.
    // echo $a."<br>"; //a değeri 1 artar

    // echo ++$a."<br>"; //a değeri 1 artar ++ Başta Eklediğimiz İçin İlk Önce Arttırır Daha Sonra Ekrana Yazdırır.



    // 2 - Atama 

            // $a = 10;
            // $b = 5;

    // $a = $a + $b;
    //    $a += $b; //Yukarıdaki Yapılan İşlemin Kısaltmasıdır
    //    $a -= $b;
    //    $a *= $b;
    //    $a /= $b;
    // echo $a;

    // 3 - Karşılaştırma

            // $a = 10;
            // $b = 5;

    // $sonuc = ($a == $b);
    // $sonuc = ($a != $b);
    // $sonuc = ($a > $b);
    // $sonuc = ($a >= $b);
    // $sonuc = ($a < $b);
    // $sonuc = ($a <= $b);
    // echo var_dump($sonuc);


    // 4 - Mantıksal 
        // or (||) = Ya Da 
        // and (&&) = Ve 
        



     $yas = 20;
     $mezuniyet = "lise";
     
     $sonuc = ($yas >= 18);
     $sonuc = ($mezuniyet == "lise");

     $sonuc = ($yas >= 18 and ($mezuniyet == "lise") or $mezuniyet == "üniversite");

    echo var_dump($sonuc);
    





?>