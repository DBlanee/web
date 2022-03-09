<!DOCTYPE html>
<html lang="Tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama -I  </title>
</head>
<body>
    <!-- Açıklama Satırı -->
    <?php
    // Açıklam Satırı
    /*  Açıklama Satırı Bloğu 
      Shift+Alt+a 
    */
    /* Kullanılan Komutlar
    echo: Ekrana Yazdırma İşlemi Yapar. 
        İçersinde Html Etiketleri Kullanılabilir.
        Çift veya Tek Tırnak İle kullanılabilir.
        Çift tırnak içerisinde değişken içerikleri gösterilir.
        Nokta işareti (.) ile birleştirme yapılabilir.
        \ Kaçış karakteridir. Özel İfadelerden önce kullanılır.x
        */

     echo "<h3> Aydın Adnan Menderes Ünİversitesi</h3>"; 
     echo "<h4> Aydın Meslek Yüksekokulu </h4>"; 
     echo " Bilgisayar Programcılığı " . "Web Teknolojileri" . "<br>" ;
     echo "Bilgisayar Programcılığı " . "<br>" . "Web Teknolojileri";


     echo "<hr> <h4> Değişken Tanımlama Kuralları </h4>";
     echo "<ol>
              <li> Değişken isimleri $ ile başlar </li>
              <li> Değişkenler Ekrana echo ile yazdırılır </li>
              <li> Değişken isimleri sayılsal bir ifade ile başlamaz </li>
              <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa örnek:Birinci_Sinif örneklerdeki gibi kullanımlar önerilir  </li>
              <li> Değişken ve dosya isimlerinde türkçe karakterler kullanılmamalıdır. </li>    
              <li> Değişken isimlerde büyük-küçük harf kullanımına duyarlıdır.  \$ sayi != Sayi </li> 
              <li> Değişken içerisinde eğer metinsel ifade varsa Çift Tırnak (\") veya tek tırnak (') </li>  
              <li> Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>  
              <li> Değişkenin ismi, değişkenin içeriğini ifade etmelidir. </li>
     </ol>";
     
     echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4>";

     $isim = "Ahmet" ;
     $soyisim = "Davut";
     $yas = 34;

     echo $isim ." ". $soyisim;
     echo "<br>";
     echo "$isim $soyisim";

     /*  Uygulama:
         
          Üniversite-MYO-Ad-Soyad-Numara değişkenlerini içeriğini uygun şekilde doldurunuz.
          Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
          

     
     
     */




     /* Değişken tanımlama Kuralları
    

     */




     


    ?>
</body>

</html>