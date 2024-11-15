<?php
require 'vendor/autoload.php'; // Include Stripe PHP library


\Stripe\Stripe::setApiKey('sk_test_51QHEsrP3MYvF2ZEreG3zVtdztKAMa464yayTPa5MxJ8yI7pWPW5Kgaw9gMh5mpXPxyYNF9YB1uB4VQvOS4nEFwes00ngsIFW7G'); //Stripe secret key

// Retrieve cart data from a POST request or session (depending on your setup)
$cartData = json_decode($_POST['cartData'], true);

if (!$cartData || count($cartData) === 0) {
    echo "Your cart is empty. Please go back and add items to your cart.";
    exit;
}

// Prepare line items for Stripe Checkout Session
$line_items = [];

foreach ($cartData as $item) {
    $line_items[] = [
        'price_data' => [
            'currency' => 'zar', // Use your currency code, e.g., 'usd', 'eur', 'zar' (South African Rand)
            'product_data' => [
                'name' => $item['name'],
                'images' => [$item['image']],
            ],
            'unit_amount' => $item['price'] * 100, // Convert price to cents (Stripe expects the amount in cents)
        ],
        'quantity' => $item['quantity'],
    ];
}

try {
    // Create a new Stripe Checkout Session
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => 'http://localhost/Madala2/success.php',
        'cancel_url' => 'http://localhost/Madala2/cancel.php',
    ]);

    // Redirect to the Stripe Checkout page
    header("Location: " . $session->url);
    exit;
} catch (Exception $e) {
    echo "Error creating Stripe Checkout Session: " . $e->getMessage();
}
?>
