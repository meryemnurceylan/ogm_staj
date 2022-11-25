
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

if(isset($_POST['submit'])){
    include "bağlama.php";
if(!$con){
    echo"Bağlantı hatalı";
}  
else{
    
    $bağış_adı=$_POST['uname'];
    $bağış_posta=$_POST['pwd'];
    $bağış_tel=$_POST['tel'];
    $bağış_türü=$_POST['opsion'];
   

    $d = "INSERT INTO bağış (bağış_adı,bağış_posta,bağış_tel,bağış_türü)
          VALUES('{$bağış_adı}','{$bağış_posta}','{$bağış_tel}','{$bağış_türü}')";
	   

if(mysqli_query($con,$d)){
        echo'<script type ="text/javascript">alert ("Bağış Yapıldı")</script>';
        header ("location:liste4.php");
}
else{
    echo"Bağlantı Hatalı";
}

}
mysqli_close($con);
}

?>
</body>
</html>
