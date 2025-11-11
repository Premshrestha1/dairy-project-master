<?php include('log.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
     
<!-- # Initialize session
session_start();

# Check if user is already logged in, If yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
}

# Include connection
require_once "./config.php";

# Define variables and initialize with empty values
$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your username or an email id.";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
  } else {
    $user_password = trim($_POST["user_password"]);
  }

  # Validate credentials 
  if (empty($user_login_err) && empty($user_password_err)) {
    # Prepare a select statement
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind variables to the statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_login);

      # Set parameters
      $param_user_login = $user_login;

      # Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        # Store result
        mysqli_stmt_store_result($stmt);

        # Check if user exists, If yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          # Bind values in result to variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {
            # Check if password is correct
            if (password_verify($user_password, $hashed_password)) {

              # Store data in session variables
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              $_SESSION["loggedin"] = TRUE;

              # Redirect user to index page
              echo "<script>" . "window.location.href='./'" . "</script>";
              exit;
            } else {
              # If password is incorrect show an error message
              $login_err = "The email or password you entered is incorrect.";
            }
          }
        } else {
          # If user doesn't exists show an error message
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>" . "window.location.href='./login.php'" . "</script>";
        exit;
      }

      # Close statement
      mysqli_stmt_close($stmt);
    }
  }

  # Close connection
  mysqli_close($link);
}
?>  -->
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap');
    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'League Spartan', sans-serif;
    
    
}
 /*header start*/
 #header{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 10px 80px;
   position: sticky;
   top: 0;
   left: 0;
   z-index: 999;
   background-color: #E3E6F3;
   box-shadow: 1px 4px rgb(0, 0, 0 ,0.06);
   color: white;
 }
 .logo{
   max-width:15rem;
   background: transparent;
 }

 #navbar{
   display: flex;
   align-items: center;
   justify-content: space-between;
}
 #navbar li{
   list-style: none;
   padding: 0px 20px;
   position: relative;

 }
 #navbar li a{
   text-decoration: none;
   font-size: 16px;
   font-weight: 300;
   color: #1a1a1a;
   transition: 0.03s ease;
   font-size: 20px;
}
 #navbar li a:hover,
 #navbar li a.active{
   color: #088178;
 }
 #navbar li a img{
  max-width: 30px;
 }

 #navbar li a.active::after, #navbar li a:hover::after{
   content: " ";
   width: 30px;
   height: 2px;
   position: absolute;
   background: #088178;
   bottom: -4px;
   left: 20px;
 }
 .dropdown-content {
   display: none;
   position: absolute;
   top: 100%;
   left: 0;
   z-index: 1;
 }

.dropdown-content li {
   display: block;
   padding: 8px 12px; /* Add some padding to the dropdown items */
}

li.dropdown:hover .dropdown-content {
   display: block;
}

.dropdown-content a{
   text-decoration: none;
}
.login{
   border: 1px solid black;
   width: 100%;
   background-color: #E3E6F3;
   padding: 4px;
   border-radius: 8px;
}
.signup{
   border: 1px solid black;
   width: 100%;
   padding: 4px;
   margin-top: 4px;
   background-color: #E3E6F3;
   border-radius: 8px;
}
.login:hover{
   background-color: #fff;
}
.signup:hover{
   background-color: #fff;
}

