
<?php

include("bağlama.php");

$sql = "SELECT * FROM arızabildirimigönder";


$cevap = mysqli_query($con,$sql);

if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($con);
}



while($gelen=mysqli_fetch_array($cevap))
{

    $mesaj= $gelen['arıza_mesaj'];
    $birim=$gelen['arıza_birim'];
    $dosya=$gelen['arıza_dosya'];

}

