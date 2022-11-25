
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

if(isset($_POST['submit'])){
    include "bağlama.php";
if(!$con){
    echo"Bağlantı başarısız";
}  
else{
    $arıza_mesaj=$_POST['mesaj'];
    $arıza_birim=$_POST['birim'];
    $arıza_dosya=$_POST['customFile'];



    $d = "INSERT INTO arızabildirimigönder (arıza_mesaj,arıza_birim,arıza_dosya)
          VALUES('{$arıza_mesaj}','{$arıza_birim}','{$arıza_dosya}')";
	   

if(mysqli_query($con,$d)){
        echo'<script type ="text/javascript">alert ("Bağlantı Tamamlandı")</script>';
        header("location: liste2.php");
}
else{
    echo"Başarısız!";
}

}
mysqli_close($con);
}

?>
</body>
</html>
