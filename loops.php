<?php

    // for , while , foreach


// for ($i=40; $i <= 100 ; $i+= 2) {  

//     if ($i % 3 == 0) {
//         echo $i."<br>";
//     } 
// }


// $isimler = ["ali","ahmet","ayşe","canan","volkan"];

// for ($i=0; $i < count($isimler); $i++) {  // count($isimler) içindeki değer in içindeki eleman sayısı kadar döner ( count($dizi) eleman sayısını verir ) bir dizideki ögeleri veya bir nesnedeki özellikleri sayar.
//     echo $isimler[$i]."<br>";
// }

//İç İçe Dizileri Dönme

$urunler = [
    ["iphone 14",40000],
    ["iphone 15",50000],
    ["iphone 16",60000]
];

// for ($i=0; $i < count($urunler); $i++) { 
//     // print_r($urunler[$i]);  // print_r() methodu gelen obje bilgisini sayfa üzerinde gösteribilir diziye string elemanına dönüşturur.

//     echo($urunler[$i][0])." ".$urunler[$i][1]."<br>"; 

// }

foreach ($urunler as $urun) {
    echo $urun[0]." ".$urun[1]."<br>"; 
}



?>