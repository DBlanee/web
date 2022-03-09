<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

$isim = "Berkay KAYAOĞULLARI ";
$üni = "Aydın Menderes Üniversitesi ";
$MYO = " Aydın Meslek Yüksekokulu ";
$No = 216001035;








?>

  <table border=6>
        <tr>
            <td> <?php echo $isim ?> </td> 
            <td><?php echo $üni ?> </td>
            <td><?php echo $MYO ?> </td>
            <td><?php echo $No ?> </td>
        </tr>
    </table> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    

    <form action ="">
        <label for= "isim" > "İsim"</label>
        <input type="text" name="" value="<?php echo $isim; ?>" id="isim"> <br> 

        <label for= "üni" > "Üniversite"</label>
        <input type="text" name="" value="<?php echo $üni; ?>" id="üni"> <br>
        
        <label for= "MYO" > "Meslek Yüksek Okulu"</label>
        <input type="text" name="" value="<?php echo $MYO; ?>" id="MYO"> <br> 

        <label for= "NO" > "Öğrenci Numarası"</label>
        <input type="text" name="" value="<?php echo $No; ?>" id="NO"> <br> 
</form>
        









    
</body>
</html>