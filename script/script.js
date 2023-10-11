
const navbar_custMenu = document.getElementById("menu");
const burger_topMenu = document.getElementById("b_top");
const headerMenu = document.getElementById("header");



if (burger_topMenu && navbar_custMenu) {
   burger_topMenu.addEventListener("click", () => {
      burger_topMenu.classList.toggle("is-active");
      navbar_custMenu.classList.toggle("is-active");
   });
}


const menuLinks = document.querySelectorAll(".item-links");
menuLinks.forEach((link) => {
   link.addEventListener("click", () => {
      burger_topMenu.classList.remove("is-active");
      navbar_custMenu.classList.remove("is-active");
   });
});


window.addEventListener("resize", () => {
   if (window.innerWidth >= 769) {
      if (navbar_custMenu.classList.contains("is-active")) {
         navbar_custMenu.classList.remove("is-active");
      }
   }
});
function addToCart() {
   alert("Item added to cart!");
 }

 
  // Initialize an empty cart array to store selected items
  const cart = [];

  function addToCart(productName, price, quantity) {
    const item = {
      name: productName,
      price: price,
      quantity: quantity
    };

    // Add the item to the cart
    cart.push(item);

    // Update the cart display
    updateCartDisplay();

    // Display a success message to the user
    alert("Item added to cart!");
  }

  function updateCartDisplay() {
    const cartProductsList = document.querySelector('.cart-products');

    // Clear the current contents of the cart list
    cartProductsList.innerHTML = '';

    // Loop through the cart array and update the cart display
    cart.forEach(item => {
      const cartItem = document.createElement('li');
      cartItem.textContent = `${item.quantity}x ${item.name} - £${item.price.toFixed(2)}`;
      cartProductsList.appendChild(cartItem);
    });
  }




