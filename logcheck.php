<?php
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $pw = $_POST['password'];
        $sql="SELECT * from userinfo
        where email=$email
        PASSWORD=$pw";
    $savedata = $conn->query($sql);
    echo $savedata;
    // $count=mysqli_num_rows($res);
    // if($count==1){
    //     header('location:./index.html');
    // }
    // else{
    //     echo "invalid email and password";
    // }
    }
?>