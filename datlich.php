<?php
$conn = mysqli_connect('localhost','root','root','clinic');
if(!$conn){
    echo 'fail';
    exit();
}

if(isset($_POST['data_time']) && isset($_POST['data_date'])){
   // echo"$_POST[data_time] and $_POST[data_date]";
    $qr = "INSERT INTO `test`(`id`, `khung_gio`, `ngay`) 
    VALUES (null,'$_POST[data_time]','$_POST[data_date]')";
    mysqli_query($conn,$qr);
    echo 'success';
}
else
    echo "<script>alert('fail')</script>";
?>