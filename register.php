<?php include('reg.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="reg.css">

<body>


     <section id="header">
        <a href="#"><img src="image/logo/logo.png" class="logo"></a>
        <div>
            <ul id ="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown">
                  <a  class="active" href="#">  Customer</a>
                  <ul class="dropdown-content">
                    <div class="login"><li><a href="login.php">Log In</a></li></div>
                    
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#"> Admin</a>
                  <ul class="dropdown-content">
                      <li><a href="login.html">LogIn</a></li>
                      <!-- Add other customer-related links here if needed -->
                  </ul>
              </li>
                <li><a href= "cart.html"><img src="image/logo/cart.png"></a></li>
            </ul>

        </div>
    </section>
    <section id="container" class="section-p1">
        <div class="form-box-login">
            <h1>Sign Up</h1>
                <form action="register.php" method="post">
                    <div class="input-box">
                        <label id="username">Username</label>
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span><br>
                        <input type="text" required name="username">
                    
                    </div>
                    <div class="input-box">
                        <label id="email">Email</label>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
                        <input type="email" required name="email">
                    
                    </div>
          
                    <div class="input-box">
                        <label id="password">Confirm-Password</label>
                        <span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span><br>
                        <input type="password" required name="password">
                        
                    </div>

                        
                    
                    <button type="submit" class="btn1">Register Now</button><br>
                    <button type="reset" class="btn2">Reset</button>
                
                </form>
        </div>
    </section>
    <footer class="section-p1">
      <div class="col">
          <img src="image/logo/logo.png">
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