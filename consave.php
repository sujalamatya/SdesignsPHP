<?php 
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
     $msg = trim($_POST['msg']);
    

    $save = "insert into contact(`name`,`PhoneNumber`,`email`,`message`) 
    values ('$name','$phone_no','$email','$msg')";
    $savedata = $conn->query($save);
    header('location: ./index.php');
}