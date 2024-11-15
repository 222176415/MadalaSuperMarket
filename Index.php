<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Madala's Supermarket | Fresh Food & Household Essentials in Bedworth Park</title>
    <!----Meta Tags For Search Engine Optimization-->
    <meta name="description"
        content="Madala's Supermarket offers a wide range of food and household essentials at unbeatable prices. Shop now for fresh produce, groceries, and more!">
    <meta name="keywords"
        content="grocery store, supermarket, food, household essentials, fresh produce, local shopping, Vereeniging">
    <!----Bootsrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/f9fc3e226d.js" crossorigin="anonymous"></script>
    <!-- Local Business Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Store",
      "name": "Madala's Supermarket",
      "image": "https://MadalaSuperMarket.com/Images/CompanyLogo.png",
      "@id": "",
      "url": "https://MadalaSuperMarket.com",
      "telephone": "+27691694456",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Penelope St, Vereeniging, Bedwork Park",
        "addressLocality": "Vereeniging",
        "postalCode": "1939",
        "addressCountry": "South Africa"
      },
      "openingHours": "Mo-Fr 08:00-17:00, Sa 09:00-15:00",
      "sameAs": [
        "https://www.facebook.com/",
        "https://www.instagram.com/"
      ]
    }
    </script>

</head>

<body style="background-color: #FFE5B4;">
    <!-- Header Section -->
    <header id="Header" style="margin-bottom: 0px;">
        <nav class="navbar navbar-expand-lg sticky-top fixed-top" style="background-color: #FFE5B4;">
            <div class="container-fluid">
                      <!-- Add The Clickable Logo to the Home Page -->
                <a class="navbar-brand" href="Index.html"><img src="Images/CompanyLogo.png" width="auto" height="85px"
                        alt="Madala's SuperMarket logo" style="font-weight: 500;" href="#">Madala's SuperMarket</a>
                <!-- Toggle button for mobile nav -->
                <button class="navbar-toggler border-0" style="color: black;" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: transparent;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> <!-- Corrected ID reference -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.html">Account</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            style="height: 38px;">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <a class="nav-link cart-icon  position-relative align-items-center" href="cart.html">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span id="cart-count"
                                class="badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <hr style=" margin-top: 0px;">
        <!-- Navbar Links -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="main-nav" aria-labelledby="offcanvasNavbarLabel"
            style="background-color: #FFE5B4;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-dark" id="offcanvasNavbarLabel">Madala's SuperMarket | Explore More
                    Pages</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-house"> </i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Products.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-brands fa-product-hunt"> </i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-circle-info"> </i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-circle-info"> </i> Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Login.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-user"> </i> Account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section style="background-color: #FFE5B4; margin-top: 0px;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhQlhfZgoew-KV84GGmGReYyc775YXDir4trUnQlkPFDEnIhnbHqvUeYtkyD88_lGiQH2AMnXoiaziQqnIfmdzU7CyV19Us3o7My5Ct8lE49D3DKA01j6oxsJjffLUn1o9ULvSwLnhhiczJB0Trkfo9LSsaKsJmrCFRs61tYZP1s8OFUdvZ_MZmVb3gypk/s320/HomePage_picture.png">
                </div>
                <div class="col">
                    <h1>Discover your everyday essentials-everything you need for your home and pantry is right here!
                    </h1>
                    <p>We have many promo for you <br>everyday, don't miss out.<br>Checkout now! </p>
                    <a href="Products.html" class="button"> Shop Now </a>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-by-category" style="background-color: white; margin-top: 0px;">
        <div class="container">
            <center>
                <h1 style="color: orange; margin-top: 15px;">Shop By Category!</h1>
            </center>
            <div class="row">
                <div class="game2">
                    <img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhih4hX2kMhGmRYkVc2SJqungXJAJkQhxm2mAm-EpbzzIHxYpXGytnvwBQoNDDfTTUxnewm4C43HzqdA-WH7Lr2Tx8TvRpJPcxQZERZKLxhyphenhyphenChEXBnpajzDKfh3rVdmWQpf9M41vuf1ixGsYwG_xJZhWFm7FtvJV3zdmqRVc9_lW5CFGY734qQra8hcUAs/s320/Beverages1.jpg">
                    <h4>Drinks</h4>
                    <button onclick="window.location.href='Products.html#product-category-Drinks'">
                        View Beverages
                    </button>
                </div>
                <div class="game2">
                    <img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhCnCijIcCS1EXm8t5MEKk_VaGk3I98jjdAFaSicTnUuz_zDqSV2OjhFvt9d0gS_1N73l6XvExSPJ62GyEFSl7AHzmaUc_jyVSz0Ew9d63vlUATpxq7q6dMcSS2Ue-Tsfw2cTn0SPw-ZNVk5VGDhfEbye_l9GiRV9qvoGPP56p5Z0f1NrkSQmrCS5vspiM/s320/Fruits_Veg_Category.jpg">
                    <h4>Fruits and Vegetables</h4>
                    <button onclick="window.location.href='Products.html#product-category-Fruits'">View Fruits and
                        Vegetables</button>
                </div>
                <div class="game2">
                    <img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj_Gr8vxksYnOT4gsAyCfIE0znB5SPPsUZe0xV2YuF0EpSQK9CyU2Lp1cYq5UDtANH1JCk2KajKjoNBXCwTTEi4D1pl8H-fL8CCRzBqvckxklkN27t6MmlC4xT9hyphenhyphen33k1roQKiihfxg7HKh_PNfe_JFRb60KL3Jlk1XhpCxaNzD7ZEBmyscCsC4JP5d0_A/s320/Toiletries_Category.jpg">
                    <h4>Toiletries</h4>
                    <button onclick="window.location.href='Products.html#product-category-HouseHold'">View
                        Toiletries</button>
                </div>
                <div class="game2">
                    <img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiSF2BYlRn_SDh3xC3QF_4ib_IMIbD2XnFc_8R6WHOzwCSb5AEIDXn7wLa7NthQV5NyR3YnrCYauYaPHzPMDOxBUm0JyD4_TSsOypKfVxIvmx9btaTcdhGsCY35nX-N_U42n_jzZMfAdNrE3opqOd_6znal_dY_q_AjqLQIC35faqXVKS2zIvLS65Y_SCU/s320/Food%20Cupboard.jpg">
                    <h4>Groceries</h4>
                    <button onclick="window.location.href='Products.html#product-category-Meat'">View
                        Groceries</button>
                </div>
            </div>
        </div>
    </section>
    <hr style=" margin-top: 0px;">
    <section style="background-color: #FFE5B4; margin-top: 0px;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <img src="Images/meat.png" width="auto" height="285px" alt="meat combo">>
                </div>
                <div class="col">
                    <center>
                        <h1 style="color: orange; ">See Our Combos</h1>
                    </center>
                    <p> At Madala’s Supermarket, we've got the combos you crave! Our most popular offer is the "<b>Weekend Grill & Chill Combo</b>" —a meat lover's dream! Choose from a variety of premium cuts of steak, chicken, and boerewors, each available in a combo deal you can discover in-store.
                        <br>
                        Here’s the best part: you’ll get 3 kilograms of your selected meats for the price of just 2 kilograms! Perfect for any get-together, family braai, or weekend feast. But hurry—this special only runs during the first and last week of each month.
                        
                        <br> 
                        <b>Madala’s Supermarket is the place to be!</b> 
                    </p>
                    <a href="Login.html" class="button">Get Special!!</a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <footer>
        <div class="container">
            <div class="footer-content row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="logo">
                        <img src="Images/CompanyLogo.png" class="logo" alt="Madala's SuperMarket Logo">
                    </div>
                </div>
                <div class="col">
                    <div class="useful-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="Index.html">Home</a></li>
                            <li><a href="Products.html">Products</a></li>
                            <li><a href="Contact.html">Contact Us</a></li>
                            <li><a href="Login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="social-links">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i>
                                    Facebook</a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>
                                    Instagram</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="contact-info">
                        <h4>Contact Information</h4>
                        <p>Phone: 069 169 4456 / 083 652 1964</p>
                        <p>Email:<a href="mailto:MadalaSuperMarket@gmail.com">MadalaSuperMarket@gmail.com</a></p>
                        <p>Address: 8 Cassandra Ave, Bedworth Park, Vereeniging, 1939</p>
                    </div>
                </div>
                <p style="margin: 10px 0; color: #666;">Your one-stop shop for all your grocery needs!</p>
                <p style="margin: 10px 0; color: #666;">We offer fresh produce, quality products, and unbeatable prices.
                </p>
            </div>
            <p class="text-center">&copy; 2024 Madala's SuperMarket. All rights reserved.</p>
            <hr style="border: 1px solid #000000; width: 80%; margin: 20px auto;">
        </div>
    </footer>
    <!----For Bootsrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var messageText="<?= $_SESSION['status'] ?? ' '; ?> "

        if(messageText != ' '){
            swal({
            title: "Thank You!!",
            text: "We will contact you as Soon As Possible",
            icon: "success",
            button: "Done",
        });
        <?php unset($_SESSION['status']) ?>
        }
       
    </script>
</body>

</html>