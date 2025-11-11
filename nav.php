<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<Style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'League Spartan', sans-serif;
}

h1{
    font-size: 50px;
    line-height: 64px;
    color: #222;
}
 h2{
    font-size: 46px;
    line-height: 54px;
    color: #222;
 }
 h4{
    font-size: 20px;
    color: #222;

 }
 h6{
    font-weight: 700;
    font-size: 12px;

 }
 p{
    font-size: 16px;
    color: #456b42;
    margin: 15px 0 20px 0;
 }
 .section-p1{
    padding: 40px 80px;

 }
 .section.m1{
    margin: 40px 0px;
 }
 body{
    width: 100%;
   
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
   transition: 0.3s ease;
   font-size: 20px;
}
 #navbar li a:hover,
 #navbar li a.active{
   color: #088178;
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
   background-color: #fff; /* Set the background color of the dropdown */
   position: absolute;
   top: 100%;
   left: 0;
   z-index: 1;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add a box shadow for a separated look */
   padding: 20px; /* Add some padding to the dropdown content */
   border-radius: 5px; /* Add rounded corners */
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
</Style>
<body>
<section id="header">
        <a href="#"><img src="image/logo/logo.jpg.png" class="logo" ></a>
        <div>
            <ul id ="navbar">
                <li><a  href="index.html">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a  href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#"> Become a Customer</a>
                    <ul class="dropdown-content">
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="register.html">Sign Up</a></li>
                        <!-- Add other customer-related links here if needed -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"> Admin</a>
                    <ul class="dropdown-content">
                        <li><a href="login.html">LogIn</a></li>
                        <!-- Add other customer-related links here if needed -->
                    </ul>
                </li>
                <li><a  href= "cart.html"><img src="image/logo/cart.png"  height= "30px"></a></li>
            </ul>

        </div>
    </section>
</body>
</html>