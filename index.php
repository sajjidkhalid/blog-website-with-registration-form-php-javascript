<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require 'base/dbconn.php';
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $confirmpassword = $_POST["usercpassword"];
    $city = $_POST["usercity"];
    $contact = $_POST["usercontact"];
  
    $sqlemail = "SELECT * FROM `boy` WHERE Email='$email'";

    $result = mysqli_query($connection, $sqlemail);

    $row = mysqli_num_rows($result); //1

    if ($row > 0) {
        echo "useremail already exist";
    } else {

        if ($password == $confirmpassword) {

            $hashpasss= password_hash($password,PASSWORD_DEFAULT);

            $sqlinsert = "INSERT INTO `boy` (`name`, `email`, `password`, `contact`, `city`) VALUES ('$name', '$email', '$hashpasss', '$contact', '$city')";

            $resultins = mysqli_query($connection, $sqlinsert);
            if ($resultins) {
                echo "inserted";
            }
        } else {
            echo "password doesnot match";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo">blog <span>sajjid khalid</span></a>
            <a href="./signup.php" class="login">Sign up</a>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Trending Blog create by sajjid khalid</h2>
            <span class="home-subtitle">your blog is looking like a wow</span>
        </div>
    </section>
    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titletext">
                Here we have all Trending topics look and enjoy
            </h2>
            <p class="title-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint placeat fugiat corrupti consequatur, voluptas voluptatibus libero maxime aliquam similique ab unde iste at eveniet cumque sapiente voluptate quod beatae.
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quaerat voluptatum deserunt accusantium, laborum et sunt deleniti voluptatibus alias repudiandae quos ratione amet iste quibusdam blanditiis exercitationem eum quia. Velit.
                <a href="#" class="btn2">Read more</a>
            </p>
            

        </div>
        <div class="imgBx">
            <img src="./images/6.jpeg" alt="" class="fitbg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="tech">Tech</span>
        <span class="filter-item" data-filter="food">Food</span>
        <span class="filter-item" data-filter="news">News</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box tech">
            <img src="images/1.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/1.jpeg" alt="" class="profile-img">
                <span class="profile-name">Amazon Technology</span>
            </div>
        </div>
        <!-- Post 2 -->
        <div class="post-box tech">
            <img src="images/4.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">01 October 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/2.jpeg" alt="" class="profile-img">
                <span class="profile-name">New Car In Market</span>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="images/12.jpeg" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/12.jpeg" alt="" class="profile-img">
                <span class="profile-name">Fast Food In Hussainabad</span>
            </div>
        </div>
        <!-- Post 4 -->
        <div class="post-box news">
            <img src="images/5.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 September 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/5.jpeg" alt="" class="profile-img">
                <span class="profile-name">New Bengalow In Karachi</span>
            </div>
        </div>
        <!-- Post 5 -->
        <div class="post-box tech">
            <img src="images/7.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">14 Augest 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/7.jpeg" alt="" class="profile-img">
                <span class="profile-name">Mens Watches</span>
            </div>
        </div>
        <!-- Post 6 -->
        <div class="post-box news">
            <img src="images/8.jpeg" alt="" class="post-img">
            <h2 class="category">News</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 May 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/8.jpeg" alt="" class="profile-img">
                <span class="profile-name">Mens New Shoes</span>
            </div>
        </div>
        <!-- Post 7 -->
        <div class="post-box tech">
            <img src="images/9.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 December 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/9.jpeg" alt="" class="profile-img">
                <span class="profile-name">Fortuner Car</span>
            </div>
        </div>
        <!-- Post 8 -->
        <div class="post-box news">
            <img src="images/10.jpeg" alt="" class="post-img">
            <h2 class="category">News</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 October 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/10.jpeg" alt="" class="profile-img">
                <span class="profile-name">Daraz News</span>
            </div>
        </div>
        <!-- Post 9 -->
        <div class="post-box food">
            <img src="images/11.jpeg" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">24 April 2012</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/11.jpeg" alt="" class="profile-img">
                <span class="profile-name">Fast Food</span>
            </div>
        </div>
    </div>


<div class="container">
    <h1>REGISTRATION FORM</h1>
</div>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .form-container{
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 25px -15px rgba(0, 0, 0, 0.3);
}
.form-container .title{
    color: #000;
    font-size: 25px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 25px;
}
.form-container .title:after{
    content: '';
    background-color: #00A9EF;
    height: 3px;
    width: 60px;
    margin: 10px 0 0;
    display: block;
    clear: both;
}
.form-container .sub-title{
    color: #333;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 20px;
}
.form-container .form-horizontal{ font-size: 0; }
.form-container .form-horizontal .form-group{
    color: #333;
    width: 50%;
    padding: 0 8px;
    margin: 0 0 15px;
    display: inline-block;
}
.form-container .form-horizontal .form-group:nth-child(4){ margin-bottom: 30px; }
.form-container .form-horizontal .form-group label{
    font-size: 17px;
    font-weight: 600;
}
.form-container .form-horizontal .form-control{
    color: #888;
    background: #fff;
    font-weight: 400;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 12px;
    border-radius: 10px;
    border: 2px solid #e7e7e7;
    box-shadow: none;
}
.form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #dcdcdc; }
.form-container .form-horizontal .check-terms{
    padding: 0 8px;
    margin: 0 0 25px;
}
.form-container .form-horizontal .check-terms .check-label{
    color: #333;
    font-size: 14px;
    font-weight: 500;
    font-style: italic;
    vertical-align: top;
    display: inline-block;
}
.form-container .form-horizontal .check-terms .checkbox{
    height: 17px;
    width: 17px;
    min-height: auto;
    margin: 2px 8px 0 0;
    border: 2px solid #d9d9d9;
    border-radius: 2px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .check-terms .checkbox:before{
    content: '';
    height: 5px;
    width: 9px;
    border-bottom: 2px solid #00A9EF;
    border-left: 2px solid #00A9EF;
    transform: rotate(-45deg);
    position: absolute;
    left: 2px;
    top: 2.5px;
    transition: all 0.3s ease;
}
.form-container .form-horizontal .check-terms .checkbox:checked:before{ opacity: 1; }
.form-container .form-horizontal .check-terms .checkbox:not(:checked):before{ opacity: 0; }
.form-container .form-horizontal .check-terms .checkbox:focus{ outline: none; }
.form-container .signin-link{
    color: #333;
    font-size: 14px;
    width: calc(100% - 190px);
    margin-right: 30px;
    display: inline-block;
    vertical-align: top;
}
.form-container .signin-link a{
    color: #00A9EF;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: #00A9EF;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 160px;
    padding: 8px 15px 9px;
    border-radius: 10px;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    text-shadow: 0 0 5px rgba(0,0,0,0.5);
    box-shadow: 3px 3px rgba(0,0,0,0.15),5px 5px rgba(0,0,0,0.1);
    outline: none;
}
@media only screen and (max-width:479px){
    .form-container .form-horizontal .form-group{ width: 100%; }
    .form-container .signin-link{
        width: 100%;
        margin: 0 10px 15px;
    }
}


    </style>
  </head>
  <body>

  <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Register</h3>
                    <form class="form-horizontal" action = "signup3.php" method = "post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name = "username" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name = "useremail" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name = "userpassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name = "usercpassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label>User city</label>
                            <input type="text" class="form-control" name = "usercity" placeholder="User city">
                        </div>
                        <h4 class="sub-title">Personal Information</h4>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" class="form-control" name = "usercontact" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control">
                                <option value="paris">Paris</option>
                                <option value="new york">New York</option>
                            </select>
                        </div>
                        <div class="check-terms">
                            <input type="checkbox" class="checkbox">
                            <span class="check-label">I agree to the terms</span>
                        </div>
                        <span class="signin-link">Already have an account? Click here to <a href="">Login</a></span>
                        <button class="btn signup">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>









    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus quisquam minus quo illo numquam vel incidunt pariatur hic commodi expedita tempora praesentium at iure fugiat ea, quam laborum aperiam veritatis.</p>
                <ul class="sci">
                    <li><a href="https://github.com/sajjidkhalid"><i class="bx bxl-github"></i></a></li>
                    <li><a href="https://www.facebook.com/msajid.jhedu.3"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>Gulshan e iqbal <br> karachi <br> pakistan</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:codemyhobby9@gmail.com">sajjidkhalid@gmail.com</a></p>
                    </li>
                     <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="comment.php">Add a Comment On My Blog</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>
