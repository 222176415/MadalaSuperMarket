// cart.js

// Function to update the cart count
function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    let currentCount = parseInt(cartCountElement.innerText);
    cartCountElement.innerText = currentCount + 1;
}

// Define the addToCart function
function addToCart(name, image, price) {
    // Retrieve cart data from local storage
    var cartData = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if the item is already in the cart
    var existingItem = cartData.find(function(item) {
        return item.name === name;
    });

    if (existingItem) {
        // If the item is already in the cart, update the quantity
        existingItem.quantity++;
    } else {
        // If the item is not in the cart, add it
        cartData.push({
            name: name,
            image: image,
            price: price,
            quantity: 1
        });
    }

    // Save the updated cart data back to local storage
    localStorage.setItem('cart', JSON.stringify(cartData));

    // Optionally, update the cart count display
    updateCartCount();

    // You can redirect to the cart page or perform other actions here
}






// Function to handle "Add to Cart" button clicks
function handleAddToCart() {
    const addToCartIcons = document.querySelectorAll('.add-cart');

    addToCartIcons.forEach(icon => {
        icon.addEventListener('click', (event) => {
            // Prevent default action if necessary
            event.preventDefault();

            // Update the cart count when the icon is clicked
            updateCartCount();

            // Optionally, you can add other functionality here, like adding the product to a cart object
            const productTitle = icon.closest('.card-body').querySelector('.product-title').innerText;
            console.log(`${productTitle} added to cart`);
        });
    });
}

// Initialize the script
document.addEventListener('DOMContentLoaded', handleAddToCart);


 
        // Function to update the total in the footer
        function updateCartTotal() {
            var cartData = JSON.parse(localStorage.getItem('cart')) || [];
            var cartTotalElement = document.getElementById('cart-total');
            var total = 0;

            cartData.forEach(function (item) {
                total += item.price * item.quantity;
            });

            cartTotalElement.textContent = `Total: R${total.toFixed(2)}`;
        }

        // Function to remove an item from the cart
        function removeFromCart(button) {
            var row = button.parentNode.parentNode;
            var productName = row.cells[0].textContent;

            // Retrieve cart data from local storage
            var cartData = JSON.parse(localStorage.getItem('cart')) || [];

            // Remove the item from the cart data
            cartData = cartData.filter(function (item) {
                return item.name !== productName;
            });

            // Save the updated cart data back to local storage
            localStorage.setItem('cart', JSON.stringify(cartData));

            // Update the cart display
            updateCartDisplay();
        }

        // Function to change the quantity of an item in the cart
        function changeQuantity(button, change) {
            var row = button.parentNode.parentNode;
            var productName = row.cells[0].textContent;

            // Retrieve cart data from local storage
            var cartData = JSON.parse(localStorage.getItem('cart')) || [];

            // Find the item in the cart data
            var item = cartData.find(function (item) {
                return item.name === productName;
            });

            // Update the quantity
            if (item) {
                item.quantity += change;
                if (item.quantity < 1) {
                    item.quantity = 1; // Ensure quantity doesn't go below 1
                }
            }

            // Save the updated cart data back to local storage
            localStorage.setItem('cart', JSON.stringify(cartData));

            // Update the cart display
            updateCartDisplay();
        }

        // Update the cart display when the page loads
        window.onload = updateCartDisplay;

        function prepareCheckout() {
            // Get cart data from localStorage
            const cartData = JSON.parse(localStorage.getItem('cart')) || [];
            
            // Convert the cart data to a JSON string
            const cartDataString = JSON.stringify(cartData);
            
            // Set the hidden input field value
            document.getElementById('cartData').value = cartDataString;
        }
        