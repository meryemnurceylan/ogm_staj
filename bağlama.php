<?php
    $server = 'localhost' ;
    $userName = 'root'; 
    $password= '';
    $dB = 'arıza';
 $con = mysqli_connect ($server,$userName,$password,$dB);
if(!$con){
    echo"Bağlantı başarısız";
}    

?>
