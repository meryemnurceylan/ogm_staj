
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
    $üye_adı=$_POST['uname'];
    $üye_posta=$_POST['posta'];
    $üye_tel=$_POST['tel'];
    $üye_sifre=$_POST['pswd'];


    $d = "INSERT INTO üyeolma (üye_adı,üye_posta,üye_tel,üye_sifre)
          VALUES('{$üye_adı}','{$üye_posta}','{$üye_tel}','{$üye_sifre}')";
	   

if(mysqli_query($con,$d)){
        echo'<script type ="text/javascript">alert ("Bağlantı Tamamlandı")</script>';
        header("location: giriş.php");
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
