<?php 
include ("connector.php");

$id="user".rand();
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

if($password1 == $password2){
    if (!mysqli_query($conn, "INSERT INTO user_andhika VALUES ('$id','$name','$email','$password2','$phone')")){
        echo ("Error description: " . mysqli_error($conn));
    }
    $_SESSION['registered'] = 'Berhasil Register';
    header("location:../pages/Login-Andhika.php");
}
else{
    echo "<script>
alert('Password Tidak Cocok');
window.location.href='../pages/Register-Andhika.php';
</script>";
}
?>