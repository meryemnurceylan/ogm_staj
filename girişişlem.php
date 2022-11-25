<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include 'bağlama.php';
$üye_adı= $_POST['uname'];
$üye_sifre= $_POST['pswd'];
$s = "SELECT üye_id FROM üyeolma WHERE üye_adı='$üye_adı' && üye_sifre='$üye_sifre'";

$answer=mysqli_query($con,$s);

if(!$answer){
    echo '<br>Hata:'. mysqli_error($con);
}

else if($üye_adı!=null && $üye_sifre!=null){
    $row = mysqli_fetch_array($answer, MYSQLI_ASSOC);  
    $num=mysqli_num_rows($answer);
    echo $üye_adı.$üye_sifre;
if($num==1){
       session_start();
       $_SESSION['uname']=$üye_adı;
       header( 'Location: arızabildirimi.php');
}
else{
    echo'<script type ="text/javascript">alert ("Kullanıcı adı veya şifre hatalı")</script>';
    include 'giriş.php'; 
}
}
?>
</body>
</html>