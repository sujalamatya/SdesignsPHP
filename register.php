<?php
    
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
      <div id="mySidenav" class="sidenav">
         <ul class="menu_sidebar">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="index.php"> Home</a></li>
            <li><a href="about.php"> About</i></a></li>
            <li><a href="what_we_do.php"> What we do</a></li>
            <li><a href="contact.php"> Contact Us</a></li>
         </ul>
      </div>
      <header class="header">
         <div class="header_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="full">
                        <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img src="img/menu_icon.png" alt="#" /></span>
                        <div class="logo_circle">
                          <a href="index.php"><img class="img-responsive" src="img/logo.png" alt="#" /></a>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="float-right">
                        <ul class="top_links">
                           <li><a href="login.php"><img src="images/profile_icon.png" alt="#" /></a></li>
                           <li class="searchbar">
                              <input class="search_input" type="text" name="" placeholder="Search...">
                              <a href="#" class="search_icon"><img src="images/search_icon.png" alt="#" /></a>
                           </li>
                        </ul> 
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </header>
      <!-- end header -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <!-- <div id="slider_main" class="carousel slide" data-ride="carousel"> -->
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="full">
                           <!-- <div class="left_blog_top">
                              
                              
                           </div> -->
                           <div class="container">
            <div class="row" style="margin: 30px;">
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-control mx-auto col-4 border border-primary border-3 p-3"><br>
                        <h3 class="section-title">Create an account</h3>    
                        <label>Full Name:</label>
                        <input type="text" placeholder="Full Name..." name="fullname"><br>
                        <label>UserName:</label>
                        <input type="text" placeholder="Username..." name="username"><br>
                        <label>Email:</label>
                        <input type="text" placeholder="Email address..." name="email"><br>
                        <label>Password:</label>
                        <input type="password" placeholder="Password..." name="password"><br>
                        <label>Re-Password:</label>
                        <input type="password" placeholder="Repassword..." name="repassword"><br>
                        <button type="submit" class="btn btn-success" name="register">Register</button>
                    </form>
            </div>
<?php
include 'dbconfig.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];

        if($username==NULL){
            echo "<script>alert('Enter Username')</script>";
            header('location:index.php');

        }
        else if($fullname==NULL){
            echo "<script>alert('Enter your name')</script>";
            header('location:index.php');

        }
        else if($email==NULL){
            echo "<script>alert('Enter your email')</script>";
            header('location:index.php');

        }
        else if($password==NULL){
            echo "<script>alert('Enter your password')</script>";
            header('location:index.php');

        }
        else if($repassword==NULL){
            echo "<script>alert('Enter your re-password')</script>";
            header('location:index.php');

        }
        else if($password!=$repassword){
            echo "<script>alert('Passwords does not match, Try Again')</script>";
            header('location:index.php');
        }

        else{
            $sql="INSERT INTO users(FullName,Username,Email,`Password`)
        values('$fullname','$username','$email','$password')
        ";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Account Created, Please Login In')</script>";
            header('location:index.php');
        }
        else{
            echo "<script>alert('Error, Please Register Again')</script>";
            header('location:index.php');
        }
        }

    }
}
?>
    </div>
                           <!-- <div class="right_blog_top">
                              <img src="img/slide1_right.png" alt="#" />
                           </div> -->
                        </div>
                     </div>
                  </div>
                  
            </div>
         </div>
      </div>
      <!-- End Banner Slider -->
<!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <!-- wow animation -->
      <script src="js/wow.js"></script>
      <!-- menumaker -->
      <script src="js/menumaker.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
</body>
</html>