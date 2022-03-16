<!DOCTYPE html>
<html lang="Tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <?php

      echo "<hr><h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
      echo "Adnan Menderes Üniversitesi";
      $üni="Adnan Menderes Üniversitesi";
      echo "Değişken İçeriği";
      echo "<br>";
      /* Değişkenin ismini yazdırır*/
      echo "1-Kazandığınız Üniversite:" . '$üni'; 
      echo "<br>";
      /* Değişkenin içeriğini yazdırır */
      echo "2-Kazandığınız Üniversite:" . "$üni"; 
      echo "<br>";
      /* Değişkenin içeriğini yazdırır*/
      echo "3-Kazandığınız Üniversite:"  .  $üni;
      echo "<br>";
      
      echo "<hr><h4> Temel Matematiksel işlemler </h4>";
      echo "<h5>Toplama İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 + $sayi2 = ' . ($sayi1 + $sayi2);
    echo "<br>";
    echo "$sayi1 + $sayi2 = " .  ($sayi1 + $sayi2);
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";


    echo "<h5>Çıkartma İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 - $sayi2 = ' . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2 = " .  ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";

    echo "<h5>Çarpma İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 * $sayi2 = ' . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2 = " .  ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";


    echo "<h5>Bölme İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 / $sayi2 = ' . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2 = " .  ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";


    echo "<h5>Üst Alma İşlemi(pow)</h5>";


    $x=3;
    $y="4";
    echo "<br> Değişken Tipi: $y >>>" . gettype($y) . "<br>";
    echo "$x<sup>$y</sup>=" . (pow($x,$y));


    echo "<h5>Karekekök Alma İşlemi(sqrt)</h5>";
    $x=25;
    $karekök=sqrt($x);
    echo "$x'in Karekökü: $karekök";
    
  
   echo "<h5> Mutlak Değer İşlemi(abs)</h5>";
   $x=-4;
   $mutlak=abs($x);
   echo "$x'in Mutlak Değeri: $mutlak";

   echo "<h5> Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h5>";
   $sayi=50;
   $taban=10;
   $yenitaban=2;
   echo "27 sayısının 2'lik tabandaki karşılığı:". base_convert(27,10,2);
   echo "<br>";
   $sonuc=base_convert($sayi,$taban,$yenitaban);
   echo "($sayi)<sub>$taban</sub>: ($sonuc)<sub>$yenitaban</sub>";

   echo "<h5>Mod İşlemi(fmod(x,y))</h5>";
   $x=20;
   $y=4;
   $mod=fmod($x,$y);
   echo "$x mod $y= $mod";
   echo "$x sayısı:" . (fmod($x,2)==0) ? "Çifttir." : "Tektir" ;


   echo "<h5> Yuvarlama İşlemi(round(x,y)</h5>";
   $x= 15.375;
   $y=15.323;
   echo "<br>$x Bir Ondalık Basamak Yuvarlaması:" . round($x,1);
   echo "<br>$y Bir Ondalık Basamak Yuvarlaması:" . round($y,1);



   echo "<h5> Yuvarlama İşlemi(floor(x,y)</h5>";
    /* Her Zaman en yakın  aşağı Tam sayı değerine yuvarlama işlemi yapar */
    $x = 15.315;
    
    echo "$x:" . floor($x);


    echo "<h5> Yuvarlama İşlemi(ceil(x,y)</h5>";
    /* Her Zaman en yakın yuları Tam sayı değerine yuvarlama işlemi yapar */
    $x = 15.315;
    echo "$x:" . ceil($x);

    echo "<h5> rastgele sayı üretme (rand())</h5>";
    echo "10-100 arasında rastgele değer:" . rand(10,100);

     for ($i =1; $i <=10; $i++) {
             echo "<br>$i Eleman:" . rand(10,100);
     }     


    ?>
    
</body>
</html>