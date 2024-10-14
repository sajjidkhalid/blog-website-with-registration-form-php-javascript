<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'base/dbconn.php';


    $useremail = $_POST["useremail"];
    $password = $_POST["userpass"];




    $sqlemail = "select * from boy where Email='$useremail'";

    $result = mysqli_query($connection, $sqlemail);

    $row = mysqli_num_rows($result); //1


    if ($row == 1) {
       

     while ($item = mysqli_fetch_assoc($result)) {
            


           password_verify($password,$item["Password"]);
           session_start();

           $_SESSION["login"]=true;

           $_SESSION["email"]=$useremail;

           header("location:welcome.php");



        }



    } 

    
       
}


?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .demo{ background: #F2F2F2; }
.form-container{
    background-color: #e8ddbf;
    font-family: 'Nunito', sans-serif;
    text-align: center;
    padding: 60px 100px 100px;
    border-radius: 50%;
    margin:2px 2px;
}
.form-container .title{
    color: #666157;
    font-size: 30px;
    font-weight: 700;
    text-transform: capitalize;
    margin: 4px 4px 20px;
    display: inline-block;
    position: relative;
}
.form-container .form-horizontal .form-group{
    font-size: 0px;
    margin: 3px 5px 18px 2px;
}
.form-container .form-horizontal .form-control{
    color: #666157;
    background: #E6E6E6;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    height: 45px;
    padding: 6px 30px;
    border-radius: 50px;
    box-shadow: inset -3px -3px 10px #eee;
    border: none;
    border-top: 2px solid #CECECE;
    border-left: 2px solid #CECECE;
    margin:3px 3px;
}
.form-container .form-horizontal .form-control:focus{
    outline: none;
    box-shadow: none;
}
.form-container .form-horizontal .form-control::placeholder{
    color: #666157; 
    font-weight: 600;  
    font-style: italic;
}
.form-container .form-horizontal .btn{
    color: #fff;
    background-color: #e6a760;
    font-size: 25px;
    font-weight: 700;
    font-style: italic;
    text-transform: capitalize;
    width: 100%;
    border: none;
    border-radius: 50px;
    box-shadow: inset -3px -3px 10px #bd841b;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .btn:hover{ letter-spacing: 3px; }
.form-container .form-horizontal .btn:focus{ outline: none; }
@media only screen and (max-width:479px){
    .form-container{
        padding: 50px 50px 70px;
        border-radius: 30%;
    }
}


    </style>
  </head>
  <body>
  <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-container">
                    <h3 class="title">login page</h3>
                    <form class="form-horizontal" action ="login.php" method="post">
                        
                        <div class="form-group">
                        <label>Email</label>
                            <input type="email" class="form-control" name="useremail"placeholder="useremail">
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="userpass">
                        </div>
                       
                       
                        <button class="btn btn-default">login page </button>
                         
                        <button class="btn btn-default"> <a href="signup.php">forget password</a> </button>
                        <ul class="social-links">
                                <li><a href=""><i class="fab fa-google"></i> Login with Google</a></li>
                                <li><a href=""><i class="fab fa-facebook-f"></i> Login with Facebook</a></li>
                            </ul>
                            <span class="signup-link">Don't have an account? Sign up <a href="signup3.php">signup here</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>