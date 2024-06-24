<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTM Bakery</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="main">
        <header class="pt-10 pb-5">
            <div class="container-fluid mx-auto">
                <div class="nav">
                    <div class="logo">
                        <img src="./assets/img/logo.svg" alt="">
                    </div>
                    <div class="menu">
                        <ul>
                            <li>Home</li>
                            <li>About</li>
                            <li>Shop</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="right-header">
                        <ul>
                            <li><img src="assets/img/icon-search.svg" alt="Search Icon"></li>
                            <li><img src="assets/img/cart-icon-1.webp" alt="Cart Icon"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="hero">
            <div class="container-fluid mx-auto">
                <div class="flex gap-5">
                    <div class="column-1 w-7/12">
                        <h1 class="home-title mb-10">
                            Sweeten every moment with our bakery delights!
                        </h1>
                        <a href="#" class="button-1 btn rounded-lg">View More</a>
                        <img class="mt-10 rounded-3xl" src="./assets/img/Banner-img-2.webp" alt="">
                    </div>
                    <div class="column-2 w-5/12">
                        <img class="rounded-3xl" src="./assets/img/Banner-img-1.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="about py-16 text-center">
            <div class="container-fluid mx-auto">
                <h2 class="section-title mb-3">About</h2>
                <div class="about-text-div relative reveal-text">
                    <p class="about-text reveal text-black">
                        A bakery is a business that primarily produces andsells goods such as bread, pastries, cakes, cookies, and pies. These primarily in establishments often offer a variety of freshly baked often offer a items scratch using bakery traditional or specialized recipes.
                    </p>
                    <p class="about-text text-2 absolute top-0 left-0">
                        A bakery is a business that primarily produces andsells goods such as bread, pastries, cakes, cookies, and pies. These primarily in establishments often offer a variety of freshly baked often offer a items scratch using bakery traditional or specialized recipes.
                    </p>
                </div>
            </div>
        </section>
        <section class="product-section py-5">
            <div class="container-fluid mx-auto">
                <div class="title flex justify-between items-center">
                    <h2>Things we bake</h2>
                    <a class="button-1 bg-black rounded-lg" href="#">View All Product</a>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="./assets/js/script.js"></script>

</html>