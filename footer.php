<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
<?php
include 'footer.php'
?>
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
            <a href="register.html">Sign In</a>
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