.dropdown-content a{
   text-decoration: none;
}

 /*cointainer part*/
 #container{
    background-image:url(image/back1.jpg.jpg) ;
   height: 100vh;
   width : 100%;
   background-size: cover;
   background-position: top 25% right 0;
   padding: 0 80px;
   display: flex;
   flex-direction: column;
   align-items: flex-start;
   justify-content: center;
   
 }
 h1{
    font-size: 50px;
    line-height: 64px;
    color: #222;
}
h6{
    font-weight: 700;
    font-size: 20px;

 }
  .form-box-login {
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 2px;
    backdrop-filter: blur(20px);
    text-align: center;
    position: absolute;
    left: 400px;
    right: 0px;

  }
  .input-box{
    padding-top: 20px;
    
  }
  input[type="email"],
  input[type="password"]{
    height: 30px;
    width: 150x;
    background: transparent;
    font-size: 20px;
    font-weight: 500;
    border-radius: 4px;
  }
  .remember{
    padding-top: 20px;
    font-size: 15px;
  }
  .forgot{
    padding-top: 10px;
    font-size: 20px;
    padding-bottom: 10px;

  }
  .btn1 {
       width: 60%;
       height: 6vh;
       text-align: center;
       cursor: pointer;
       font-weight: 600;
       background-color: honeydew;
       font-size: 20px;
        margin-bottom: 20px; 
     }

     .btn2{
        width: 60%;
        height: 6vh;
        text-align: center;
        cursor: pointer;
        font-weight: 600;
        background-color: honeydew;
        font-size: 20px;
     }
     .login-register{
        padding-top: 20px;
     }
     
footer {
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
   position: relative;
   background-color: rgb(220, 220, 220);
   color: #000;
   height: 380px;
}
footer .col img{
   background: transparent;
   object-fit: cover;
   height: auto;
   max-width: 200pxpx;
   margin-bottom: 30px;
}
 
footer .col p{
   color: #1a1a1a;
   font-weight: 600;
   
}

footer .icons img{
   max-width: 30px;
   cursor: pointer;
}
footer .icons img:hover{
   background-color: #E3E6F3;
}

.col h4{
   padding: 10px 0px;
   margin-top: 2px;
   color: #222;

}
 
.col a{
   text-decoration: none;
   display: list-item;
   list-style: none;
   padding: 10px 0px;
   color: #222;
   font-weight: 600;
}
.copyright{
   position: absolute;
   top: 80%;
   left: 30%;
   font-weight: 800;
}
    </style>



<body>
     <section id="header">
        <a href="#"><img src="image/logo/logo.png" class="logo" ></a>
        <div>
            <ul id ="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown">
                  <a  class="active" href="#"> Customer</a>
                  <ul class="dropdown-content">
                        <div class="signup"> <li><a href="register.html">Sign Up</a></li></div>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#"> Admin</a>
                  <ul class="dropdown-content">
                      <li><a href="login.html">LogIn</a></li>
                      <!-- Add other customer-related links here if needed -->
                  </ul>
              </li>
                <li><a href= "cart.html"><img src="image/logo/cart.png" alt=""></i></a></li>
            </ul>

        </div>
    </section>

     <section id="container">
        <div class="form-box-login">
            <h1>Log In</h1>
                <form action="login.php" method="post">
                    <div class="input-box">
                        <label id="login">Username or Email</label>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
                        <input type="email"  required name="login">
                    
                    </div>
                    <div class="input-box">
                        <label id="Password">Password</label>
                        <span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span><br>
                        <input type="password"  required name="password">
                        
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember Me</label><br>
                    </div>
                      <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>  
                        
                    
                    <button type="submit" class="btn1">Log in</button><br>
                    <button type="reset" class="btn2">Reset</button>
                    <div class="login-register">
                        <h6>Don't Have an account?<a href="register.php" class="rregister-link">Sign Up</a></h6>
                    </div>
                </form>
        </div> 
    </section>

    
    <footer class="section-p1">
        <div class="col">
            <img src="image/logo/logo.jpg.png">
            <h4> Contact</h4>
            <p><strong>Address: </strong> Kushadevi -2 panauti,Kavre</p>
            <p><strong>Phone:</strong> +971234567</p>
            <p><strong>Service Hour</strong> 24/7 Available</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icons">
                    <img src="image/logo/facebook.png">
                    <img src="image/logo/instagram.png">
                    <img src="image/logo/twitter.png">
                    <img src="image/logo/whatsapp.png">
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Acounts</h4>
            <a href="login.html">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>
        <div class="col-pay">

        </div>
        <div class="copyright">
            <p>@ 2023 copyright reserved subhakamana pvt ltd</p>
        </div>
    </footer>
   
</body>
</html>