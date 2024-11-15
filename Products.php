<?php
session_start();
include 'config.php';

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----Bootsrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/f9fc3e226d.js" crossorigin="anonymous"></script>
    <title>Madala's SuperMarket | Products page</title>
</head>

<body>
    <!-- Header Section -->
    <header id="Header">
        <nav class="navbar navbar-expand-lg " style="background-color: #FFE5B4;">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="Images/CompanyLogo.png" width="auto" height="85px"
                        alt="Madala's SuperMarket logo" style="font-weight: 500;">Madala's SuperMarket</a>
                <!-- Toggle button for mobile nav -->
                <button class="navbar-toggler border-0" style="color: black;" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: transparent;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> <!-- Corrected ID reference -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="Products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Account.html">Account</a>
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
                    <li class="nav-item">
                        <a href="Index.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-regular fa-user"></i>Log Out
                        </a>
                    </li>
                </div>
            </div>
        </nav>
        <hr style=" margin-top: 0px;">
        <!-- Navbar Links -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="main-nav" aria-labelledby="offcanvasNavbarLabel"
            style="background-color: #FFE5B4;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-dark" id="offcanvasNavbarLabel">Madala's SuperMarket | Explore More
                    Products</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="Index.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-house" href="index.html"> </i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Products.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-brands fa-product-hunt"> </i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-envelope"> </i> Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-circle-info"> </i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Account.html" class="nav-link text-dark" style="transition: all 0.3s ease-in-out;">
                            <i class="fa-solid fa-user"> </i> Account
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <section class="shop container">
        <h2 class="Section-title">Shop Products</h2>
        <!----Shop Content -->

        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-Drinks">Drinks</h2>
            <div class="shop-content">

                <!---Product1 drink-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZrLzKqOsfJEZPR0ycLMJjgPlBeB0uzv53l6R7UgRqvpUHtUBv6GyvfsnbGQRUwjE-K2h4i0YMKJoDWfCZ_BXj919ZZcAy2O1Z3yvsSElkgo8pBekSy7QkP7a82wStpjl1ZUGiUUjbWE83MRYRDWEdQOGtOKdhDAur2Mla2QDSNyHCENdneCeqGIEzrfI/s320/Coke1.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Coke</h5>
                        <p class="card-text">Coca Cola Soft Drink 250ml</p>
                        <span class="price">R25</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Coke', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZrLzKqOsfJEZPR0ycLMJjgPlBeB0uzv53l6R7UgRqvpUHtUBv6GyvfsnbGQRUwjE-K2h4i0YMKJoDWfCZ_BXj919ZZcAy2O1Z3yvsSElkgo8pBekSy7QkP7a82wStpjl1ZUGiUUjbWE83MRYRDWEdQOGtOKdhDAur2Mla2QDSNyHCENdneCeqGIEzrfI/s320/Coke1.jpeg', '25')"></i>
                    </div>
                </div>
                <!---Product2 drink-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizNjsDL9XnFDwHVErdMuwdpMtWbn671Zo4QhVLMTjHbizY5QdzshD_ZBHokN_lugq5X62giNHqfnOSq5FK9ZKRENk6_FjBSqWySbDZdyGpryBSskcAaRgSCyrLrxzscHefMMGS_9U_SxoXszzpr0_yme3EPRIXP84bEw_VyfCwJ4-UZXWYApS5UiqZViE/s320/FantaGrape.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Fanta Grape </h5>
                        <p class="card-text">Fanta Grape Canned Soft Drink 250ml</p>
                        <span class="price">R29.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Fanta Grape', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizNjsDL9XnFDwHVErdMuwdpMtWbn671Zo4QhVLMTjHbizY5QdzshD_ZBHokN_lugq5X62giNHqfnOSq5FK9ZKRENk6_FjBSqWySbDZdyGpryBSskcAaRgSCyrLrxzscHefMMGS_9U_SxoXszzpr0_yme3EPRIXP84bEw_VyfCwJ4-UZXWYApS5UiqZViE/s320/FantaGrape.jpeg', '29.99')"></i>
                    </div>
                </div>

                <!---Product3 drink-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgv8kiIWmn0G0zSsKrO_43EH9zI8H2BNO8lZARii7IvJnv2SjDbS0zADVvrD4owon7HxwOv1jhM23xdYreQ82Q4-hvPSOoV00vrzKl7TjwLo_ymwacv5TGAW5xLGDrkWm25Jd6kI5Hn4RmSv3C5HuzFeMGT7Dx5YBc1zlSKc0gJDDcsLTj-ec1IiFe2hZE/s320/redBull1.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Red Bull</h5>
                        <p class="card-text">Red Bull Energy Drink 500ml</p>
                        <span class="price">R29.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Red Bull', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgv8kiIWmn0G0zSsKrO_43EH9zI8H2BNO8lZARii7IvJnv2SjDbS0zADVvrD4owon7HxwOv1jhM23xdYreQ82Q4-hvPSOoV00vrzKl7TjwLo_ymwacv5TGAW5xLGDrkWm25Jd6kI5Hn4RmSv3C5HuzFeMGT7Dx5YBc1zlSKc0gJDDcsLTj-ec1IiFe2hZE/s320/redBull1.jpeg', '29.99')"></i>
                    </div>
                </div>
                <!---Product4 drink-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_osfWsus8YLSTYAeav6JnZGTGrz2YeBIhQbH5s5hVGQqXus16Ry7GHbCQSIYfX-pyOYFf5PyxwiFlYjWueherXGlabEDGuuUwIVIA2v2V73fTGE6DwZCSsvur3Gltfg_90vKLH43M5fxDnpvugKWkZh71A9eptbjIGYObnwWNzx0oNXQEPZa8KzFbZRw/s320/Monster.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Monster </h5>
                        <p class="card-text">Monster Energy Drink 250ml</p>
                        <span class="price">R29.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Monster', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_osfWsus8YLSTYAeav6JnZGTGrz2YeBIhQbH5s5hVGQqXus16Ry7GHbCQSIYfX-pyOYFf5PyxwiFlYjWueherXGlabEDGuuUwIVIA2v2V73fTGE6DwZCSsvur3Gltfg_90vKLH43M5fxDnpvugKWkZh71A9eptbjIGYObnwWNzx0oNXQEPZa8KzFbZRw/s320/Monster.jpeg', '29.99')"></i>
                    </div>
                </div>
                <!---Product5 drink-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg-aeP78thQg35DEIn12i8AICljfpR6J1woJUxo2cVdxzukVs9EztlkmZaiXphIJ6QUthbHlt6uhyGdCu4WXyx4G6Ftjpb3ZfSY1ex5ILsx9fb2OEu2l5w_vDM9m5eKZbKKca6jfYsnrGl3HbF7aCIbjkCivhT6xnBybp3gbGWkYn_jjNO3VVmsTP7Ly_0/s320/Copri%20Juice.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title"> Capri-Sun</h5>
                        <p class="card-text"> Capri-Sun Orange Flavoured Juice Pouch 200ml</p>
                        <span class="price">R14.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Capri-Sun', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg-aeP78thQg35DEIn12i8AICljfpR6J1woJUxo2cVdxzukVs9EztlkmZaiXphIJ6QUthbHlt6uhyGdCu4WXyx4G6Ftjpb3ZfSY1ex5ILsx9fb2OEu2l5w_vDM9m5eKZbKKca6jfYsnrGl3HbF7aCIbjkCivhT6xnBybp3gbGWkYn_jjNO3VVmsTP7Ly_0/s320/Copri%20Juice.jpeg', '14.99')"></i>
                    </div>
                </div>
                <!---Product9 drinks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhEQPNAeKrmjqxFsGEwgNyst6NaZ4KM080MfYn0OQspAypQoQiKXMs8zdai__NK0xOaOOi_mMC-6n179czClsM8leFdtEBel_n0JXb3ZprCjzTOrnyiErcSUegaEbFFXkfO7ZnGD2kgnnkeNBn36jKOGpl3b7BDvXOSgtJCxcCHZl77gJG7e3vxt4VwgOY/s320/Bull%20Drink.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Bucked Up</h5>
                        <p class="card-text">Bucked Up Energy Drink 250ml</p>
                        <span class="price">R15.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Bucked Up', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhEQPNAeKrmjqxFsGEwgNyst6NaZ4KM080MfYn0OQspAypQoQiKXMs8zdai__NK0xOaOOi_mMC-6n179czClsM8leFdtEBel_n0JXb3ZprCjzTOrnyiErcSUegaEbFFXkfO7ZnGD2kgnnkeNBn36jKOGpl3b7BDvXOSgtJCxcCHZl77gJG7e3vxt4VwgOY/s320/Bull%20Drink.jpeg', '15.00')"></i>
                    </div>
                </div>
                <!---Product10 drinks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizNjsDL9XnFDwHVErdMuwdpMtWbn671Zo4QhVLMTjHbizY5QdzshD_ZBHokN_lugq5X62giNHqfnOSq5FK9ZKRENk6_FjBSqWySbDZdyGpryBSskcAaRgSCyrLrxzscHefMMGS_9U_SxoXszzpr0_yme3EPRIXP84bEw_VyfCwJ4-UZXWYApS5UiqZViE/s320/FantaGrape.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Fanta Grape </h5>
                        <p class="card-text">Fanta Grape Canned Soft Drink 250ml</p>
                        <span class="price">R13.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Fanta Grape', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizNjsDL9XnFDwHVErdMuwdpMtWbn671Zo4QhVLMTjHbizY5QdzshD_ZBHokN_lugq5X62giNHqfnOSq5FK9ZKRENk6_FjBSqWySbDZdyGpryBSskcAaRgSCyrLrxzscHefMMGS_9U_SxoXszzpr0_yme3EPRIXP84bEw_VyfCwJ4-UZXWYApS5UiqZViE/s320/FantaGrape.jpeg', '13.99')"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-Snacks">Snacks</h2>

            <div class="shop-content">
                <!---Product7 Snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCKwtB9nMRteiYhlaa_meDn_YIwio2yA0TvgwkUzjjk2y_9lhCgOA3PzkNE3ZnEWYuis5afegYet3RM-evpo7RsswOSjlB8HvbybgUG1LCtKUIZXsEi15cf1GwyH-N3TaFWyfrnFkN-bVybT_08B8fOm4dRjaO-S5FNxHQFwyVY1_HDfgaEP15o3_tQq0/s320/Pringles.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Pringles</h5>
                        <p class="card-text">Pringles Potato Chips Flame Grilled Steak 100g</p>
                        <span class="price">R39.90</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Pringles', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCKwtB9nMRteiYhlaa_meDn_YIwio2yA0TvgwkUzjjk2y_9lhCgOA3PzkNE3ZnEWYuis5afegYet3RM-evpo7RsswOSjlB8HvbybgUG1LCtKUIZXsEi15cf1GwyH-N3TaFWyfrnFkN-bVybT_08B8fOm4dRjaO-S5FNxHQFwyVY1_HDfgaEP15o3_tQq0/s320/Pringles.jpeg', '39.90')"></i>
                    </div>
                </div>
                <!---Product8 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEivIDBbthG7WsH6HMOCqm7l4OXzLX5lY2bmaZfsgP3cDTGYJ3ulKNPOLQfVNTFUlJEsWuIfTwLXZ1soDu2OEvoTA2wMCNadSDpRs2zZ4vkLteUv8Cwts8-i_6kJuasKw6y7hb6wplwQcJ1WeICN0lVt-D27h0AX-_Hg1o71zkhgyi4HTGsxD4aYOsveaL8/s320/MrBeast.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">MrBeast Bar</h5>
                        <p class="card-text">MrBeast Bar Milk Chocolate 60g</p>
                        <span class="price">R69.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('MrBeast Bar', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEivIDBbthG7WsH6HMOCqm7l4OXzLX5lY2bmaZfsgP3cDTGYJ3ulKNPOLQfVNTFUlJEsWuIfTwLXZ1soDu2OEvoTA2wMCNadSDpRs2zZ4vkLteUv8Cwts8-i_6kJuasKw6y7hb6wplwQcJ1WeICN0lVt-D27h0AX-_Hg1o71zkhgyi4HTGsxD4aYOsveaL8/s320/MrBeast.jpeg', '69.00')"></i>
                    </div>
                </div>
                <!---Product49 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiDGlOs_4LeHBvmGFLCtZLDPz7KA3gIcZKjzgk1IAZERDL0KP1O1f5bf2Jbx7zyNN2lFJiQ1UlTUBX8ckv2h4zMypjNUNr4TYhH5Hy8RS1cP__KtoOEJ4yBsTYflbOogYAssKn29vL6O-McJgTuxBhqVISy32qm_UqoZwIcaUMQKApkuC8-7vMIxB0SEyc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(3).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">NikNaks</h5>
                        <p class="card-text">NikNaks Maize Snack Original Cheese 50g</p>
                        <span class="price">R1.50</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('NikNaks', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiDGlOs_4LeHBvmGFLCtZLDPz7KA3gIcZKjzgk1IAZERDL0KP1O1f5bf2Jbx7zyNN2lFJiQ1UlTUBX8ckv2h4zMypjNUNr4TYhH5Hy8RS1cP__KtoOEJ4yBsTYflbOogYAssKn29vL6O-McJgTuxBhqVISy32qm_UqoZwIcaUMQKApkuC8-7vMIxB0SEyc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(3).jpeg', '1.50')"></i>
                    </div>
                </div>
                <!---Product11 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhfkbjXkTRvWVDVof0uoY9cwG1lgSZcNwwEvXN9HuBSA7FxlaLCyWUYSChioQnGxm_I9vtiXxyfjHz4TAlMqAn-tfj5yCZ8w1wWpdhPQg1bRAkM7cbw8tCyFgPCdWOXX20apMarPHvO-rqwedtRwVGp1U3PkcOkv0Upno6AnXcE6qWoAZbKkp5wIOAfybE/s320/Oreo.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Oreo</h5>
                        <p class="card-text">Mini Oreo Biscuit Cookie Original 114g</p>
                        <span class="price">R15.90</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Oreo', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhfkbjXkTRvWVDVof0uoY9cwG1lgSZcNwwEvXN9HuBSA7FxlaLCyWUYSChioQnGxm_I9vtiXxyfjHz4TAlMqAn-tfj5yCZ8w1wWpdhPQg1bRAkM7cbw8tCyFgPCdWOXX20apMarPHvO-rqwedtRwVGp1U3PkcOkv0Upno6AnXcE6qWoAZbKkp5wIOAfybE/s320/Oreo.jpeg', '15.90')"></i>
                    </div>
                </div>
                <!---Product12 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxZoV3-xQ0kzKtafTrcsc6lkpTVeypeYLFDihvDP5QKpXOfIgFkWs5fzGghXGHzxYK2IL3NJEdcv6UOUC02hIvfZDgGLBFd93pNcJvqEuvngOEf8EUzhxApazAwDgfG6fbHooaNunJ_Vvgg02LaqdtvrbmxCreUkook9pYfMVTSHU6Le6JZMgLN2QnBAA/s320/Mentos.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Mentos</h5>
                        <p class="card-text">Mentos Gum Bottle Pure Fresh mint 60's </p>
                        <span class="price">R50.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Mentos', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxZoV3-xQ0kzKtafTrcsc6lkpTVeypeYLFDihvDP5QKpXOfIgFkWs5fzGghXGHzxYK2IL3NJEdcv6UOUC02hIvfZDgGLBFd93pNcJvqEuvngOEf8EUzhxApazAwDgfG6fbHooaNunJ_Vvgg02LaqdtvrbmxCreUkook9pYfMVTSHU6Le6JZMgLN2QnBAA/s320/Mentos.jpeg', '50.99')"></i>
                    </div>
                </div>
                <!---Product13 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgxYLGOlSoBHg7ZddlVr2ANwjJYzyjP9dLJntHI-2Gt8KwAjVs_KE73R9KTj79EdQPKnfNrwW417oBhIOOC67dVxSbxwFyi6QdL342ck_OFNSd_dvqDW8exWMsKfKa_hOk4gqKQDELy2fSUCyc3nb25ptx8Y5KSVV7CzdqigJBIK6y1o_thGosS6fKS4S4/s320/M&M%20sweets.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">M&M</h5>
                        <p class="card-text">M&Ms Peanuts 45g</p>
                        <span class="price">R19.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('M&M', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgxYLGOlSoBHg7ZddlVr2ANwjJYzyjP9dLJntHI-2Gt8KwAjVs_KE73R9KTj79EdQPKnfNrwW417oBhIOOC67dVxSbxwFyi6QdL342ck_OFNSd_dvqDW8exWMsKfKa_hOk4gqKQDELy2fSUCyc3nb25ptx8Y5KSVV7CzdqigJBIK6y1o_thGosS6fKS4S4/s320/M&M%20sweets.jpeg', '19.99')"></i>
                    </div>
                </div>
                <!---Product14 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWBNEkNpGK-nbd8L4DeoqOUdqmjTMYUooZvB657Pn1u3clxTgmRYnLYGV7d0DQGC8GenQcfQpDX6KP7yqJjaMDBwawHoinJj9SBBDCwKnT9YC2tyFDSPnp4ne0q0j4JvSEhMzVlXCqN1JKqMOtYPMYkfU3DuRLxt-PanBypy88Cwp5nzOQec7mxFSR88M/s320/Lays03.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lays</h5>
                        <p class="card-text">Lays Potato chips Sour Cream and Cheese 120g</p>
                        <span class="price">R20.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lays', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWBNEkNpGK-nbd8L4DeoqOUdqmjTMYUooZvB657Pn1u3clxTgmRYnLYGV7d0DQGC8GenQcfQpDX6KP7yqJjaMDBwawHoinJj9SBBDCwKnT9YC2tyFDSPnp4ne0q0j4JvSEhMzVlXCqN1JKqMOtYPMYkfU3DuRLxt-PanBypy88Cwp5nzOQec7mxFSR88M/s320/Lays03.jpeg', '20.45')"></i>
                    </div>
                </div>
                <!---Product15 snack-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEidIOFWP-AAh3_AwOil08nzLAZOstb7jc0WdOi-icvk04WdzSp8AWheU5IIG8f2gpn9I9O69XYM4nlNHTL3fsiA1yu9IN3sMu378NbPvd2dvmqOC_0RNfrhz7U8d_WUytYOVzDzXHv9bveoIh44fnirz5VPJFsAgHItKzY3U6R4LDj-2r345hVxg_XXE60/s320/Lays02.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lays </h5>
                        <p class="card-text">Lays Potato chips Limon 120g</p>
                        <span class="price">R20.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lays', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEidIOFWP-AAh3_AwOil08nzLAZOstb7jc0WdOi-icvk04WdzSp8AWheU5IIG8f2gpn9I9O69XYM4nlNHTL3fsiA1yu9IN3sMu378NbPvd2dvmqOC_0RNfrhz7U8d_WUytYOVzDzXHv9bveoIh44fnirz5VPJFsAgHItKzY3U6R4LDj-2r345hVxg_XXE60/s320/Lays02.jpeg', '20.45')"></i>
                    </div>
                </div><!---Product16 snack-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgHHvN7ObXqE_1GNqyMn5bjsxyQ7PeBXPnM2iqWSHoUtSxxU7q2ESfX5C1S-ae1o0sdNej3f9D6pvfptFoArjw-pqUEpxIm-0jiEyGZqqtDAbGWQIHXLagxWMzCgd0pdQ6p11yCc_S54zjNLKNpUa8JysJpuCKKCrhNZfcGwsAS_VOE73dFPfp5eM8N7po/s320/Lays.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lays</h5>
                        <p class="card-text">Lays Potato chips Sour Cream & Onion 120g </p>
                        <span class="price">R20.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lays', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgHHvN7ObXqE_1GNqyMn5bjsxyQ7PeBXPnM2iqWSHoUtSxxU7q2ESfX5C1S-ae1o0sdNej3f9D6pvfptFoArjw-pqUEpxIm-0jiEyGZqqtDAbGWQIHXLagxWMzCgd0pdQ6p11yCc_S54zjNLKNpUa8JysJpuCKKCrhNZfcGwsAS_VOE73dFPfp5eM8N7po/s320/Lays.jpeg', '20.45')"></i>
                    </div>
                </div>
                <!---Product17 snacks-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgarkBzvqFdkgRik5cFghSWWTyv0AW2NwtVbgiUlN6Z49iGdlx1cFKrA8KndmblrkfmejCeZEiLNCDzC46BUtA4xlqyCFC50Nwig5ngdQH4IDxwLeCVFsiXfPq7HcYW2hySZTZsxPJ2VpZ2o5iqT-ytDXuHQV3QlW8-RbOExJIBfEKRtFRU8CKHc9xO7Vo/s320/Lays1.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lays</h5>
                        <p class="card-text">Lays Potato chips Classic 120g</p>
                        <span class="price">R20.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lays', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgarkBzvqFdkgRik5cFghSWWTyv0AW2NwtVbgiUlN6Z49iGdlx1cFKrA8KndmblrkfmejCeZEiLNCDzC46BUtA4xlqyCFC50Nwig5ngdQH4IDxwLeCVFsiXfPq7HcYW2hySZTZsxPJ2VpZ2o5iqT-ytDXuHQV3QlW8-RbOExJIBfEKRtFRU8CKHc9xO7Vo/s320/Lays1.jpeg', '20.45')"></i>
                    </div>
                </div>
                <!---Product18 snack-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiLNUQUuSAjppBkluYOj5eXB51qXHS2YRP0tBHmCdh1fJNYbErT5of2PK42lWzUilt6XQA_CXXKvMFQ_sH-K2KJE1YjlXphPz5Lpli9NjRY7sfG7H4YL94RDqzo2lJVZfba9r_2OmHix2InIdNKcue-UmeHuMFl0X2kAZkwhkUbzJmEl_k73ZbbA4sY1KY/s320/Doritos.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Doritos</h5>
                        <p class="card-text">Doritos Potato chips Nacho cheese 120g</p>
                        <span class="price">R20.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Doritos', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiLNUQUuSAjppBkluYOj5eXB51qXHS2YRP0tBHmCdh1fJNYbErT5of2PK42lWzUilt6XQA_CXXKvMFQ_sH-K2KJE1YjlXphPz5Lpli9NjRY7sfG7H4YL94RDqzo2lJVZfba9r_2OmHix2InIdNKcue-UmeHuMFl0X2kAZkwhkUbzJmEl_k73ZbbA4sY1KY/s320/Doritos.jpeg', '20.45')"></i>
                    </div>
                </div>
                <!---Product19 snack-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiOLWlMRAVj5HHISyyxxn8NGZ_dbPwbQ7gPrgeX7Qo0YwAlcT5-xnlyQId9s9N8hM1gYorEiSBAJANUwqYP9VaqSNfH2CAvMwfvdzIYUxtZOk3tH2rlVBdRI4Cs_PVtW1N2aaaxxKw5ODrhkHDcs0fobNWm_VEwqn8CKgSOVMc2cw8ezVsVXACtTpnV2q8/s320/KitKat.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Nestle KitKat </h5>
                        <p class="card-text">Nestle KitKat 11 Finger Milk Chocolate 135g</p>
                        <span class="price">R44.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Nestle KitKat', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiOLWlMRAVj5HHISyyxxn8NGZ_dbPwbQ7gPrgeX7Qo0YwAlcT5-xnlyQId9s9N8hM1gYorEiSBAJANUwqYP9VaqSNfH2CAvMwfvdzIYUxtZOk3tH2rlVBdRI4Cs_PVtW1N2aaaxxKw5ODrhkHDcs0fobNWm_VEwqn8CKgSOVMc2cw8ezVsVXACtTpnV2q8/s320/KitKat.jpeg', '44.99')"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-Dairy">Dairy</h2>
            <div class="shop-content">
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9hF6kV-56cHZ9kpF9GFUlqaqiYHSG5aJdVhhZG4gyNPkZjoYCnJgb3LqP-H5YihObnXnkx4SOV7bzBBmntqnX3U-xtM1fh803uQoTAWbswt9VV2dxXdiKUCklfBE3b-u1ZVULSZnjLzM5sync1EIx6DYS_ceNX7_98O2LgS1ZLr7YrTj3LaLejaFF4dI/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Organic Valley Dairy</h5>
                        <p class="card-text">Organic Valley Raw Cheddar Cheese 250g</p>
                        <span class="price">R68.50</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Organic Valley Dairy', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9hF6kV-56cHZ9kpF9GFUlqaqiYHSG5aJdVhhZG4gyNPkZjoYCnJgb3LqP-H5YihObnXnkx4SOV7bzBBmntqnX3U-xtM1fh803uQoTAWbswt9VV2dxXdiKUCklfBE3b-u1ZVULSZnjLzM5sync1EIx6DYS_ceNX7_98O2LgS1ZLr7YrTj3LaLejaFF4dI/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58.jpeg', '68.50')"></i>
                    </div>
                </div>
                <!---Product51 dairy-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgz3icCOKWUJOiddqehQ0pbqjlvAHTid44c7zQ1Q7slAh4liTaVX8rLUlYEDD4iKw5WX2clnVaV-HMJNB-zjo5CrQmvX0j7G8uOEDOXi8lsKWvRUs_QMEfto_RLmoUbt5k-s8N42tY9XVy1ZO-owFaM1gWbCgKhsMRJHc8F0X1hKcUJx-PlrX1G9Ibs7Lo/s1600/WhatsApp%20Image%202024-11-03%20at%2010.42.59.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Number1 Mageu</h5>
                        <p class="card-text">Number1 Mageu Assorted flavor 1L</p>
                        <span class="price">R45.50</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Number-1 Mageu', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgz3icCOKWUJOiddqehQ0pbqjlvAHTid44c7zQ1Q7slAh4liTaVX8rLUlYEDD4iKw5WX2clnVaV-HMJNB-zjo5CrQmvX0j7G8uOEDOXi8lsKWvRUs_QMEfto_RLmoUbt5k-s8N42tY9XVy1ZO-owFaM1gWbCgKhsMRJHc8F0X1hKcUJx-PlrX1G9Ibs7Lo/s1600/WhatsApp%20Image%202024-11-03%20at%2010.42.59.jpeg', '45.50')"></i>
                    </div>
                </div>
                <!---Product6 dairy-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgzYYG-tCH9qK5AdH_Gdx9zyhakp23KYnec0G3Uzh_cVdve_0rK-HdW9EuQK3DO3dqEr1QGJE9lfw-bGzDnivJeFesRm2yrynkSO8v0XYfgatkkw0utyfu-gqR-RF3ybNF1hfjNCX_lE2LXUtyu6Eme9b62O7ul9bA8j5AcWMSjWH4yZgf8NVzmkRnrUxk/s320/Milk.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Parmalat Milk</h5>
                        <p class="card-text">Parmalat Whole Milk 1L</p>
                        <span class="price">R29.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Parmalat Milk', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgzYYG-tCH9qK5AdH_Gdx9zyhakp23KYnec0G3Uzh_cVdve_0rK-HdW9EuQK3DO3dqEr1QGJE9lfw-bGzDnivJeFesRm2yrynkSO8v0XYfgatkkw0utyfu-gqR-RF3ybNF1hfjNCX_lE2LXUtyu6Eme9b62O7ul9bA8j5AcWMSjWH4yZgf8NVzmkRnrUxk/s320/Milk.jpeg', '29.00')"></i>
                    </div>
                </div>
                <!---Product54 dairy-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgKFoqG-Sc1aAsfBaOjQviC0VaJ_srfMExrMv5Wvg8VoESCG7GdBbiZCrTf_aVkPtK31JvaKQO8cJvDIGriw7-69On1B-AS9rdtsmEaBvwgWDAA3bdCUG5InOunnYWkUm-QgLNavlOeed0F4-cDvleJ4x44_wWVrY7UI8Xu9bYa7xboDXQX6MhFtWUOT1c/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">milk</h5>
                        <p class="card-text">No Name Full Cream Fresh Milk 2L</p>
                        <span class="price">R45.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('milk', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgKFoqG-Sc1aAsfBaOjQviC0VaJ_srfMExrMv5Wvg8VoESCG7GdBbiZCrTf_aVkPtK31JvaKQO8cJvDIGriw7-69On1B-AS9rdtsmEaBvwgWDAA3bdCUG5InOunnYWkUm-QgLNavlOeed0F4-cDvleJ4x44_wWVrY7UI8Xu9bYa7xboDXQX6MhFtWUOT1c/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57%20(1).jpeg', '45.99')"></i>
                    </div>
                </div>
                <!---Product52 Dairy-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjetWx8zIviUpMKOlIKKnrsRK6yBNkJuDgpOr5_xaQH-Q0Ew1wH3yl92PPiSqwvpJ_NHvgpvajnfQYoNvi1P294rKv6xFsn63z6kE12CQMeLOQSKEvy8_EDbnok4Bxx1idqVnANPeGMI3Rm3fi0bzhtQphekmhxMKc9MtT9sTxhOLGPNxu5HVzDGB-oMS8/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.56%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Eggs </h5>
                        <p class="card-text">Madala Brand Egg tray 12's</p>
                        <span class="price">R52.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Eggs', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjetWx8zIviUpMKOlIKKnrsRK6yBNkJuDgpOr5_xaQH-Q0Ew1wH3yl92PPiSqwvpJ_NHvgpvajnfQYoNvi1P294rKv6xFsn63z6kE12CQMeLOQSKEvy8_EDbnok4Bxx1idqVnANPeGMI3Rm3fi0bzhtQphekmhxMKc9MtT9sTxhOLGPNxu5HVzDGB-oMS8/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.56%20(1).jpeg', '52.99')"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-Fruits">Fruits & Vegatables</h2>
            <div class="shop-content">

                <!---Product24 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEilmhvXAHbFReyWCB6Cdi5FRqS1NHFDcfRdIZ5M1bj3eB4yaJctW7mrZ-pDRceRzdCJPSnltzXF_jIQqipaI9Weh4_cUEUHnAGk-1BOAqiJAhH0JTjeMvOg6dlF-JASGyFwMq2YBI9T9hjQJjRAuD0kJ3AIJeA6mqywhy4-L5jIz3a54Ln63qRDzF65HRg/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.49.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Watermellon</h5>
                        <p class="card-text">Freshly Picked Watermellon</p>
                        <span class="price">R44.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Watermellon', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEilmhvXAHbFReyWCB6Cdi5FRqS1NHFDcfRdIZ5M1bj3eB4yaJctW7mrZ-pDRceRzdCJPSnltzXF_jIQqipaI9Weh4_cUEUHnAGk-1BOAqiJAhH0JTjeMvOg6dlF-JASGyFwMq2YBI9T9hjQJjRAuD0kJ3AIJeA6mqywhy4-L5jIz3a54Ln63qRDzF65HRg/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.49.jpeg', '44.99')"></i>
                    </div>
                </div>
                <!---Product25 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjySrjNx9vy9j4YkNGKRUIz4c071fq01oWIrzZY82qnjyxpeLwB0qN1YQJZ8yvNsznP6BCdVVASC9vpdoFRh7XuYpKNd916pxwHcNfYckMwL06LU10OCAis1E0vJjBanJ45AIUI756IJc_snDQg2GNRTauX_jU0YTNqG5GIsdpeeJMwinnoIUI_u02q-v8/s1600/WhatsApp%20Image%202024-11-03%20at%2010.42.48.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Pears</h5>
                        <p class="card-text">Freshly Picked Pears 1kg</p>
                        <span class="price">R37.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Pears', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjySrjNx9vy9j4YkNGKRUIz4c071fq01oWIrzZY82qnjyxpeLwB0qN1YQJZ8yvNsznP6BCdVVASC9vpdoFRh7XuYpKNd916pxwHcNfYckMwL06LU10OCAis1E0vJjBanJ45AIUI756IJc_snDQg2GNRTauX_jU0YTNqG5GIsdpeeJMwinnoIUI_u02q-v8/s1600/WhatsApp%20Image%202024-11-03%20at%2010.42.48.jpeg', '37.99')"></i>
                    </div>
                </div>
                <!---Product26 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhEgP0KSz8EyxsPjLMyPNMalXApvSPRTefzVmdUowlCHWmRip8KCV1KCzGOZ0WscQoRHwE3fVkqf_uTomST-PpyucL3tQCqXzOqezgwkRbmc6py0KkIg6vW04pk31IttXF8eDLq96kBIRvw-Xm9I9dvrQk084N417iNCd3FMQDrWQfkodX30nGW8ZNJ3e0/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.47.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Naartjies</h5>
                        <p class="card-text">Freshly Picked Naartjies 1kg</p>
                        <span class="price">R17.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Naartjies', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhEgP0KSz8EyxsPjLMyPNMalXApvSPRTefzVmdUowlCHWmRip8KCV1KCzGOZ0WscQoRHwE3fVkqf_uTomST-PpyucL3tQCqXzOqezgwkRbmc6py0KkIg6vW04pk31IttXF8eDLq96kBIRvw-Xm9I9dvrQk084N417iNCd3FMQDrWQfkodX30nGW8ZNJ3e0/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.47.jpeg', '17.00')"></i>
                    </div>
                </div>
                <!---Product28 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuzsRwnv_Y8zg60Ouy3084GMIqmbRae7ZeOaNTaQ8XesiaEyOSRU0oKzet7RqWfKSP_zUqXSw_suKucEpTQ_KXHfHv6l0QwYB8_lgCSTKXmOrAfMUq8L3bgZIDon5qgzHLeoKkfWjtzYiEu1m-ukVi5lMhw2V9AoSJOkKbEWvX5lkqo7uwwg-RID9lC5Q/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.46%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Grapes </h5>
                        <p class="card-text">Grapes Assoetated 500g</p>
                        <span class="price">R50.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Grapes', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuzsRwnv_Y8zg60Ouy3084GMIqmbRae7ZeOaNTaQ8XesiaEyOSRU0oKzet7RqWfKSP_zUqXSw_suKucEpTQ_KXHfHv6l0QwYB8_lgCSTKXmOrAfMUq8L3bgZIDon5qgzHLeoKkfWjtzYiEu1m-ukVi5lMhw2V9AoSJOkKbEWvX5lkqo7uwwg-RID9lC5Q/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.46%20(1).jpeg', '50.00')"></i>
                    </div>
                </div>
                <!---Product36 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi91qkLsS2gwuB5imHXOpPTXipRTOYgu9g7chYrv-cL5N9H9L0W-Fs6ltAhXePOKegLr57yKUekJxoVAxb4iO8OVnIRPJdvYNnRjTesFyvuRMWKw38o0gi8y04bELLRRzFiAkzgtNcTWMopzNwdhhP_1wrnJxGF6LJy0ITt3MFHaNcGPA_9Ag2L4DJvAXc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.50%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lemon</h5>
                        <p class="card-text">Freshly Picked Lemons each</p>
                        <span class="price">R6.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lemon', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi91qkLsS2gwuB5imHXOpPTXipRTOYgu9g7chYrv-cL5N9H9L0W-Fs6ltAhXePOKegLr57yKUekJxoVAxb4iO8OVnIRPJdvYNnRjTesFyvuRMWKw38o0gi8y04bELLRRzFiAkzgtNcTWMopzNwdhhP_1wrnJxGF6LJy0ITt3MFHaNcGPA_9Ag2L4DJvAXc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.50%20(2).jpeg', 6.99)"></i>
                    </div>
                </div>
                <!---Product37 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZikeJi2cvx-etjaXCVjjwNqsrduEZYG3PGcOKEd6w_O6oPgQ-9CZ83GmYVKpA1LY2-WimZOYT_9PKTDBni0Yi_IB2MSh6UZMo3COZmaKJEDSX1I6SIs-fvVYjYNPSEUQLpawAq25GwImKlkLZarZ-Mzdx5L17Bpq-v7UmrSGbfsJrD_CoF0048bgRoh0/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.50%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Avocado</h5>
                        <p class="card-text">Freshly Picked Avocados each</p>
                        <span class="price">R11.99</span>
                        <i class="fa-solid fa-plus add-cart"></i>
                    </div>
                </div>
                <!---Product35 fruit-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjfHDam141Lz1OdGrubQPQCwQqTA7hkygkLALJWUTo8H3U6ufjMXirNicX4QztoWIVsnFOcKJ5zTzt92lF-OgeWajJt287QsZnD210dahPrqF26RoV57WthNHBg3XRadwHrBRNhuSxo5NSR9WnMEn8mMbTODNb6D33Bfrh-hT2JYdh9u8_nuA3By_4fq0E/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.50.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Apple</h5>
                        <p class="card-text">Freshly Picked Red Appple each</p>
                        <span class="price">R4.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Avocado', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZikeJi2cvx-etjaXCVjjwNqsrduEZYG3PGcOKEd6w_O6oPgQ-9CZ83GmYVKpA1LY2-WimZOYT_9PKTDBni0Yi_IB2MSh6UZMo3COZmaKJEDSX1I6SIs-fvVYjYNPSEUQLpawAq25GwImKlkLZarZ-Mzdx5L17Bpq-v7UmrSGbfsJrD_CoF0048bgRoh0/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.50%20(1).jpeg', 11.99)"></i>
                    </div>
                </div>
                <!---Product20 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEga3-V1rl9HiU3q-sC3PIccy0mEKr-H-O6BgHJejEFcW0UNVDv4L4GGVnnL5sB774xKGgQXrayt3bvjVLwGEefk716fji9D5SWfbZuYLM4HUoXCQ6jro0D3bg96PMmKaCUL3SlTMmXy5Eo0ALyJEr52cAHiAFaL8_GXD0QzUV3W15UCNtkq65tlL2CHx1Q/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Tomatoes</h5>
                        <p class="card-text">Freshly Picked Tomatoes 1kg</p>
                        <span class="price">R25.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Tomatoes', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEga3-V1rl9HiU3q-sC3PIccy0mEKr-H-O6BgHJejEFcW0UNVDv4L4GGVnnL5sB774xKGgQXrayt3bvjVLwGEefk716fji9D5SWfbZuYLM4HUoXCQ6jro0D3bg96PMmKaCUL3SlTMmXy5Eo0ALyJEr52cAHiAFaL8_GXD0QzUV3W15UCNtkq65tlL2CHx1Q/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43.jpeg', 25.99)"></i>
                    </div>
                </div>
                <!---Product21 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9veUzKTpLbAps0ZGFzWGTuRAZzAOVbWhYg5LBSTK-DesaHMnHaZ-KMoqITV1NxIg5JsbwClHjA3Ep1av7Z8TWocMwH0q8L7p402tY9QkJ5iuNC_HiVTHU7kZrn_VuDsY3hLqWR3wpyaxtdjb1C-TazWS8qkwcyxwfX3gmvUEcNC-DsEs8BZJvrGKPpkE/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Potatoes</h5>
                        <p class="card-text">Freshly Picked Potatoes 1kg</p>
                        <span class="price">R29.45</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Potatoes', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9veUzKTpLbAps0ZGFzWGTuRAZzAOVbWhYg5LBSTK-DesaHMnHaZ-KMoqITV1NxIg5JsbwClHjA3Ep1av7Z8TWocMwH0q8L7p402tY9QkJ5iuNC_HiVTHU7kZrn_VuDsY3hLqWR3wpyaxtdjb1C-TazWS8qkwcyxwfX3gmvUEcNC-DsEs8BZJvrGKPpkE/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43%20(2).jpeg', 29.45)"></i>
                    </div>
                </div>
                <!---Product22 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj7V3ZuQNHoqXF3HdGj2x_oe8E515CNGj5PtNgtCVUeMbDz84v8UiofpJKwCo0EEjw6bTvD856tAP7fKIr_Yn-8xFBuHRgdl_X5sHgLVWuwU7_n9OKMxxuj7wrtjv6vdQXpQ1VCqbyCPmKiBeSDpV3l-xgX5B8VsErzsuP-JwyJlvQ9bE_-qTk4Vp0adHw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Garlic</h5>
                        <p class="card-text">Freshly Picked Garlic cloves 500g</p>
                        <span class="price">R45.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Garlic', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj7V3ZuQNHoqXF3HdGj2x_oe8E515CNGj5PtNgtCVUeMbDz84v8UiofpJKwCo0EEjw6bTvD856tAP7fKIr_Yn-8xFBuHRgdl_X5sHgLVWuwU7_n9OKMxxuj7wrtjv6vdQXpQ1VCqbyCPmKiBeSDpV3l-xgX5B8VsErzsuP-JwyJlvQ9bE_-qTk4Vp0adHw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.43%20(1).jpeg', 45.99)"></i>
                    </div>
                </div>
                <!---Product23 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8Icwb9a3PDDTIuJZTZZDibttO02km3sT1qgee_Fi_x7QMotB1kNIBkMHuzIfr8ChqnRZIEkHNRBX7U8BpjQF_hX_joPNgKHp6EznieqKsCZee0Sp8Xfn8LgijGa2L5FAS4s67wxDnRCfRcIeEcLFdrAcRrr4er4X-coIRCtTyYFtsRI61VcQs0TJYn_M/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.42.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Peppers</h5>
                        <p class="card-text">Freshly Picked Peppers 365g</p>
                        <span class="price">R23.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Peppers', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8Icwb9a3PDDTIuJZTZZDibttO02km3sT1qgee_Fi_x7QMotB1kNIBkMHuzIfr8ChqnRZIEkHNRBX7U8BpjQF_hX_joPNgKHp6EznieqKsCZee0Sp8Xfn8LgijGa2L5FAS4s67wxDnRCfRcIeEcLFdrAcRrr4er4X-coIRCtTyYFtsRI61VcQs0TJYn_M/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.42.jpeg', 23.99)"></i>
                    </div>
                </div>
                <!---Product27 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEibVwcZPHRBVoe0UfrO3TS2286yB_ESeou-NU5-HXcDORhBJns4GXE_uI9gH4KffMv6wD4XMhCTo2z4iZoOq2r06wdXqct3jQk3MmAqe25pFccdH8zEVGU968dgEHFHIH0fw94MAWXIXW_McXwirCfCktcrJHOdYM6wNxdPMST7Pm-kCEs7Kr2Yz_tr6Xk/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.46.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Cabbages</h5>
                        <p class="card-text">Singel Cabbage head</p>
                        <span class="price">R12.00</span>
                        <i class="fa-solid fa-plus add-cart"></i>
                    </div>
                </div>

                <!---Product29 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhM2TNW8mwuLFJRQPIsYNl0HzYk_Th2RlRBctfjmnct-B9iPvdXPZL4DM580QDUxzOggFoDcCWi6bTOrRHdC3wnOynpzPHowYMW06VpE9faiNc3m61YuWQ6C2TweLnYs_FDIYdK4k5SjtOTIh1ytWejabWTC5ASGSomaqHnQSqLAV51sNK5qypqP9UJsNo/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.45.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Ginger</h5>
                        <p class="card-text">Ginger prepack 300g</p>
                        <span class="price">R26.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Ginger', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhM2TNW8mwuLFJRQPIsYNl0HzYk_Th2RlRBctfjmnct-B9iPvdXPZL4DM580QDUxzOggFoDcCWi6bTOrRHdC3wnOynpzPHowYMW06VpE9faiNc3m61YuWQ6C2TweLnYs_FDIYdK4k5SjtOTIh1ytWejabWTC5ASGSomaqHnQSqLAV51sNK5qypqP9UJsNo/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.45.jpeg', '26.99')"></i>
                    </div>
                </div>
                <!---Product30 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgMS4BCofi_Fqf_sSkQqVvpaHU-fu6ceikdcPyl8n5Zsua7pPsWM-rtmtXkAlMQNrxyFoQxifkU4E0JOGHgFcQdOQdjWApCeNsxKdkDSSUpwWMreMzgyFmM40mQ-05VRGJfkzFG9wMG_Dn4-iFOM2xY3gjNN3C7IVe-9lbM846kLNc4uPLK0I2qY53lDgU/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.44.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Lettuce</h5>
                        <p class="card-text">Lettuce iceberg Head</p>
                        <span class="price">R18.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Lettuce', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgMS4BCofi_Fqf_sSkQqVvpaHU-fu6ceikdcPyl8n5Zsua7pPsWM-rtmtXkAlMQNrxyFoQxifkU4E0JOGHgFcQdOQdjWApCeNsxKdkDSSUpwWMreMzgyFmM40mQ-05VRGJfkzFG9wMG_Dn4-iFOM2xY3gjNN3C7IVe-9lbM846kLNc4uPLK0I2qY53lDgU/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.44.jpeg', '18.99')"></i>
                    </div>
                </div>
                <!---Product32 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtBiyHfum39cXqwk-IReZ2Veb75jnI980if2th2GmKWklGZcUk4zVdE8dzaA8yNQ1Eu7ejkxfikzilfEKQkCkCtXGOPjuE7Nbc0X6wThb47h0L-D5OkNLtyCnssp8AmDtyG6rKxw52TssGBmlo1VyaP2Q1hyEw54w2-zC0ioxPt_UBDKMVsaZ_TlTbJGM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.51.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">cucumber</h5>
                        <p class="card-text">Fresh Cucumber</p>
                        <span class="price">R13.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('cucumber', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtBiyHfum39cXqwk-IReZ2Veb75jnI980if2th2GmKWklGZcUk4zVdE8dzaA8yNQ1Eu7ejkxfikzilfEKQkCkCtXGOPjuE7Nbc0X6wThb47h0L-D5OkNLtyCnssp8AmDtyG6rKxw52TssGBmlo1VyaP2Q1hyEw54w2-zC0ioxPt_UBDKMVsaZ_TlTbJGM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.51.jpeg', '13.99')"></i>
                    </div>
                </div>
                <!---Product34 veg-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9MzBDomOOjWDckrQhuc4Av0TtUVhocwU0-24jw0Xt6ZMWG7tHztv9zRp2xtI_V7Yh1ym81kAG7ayCYEIUxtwpCL2husJLFX8tYHsPpAKLdgNO6ZjEM4Xro_oAsQy6TfgcE56TPVwwSPCnY-Vo0-8GU-Pwoc7lgWWn65qd5QPVG7IrgoZ1xHthyphenhyphenaJmzgM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.51%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Bell Pepper</h5>
                        <p class="card-text">Freshly Picked Green Bell Pepper each</p>
                        <span class="price">R6.86</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Bell Pepper', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9MzBDomOOjWDckrQhuc4Av0TtUVhocwU0-24jw0Xt6ZMWG7tHztv9zRp2xtI_V7Yh1ym81kAG7ayCYEIUxtwpCL2husJLFX8tYHsPpAKLdgNO6ZjEM4Xro_oAsQy6TfgcE56TPVwwSPCnY-Vo0-8GU-Pwoc7lgWWn65qd5QPVG7IrgoZ1xHthyphenhyphenaJmzgM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.51%20(1).jpeg', '6.86')"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-Meat">Meat</h2>
            <div class="shop-content">

                <!---Product39 meat-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiTxjNjL934AtwJMmxXdbt7n89FhpyJyIXzNiBpQrduhooPcIU7M_vuFJ9zkGmEr-T5gEep-hOGIMAt7N02A-0YzD-lfec5E-mq5-xte2g_dbBFmqfJ37jMmPW2XlK24EpAptgz3L3R7ByPS2fgVktqK63IOj5acrR5ZowHXkRF5CSkknyciXaOMm55muw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(3).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Chiken </h5>
                        <p class="card-text">Chicken Breasts 500g</p>
                        <span class="price">R45.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Chiken', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiTxjNjL934AtwJMmxXdbt7n89FhpyJyIXzNiBpQrduhooPcIU7M_vuFJ9zkGmEr-T5gEep-hOGIMAt7N02A-0YzD-lfec5E-mq5-xte2g_dbBFmqfJ37jMmPW2XlK24EpAptgz3L3R7ByPS2fgVktqK63IOj5acrR5ZowHXkRF5CSkknyciXaOMm55muw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(3).jpeg', '45.99')"></i>
                    </div>
                </div>
                <!---Product31 meat-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjA400X91YneZ9pnH4ij0smxT3aPRVX3PXK5mnfqGnLyxFsAvJxrwpPRPZGB-5bUHKwHLURZJvy9zlSsR3pPbnsk8-XIJ4Qiecobp17gtElSB2V-fSIZNKzpn0G_XC4bUipAbcovqWr1G_5bOCXVIfQyKKUcBm_lrqGyJbHXug11HJ_IeJk7MujPenkXpQ/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.53%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Beef </h5>
                        <p class="card-text">Beef Chuck slices 250g</p>
                        <span class="price">R78.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Beef', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjA400X91YneZ9pnH4ij0smxT3aPRVX3PXK5mnfqGnLyxFsAvJxrwpPRPZGB-5bUHKwHLURZJvy9zlSsR3pPbnsk8-XIJ4Qiecobp17gtElSB2V-fSIZNKzpn0G_XC4bUipAbcovqWr1G_5bOCXVIfQyKKUcBm_lrqGyJbHXug11HJ_IeJk7MujPenkXpQ/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.53%20(1).jpeg', '78.99')"></i>
                    </div>
                </div>
                <!---Product41 meat-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhf3fQ7NZFWSSPXh28JyaOmhwJBT4AAwC_lCEk-F29ko34qz6aVQB4U3vlITnyyojFEB3mHcI-ersJMg0MqKAITlUAcJlfjzzHDLbQCOhlx0TjjJR5hEoEQq7JPZqADPDJoOVzudyztSRToSDqqq3jDd8SZxYaGtjkdWgLWVoczIPeHtiCcFCfSUFtl3Vc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Beef</h5>
                        <p class="card-text">beef Stew chops 500g</p>
                        <span class="price">R59.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Beef', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhf3fQ7NZFWSSPXh28JyaOmhwJBT4AAwC_lCEk-F29ko34qz6aVQB4U3vlITnyyojFEB3mHcI-ersJMg0MqKAITlUAcJlfjzzHDLbQCOhlx0TjjJR5hEoEQq7JPZqADPDJoOVzudyztSRToSDqqq3jDd8SZxYaGtjkdWgLWVoczIPeHtiCcFCfSUFtl3Vc/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(1).jpeg', '59.99')"></i>
                    </div>
                </div>
                <!---Product43 meat-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhzJG0ndzXUn1JyDKUos-p0Y7pE-L0o2eISlEgKYyJb-50C4om74X2jpX4XtEoptrI5v5T7OIDHjJxXq46Hhlovpo7kbrigj3yV0L-aE7qFotJ8ivCVNApbMaIIkDoJdTu2Q6GkxA5d9ZfYED2CTpexDm2pkJkgWpAw0_YDof7rvLyjug2gHWX6Ec26WBA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(3).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Boerewors</h5>
                        <p class="card-text">Classic Beef Boerewors 500g</p>
                        <span class="price">R74.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Boerewors', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhzJG0ndzXUn1JyDKUos-p0Y7pE-L0o2eISlEgKYyJb-50C4om74X2jpX4XtEoptrI5v5T7OIDHjJxXq46Hhlovpo7kbrigj3yV0L-aE7qFotJ8ivCVNApbMaIIkDoJdTu2Q6GkxA5d9ZfYED2CTpexDm2pkJkgWpAw0_YDof7rvLyjug2gHWX6Ec26WBA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(3).jpeg', '74.99')"></i>
                    </div>
                </div>
                <!---Product45 meat-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEie1v1Q0cMuOQ728jVKzk9laAgrJFFrCCvYvH0xUYxCILNnIMfCEfU-eB3DWGGDwwWtOzndNNaw9YH2zQaSvs6Vr7o11xNxY7qcaI6znPJtzT_kpKn1_6RQM9kg_5DYN0SzQVEPBZrPWvYCZCS6dvRs8z_BGP8Pzd4FRgnJwB8cn-PNIRAoC0UvT478zoM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Beef Steak</h5>
                        <p class="card-text">Porterhouse Steak</p>
                        <span class="price">R89.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Beef Steak', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEie1v1Q0cMuOQ728jVKzk9laAgrJFFrCCvYvH0xUYxCILNnIMfCEfU-eB3DWGGDwwWtOzndNNaw9YH2zQaSvs6Vr7o11xNxY7qcaI6znPJtzT_kpKn1_6RQM9kg_5DYN0SzQVEPBZrPWvYCZCS6dvRs8z_BGP8Pzd4FRgnJwB8cn-PNIRAoC0UvT478zoM/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(1).jpeg', '89.99')"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-category">
            <h2 style="text-align: center;">Cans</h2>
            <div class="shop-content">
                <!---Product47 cans-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgHO8ESFmgv1skjbu636TRkmWuKmPUk9651NKVwgFZC8-5cHriaYoSU_FngRyTIgzPWKIq5mE1rOel7PsjMJ49FjS3sH-8U3JchN1b36kGOPA9mQBxlsIXHN-7jJFcwxY3nW8f0SyBCaj_uZw3_eSdu67RUo6nBFJ0_mhqwgm_8oq7VesUlKMh6WxEBCKo/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(1).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Mix Veg Can </h5>
                        <p class="card-text">Bonduelle Mix Vegatable Can 165g</p>
                        <span class="price">R19.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Mix Veg Can', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgHO8ESFmgv1skjbu636TRkmWuKmPUk9651NKVwgFZC8-5cHriaYoSU_FngRyTIgzPWKIq5mE1rOel7PsjMJ49FjS3sH-8U3JchN1b36kGOPA9mQBxlsIXHN-7jJFcwxY3nW8f0SyBCaj_uZw3_eSdu67RUo6nBFJ0_mhqwgm_8oq7VesUlKMh6WxEBCKo/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(1).jpeg', '19.99')"></i>
                    </div>
                </div>
                <!---Product55 cans-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjek1rRk8ZSklpweY0q4d8U_CFLmFy6QC92KFk8Kb1J-4tmSRYFBfeYSTeIt6AINgPNAqlQoaik4aZLPNfaW43SxJ7kkv0lRCFeI0wJk44bQ8hbQ2oGtTqhn5sO0D53MCVLtLNXfwi64epmhz_-z5qXqALoNiOpbTd8g2j8JsWpTGqMVLVDkc0cXNI1BqA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Tuna </h5>
                        <p class="card-text">No Name Tuna Chunks 170g</p>
                        <span class="price">R27.95</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('No Name Brand Tuna', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjek1rRk8ZSklpweY0q4d8U_CFLmFy6QC92KFk8Kb1J-4tmSRYFBfeYSTeIt6AINgPNAqlQoaik4aZLPNfaW43SxJ7kkv0lRCFeI0wJk44bQ8hbQ2oGtTqhn5sO0D53MCVLtLNXfwi64epmhz_-z5qXqALoNiOpbTd8g2j8JsWpTGqMVLVDkc0cXNI1BqA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57%20(2).jpeg', '27.95')"></i>
                    </div>
                </div>
                <!---Product48 cans-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0qdZ0nYDt9dY4l-dU8oOdqbSPAM1KKeCoE5et-rAA4sojUJoO1H4dQCtRtok6mA6gvz76IofW_8egarx-ucTVrNIyWM6IzvsjUbatIDJOSZQfs4ya3oI43n5Rp_z4E0UBnpwYtlh8tJM9fQHxt4H3oMmw3yoyYSoxx45kOzmyK-mzX4udkUpBGD3wq1o/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Rhodes Caned Rellish</h5>
                        <p class="card-text">Rhodes Canned Braai Rellish 260g</p>
                        <span class="price">R44.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Rhodes Caned Rellish', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0qdZ0nYDt9dY4l-dU8oOdqbSPAM1KKeCoE5et-rAA4sojUJoO1H4dQCtRtok6mA6gvz76IofW_8egarx-ucTVrNIyWM6IzvsjUbatIDJOSZQfs4ya3oI43n5Rp_z4E0UBnpwYtlh8tJM9fQHxt4H3oMmw3yoyYSoxx45kOzmyK-mzX4udkUpBGD3wq1o/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.58%20(2).jpeg', '44.99')"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-category">
            <h2 style="text-align: center;" id="product-category-HouseHold">Toiletries & HouseHold Essentials</h2>
            <div class="shop-content">

                <!---Product33 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgddzC4eEFj8nbjOqCTZZ8mJskzV-Ks0wjMNqKEcZZF9ikkkDZz0MkRqu4D931sMFhha2PhgnZIX0feXUs_swNmAoymYXLGMwktH-E-6cyN6wcceM9wmkfLLqj88OpW3PmLbPMcPzvjs0YyN3TcqYNlJZACxTYKkXQZWJzYo3nqCK7n-4eq7w5ltjUedwA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.52.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Ottimo</h5>
                        <p class="card-text">Ottimo Mop & Bucket combo</p>
                        <span class="price">R299.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Ottimo Mop & Bucket combo', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgddzC4eEFj8nbjOqCTZZ8mJskzV-Ks0wjMNqKEcZZF9ikkkDZz0MkRqu4D931sMFhha2PhgnZIX0feXUs_swNmAoymYXLGMwktH-E-6cyN6wcceM9wmkfLLqj88OpW3PmLbPMcPzvjs0YyN3TcqYNlJZACxTYKkXQZWJzYo3nqCK7n-4eq7w5ltjUedwA/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.52.jpeg', '299.99')"></i>
                    </div>
                </div>
                <!---Product38 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIvBKj3Wmm6HConUh-_2LYV5A2YwC5n6nJSkaKbz5PyZ_1AQmMpFSrnAWeUql_9zvubbUWTvZqFq1YeJ2KHPFwAyaRKbq_tfMSr2FkgT3-6qb3Dyv3Dnmys2QEQ6Ons9k1zmyg88WM_XjzsKTTZpk89gYBw22aHH-ZtX6g4ocJinftT2YafS_3qXUpepk/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Mr Muscle</h5>
                        <p class="card-text">Mr Muscle Kitchen Trig Original 500ml</p>
                        <span class="price">R51.95</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Mr Muscle Kitchen Trig', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIvBKj3Wmm6HConUh-_2LYV5A2YwC5n6nJSkaKbz5PyZ_1AQmMpFSrnAWeUql_9zvubbUWTvZqFq1YeJ2KHPFwAyaRKbq_tfMSr2FkgT3-6qb3Dyv3Dnmys2QEQ6Ons9k1zmyg88WM_XjzsKTTZpk89gYBw22aHH-ZtX6g4ocJinftT2YafS_3qXUpepk/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55.jpeg', '51.95')"></i>
                    </div>
                </div>
                <!---Product40 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEikpLR-8vozXztNMeAG1-nQTO-zRu4mbcnizJZrD1DNecz_j2nrAe62K94eaqvKa8KKyQecHgypjaVuNhyYwjuMwMftGSMaocEZD2MOcx_tQFMmNtVpJ80RUNUTpsMt466VcVyNMBELEB0HATW-7FnPXFwCwpAan75YzjXJMhz3Wfi0S7cLRNXW21Mji04/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Domestos</h5>
                        <p class="card-text">Domestos Kitchen Trig Original 500ml</p>
                        <span class="price">R55.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Domestos Kitchen cleaner', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEikpLR-8vozXztNMeAG1-nQTO-zRu4mbcnizJZrD1DNecz_j2nrAe62K94eaqvKa8KKyQecHgypjaVuNhyYwjuMwMftGSMaocEZD2MOcx_tQFMmNtVpJ80RUNUTpsMt466VcVyNMBELEB0HATW-7FnPXFwCwpAan75YzjXJMhz3Wfi0S7cLRNXW21Mji04/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.55%20(2).jpeg', '55.99')"></i>
                    </div>
                </div>
                <!---Product42 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEibRUg64VLF7wGVj8Vcdbc5FqVUt65h0ce4V5cwMh9n_bkhyoWQ3BGS-8m-SYekyzApo5IzIs6WkLXuNV2djKzhpMQeflulnqqj7tmpNcc29IR6h3w1NsTgW81OrH6fccqpZuH1D0yLesCLQgYddUVEleqQ-oDjYylIzsFIakaO-o3xLfO3q2LCedV6cxw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Wash Towels</h5>
                        <p class="card-text">6 Multi-Color Wash Towels</p>
                        <span class="price">R90.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('6 Multi-Color Wash Towels', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEibRUg64VLF7wGVj8Vcdbc5FqVUt65h0ce4V5cwMh9n_bkhyoWQ3BGS-8m-SYekyzApo5IzIs6WkLXuNV2djKzhpMQeflulnqqj7tmpNcc29IR6h3w1NsTgW81OrH6fccqpZuH1D0yLesCLQgYddUVEleqQ-oDjYylIzsFIakaO-o3xLfO3q2LCedV6cxw/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54.jpeg', '90.00')"></i>
                    </div>
                </div>
                <!---Product44 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiHZXH-gNAl07E5aTcx0Q_A6RZ4QNfpG2bk4CmzarO1MzBS5z4U1hvWfjs1YHi_o5zJVp-EfpnRkY88EEpQ7iKXhOzsvCR5RN7EM8RVtygraJOLtseTzUOZ7mkA1X1jDgF5-O1p26KsmnCc4UAjJvjMLLSRGwmejH1D7tNuIoTypkPf0Nm-mTiU34UOBOU/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(2).jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Ottimo Brush</h5>
                        <p class="card-text">Ottimo Green Brush</p>
                        <span class="price">R9.99</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Ottimo Brush', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiHZXH-gNAl07E5aTcx0Q_A6RZ4QNfpG2bk4CmzarO1MzBS5z4U1hvWfjs1YHi_o5zJVp-EfpnRkY88EEpQ7iKXhOzsvCR5RN7EM8RVtygraJOLtseTzUOZ7mkA1X1jDgF5-O1p26KsmnCc4UAjJvjMLLSRGwmejH1D7tNuIoTypkPf0Nm-mTiU34UOBOU/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.54%20(2).jpeg', '9.99')"></i>
                    </div>
                </div>
                <!---Product46 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjLgMlnfR7o-TFrqm_jbEgHY-VRtJqN_K-BkwRVZGrKo-Ci00c-Nd2gg6qbz3VsGU73frzo3gJGbXO7Q-6SuRy9Bzkv7jhQytXks9Mo32YHB597lEAyX11qBYvGafsCAneVofyvTNSB7KmQLFMDEi_Bw4vQNZXAsZDejcDCws4C0c7NWuiTMljrNcACVc4/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Pot Scourer</h5>
                        <p class="card-text">2 Pot Scourer Pieces</p>
                        <span class="price">R15.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Pot Scourer', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjLgMlnfR7o-TFrqm_jbEgHY-VRtJqN_K-BkwRVZGrKo-Ci00c-Nd2gg6qbz3VsGU73frzo3gJGbXO7Q-6SuRy9Bzkv7jhQytXks9Mo32YHB597lEAyX11qBYvGafsCAneVofyvTNSB7KmQLFMDEi_Bw4vQNZXAsZDejcDCws4C0c7NWuiTMljrNcACVc4/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.57.jpeg', '15.00')"></i>
                    </div>
                </div>
                <!---Product53 house hold-->
                <div class="card product-box" style="width: 18rem;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgpCwuVMjFBkWiC0g3bJI4MF3Zh3384Emi-OOy0Ogt3XmMxwH3KdkGO3OkLuU2OkosxcyRhqwuNJMx1w8EP4Bx7yJMphASF4BeEI6Jw63QNtFWL5xTBlSXdigjYQPo3toz-rf3RroHvReoHBjbw0lKxdCm41piRkRDwcnpUQHc0Rm5n1SWFGF1w3otI86U/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.56.jpeg"
                        class="card-img-top product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Sponge Scourers </h5>
                        <p class="card-text">No Name Sponge Scourers 8's</p>
                        <span class="price">R39.00</span>
                        <i class="fa-solid fa-plus add-cart"
                            onclick="addToCart('Sponge Scourers', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgpCwuVMjFBkWiC0g3bJI4MF3Zh3384Emi-OOy0Ogt3XmMxwH3KdkGO3OkLuU2OkosxcyRhqwuNJMx1w8EP4Bx7yJMphASF4BeEI6Jw63QNtFWL5xTBlSXdigjYQPo3toz-rf3RroHvReoHBjbw0lKxdCm41piRkRDwcnpUQHc0Rm5n1SWFGF1w3otI86U/s320/WhatsApp%20Image%202024-11-03%20at%2010.42.56.jpeg', '39.00')"></i>

                    </div>
                </div>
            </div>
    </section>
    <footer style="background-color: #FFE5B4;">
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
                             <li><a href="index.html">Home</a></li>
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
</body>

</html>
