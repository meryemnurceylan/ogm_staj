<?php

include("bağlama.php");

$sql = "SELECT * FROM bağış";


$cevap = mysqli_query($con,$sql);

if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($con);
}



while($gelen=mysqli_fetch_array($cevap))
{

    $ad=$gelen['bağış_adı'];
    $posta=$gelen['bağış_posta'];
    $tel=$gelen['bağış_tel'];
    $tür=$gelen['bağış_türü'];

}

