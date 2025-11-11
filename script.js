
let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

cartIcon.onclick = () => {
  cart.classList.add("active");
};

closeCart.onclick = () => {
  cart.classList.remove("active");
};

// cart working js
 if (document.readyState == "loading") {
   document.addEventListener("DOMContentLoaded", ready);

 } else{
  ready();
 }

//Making Fuction
function ready(){
  //remove items from cart
   var reomveCartButtons = document.getElementsByClassName('cart-remove')
   console.log(reomveCartButtons)
   for (var i = 0; i < reomveCartButtons.length; i++){
    var button = reomveCartButtons[i];
    button.addEventListener('click' , removeCartItem)
   }
   //Quantity changes
   var quantityInputs = document.getElementsByClassName("cart-quantity");
   for( var i = 0; i < quantityInputs.length; i++){
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
   }
}   
// add to cart
var addCart = document.getElementsByClassName("add-cart");
for ( var i = 0; i < addCart.length; i++){
  var button = addCart[i];
  button.addEventListener("click" , addCartClicked);

}

// Buy button click event
document.getElementsByClassName('Btn-buy')[0]
  .addEventListener("click", buyButtonClicked);

// Function to handle Buy button click
function buyButtonClicked() {
  if ( cartContent == null){
    alert("First add some Items!!");
  }
    
  else {
    alert("Your Order is Placed");
  }
  
  
  var cartContent = document.getElementsByClassName('cart-content')[0];
  
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  updatetotal();
}

//Remove Items for cart 
function removeCartItem(event) {
  var removeIconClicked = event.target;
  // Navigate up the DOM to find the parent cart-box element
  var cartBox = removeIconClicked.closest('.cart-box');

  if (cartBox) {
    cartBox.remove(); // Remove the entire cart item
    updatetotal(); // Call the function to update the total
  }
  
}
// quantity changes
function quantityChanged(event){
  var input = event.target
  if (isNaN(input.value) || input.value <=0){
    input.value = 1
  }
  updatetotal();
}
// add to cart
function addCartClicked(event){
var button = event.target
var shopProducts = button.parentElement;
var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
var price = shopProducts.getElementsByClassName('price')[0].innerText;
var productImg = shopProducts.getElementsByClassName('product-img')[0].src;
addProductToCart(title, price, productImg);
updatetotal();
}

function addProductToCart(title, price, productImg){
var cartShopBox = document.createElement("div");
 cartShopBox.classList.add('cart-box')
var cartItems = document.getElementsByClassName('cart-content')[0]
var cartItemsNames = cartItems.getElementsByClassName('cart-product-title')
for (var i = 0; i < cartItemsNames.length; i++) {
 if(cartItemsNames[i].innerText == title){
  alert("You have already added this item to the cart");
 return;
 
 }
 alert("Added to cart Sucessfully!!");
}


var cartBoxContent =`
<img src="${productImg}" height="200px"  class="cart-img">
<div class="details-box">
    <div class="cart-product-title">${title}</div>
    <div class="cart-price">${price}</div>

    <input type="number" value="1" class="cart-quantity">

    <!--Remove cart-->
    <img src="image/features product/trash-can.png" alt="" height="20px" class="cart-remove">

    `;
  cartShopBox.innerHTML = cartBoxContent
  cartItems.append(cartShopBox)
  cartShopBox
  .getElementsByClassName('cart-remove')[0]
  .addEventListener('click', removeCartItem);
  cartShopBox
  .getElementsByClassName('cart-quantity')[0]
  .addEventListener("change", quantityChanged);
}



//update Total
function updatetotal() {
  var cartContent = document.getElementsByClassName('cart-content')[0];
  var cartBoxes = cartContent.getElementsByClassName('cart-box');
  var total = 0;

  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName('cart-price')[0];
    var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
    var price = parseFloat(priceElement.innerText.replace("NRP", ""));
    var quantity = parseInt(quantityElement.value); // Use value, not Value
    total = total + (price * quantity);
  }

  document.getElementsByClassName("total-price")[0].innerText = "NPR " + total; // Added a space after "NPR"
}

