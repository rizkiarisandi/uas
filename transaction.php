<?php
include 'db/koneksi.php'
?>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="../uas/css/style.css" />

        <!----===== Boxicons CSS ===== -->
        <link
            href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
            rel="stylesheet"
        />

        <title>Transaction</title>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="../uas/images/logo.png" alt="" />
                    </span>

                    <div class="text logo-text">
                        <span class="name">Cafe Lusa</span>
                        <span class="profession">Snack, Drink, & Chill</span>
                    </div>
                </div>

                <i class="bx bx-chevron-right toggle"></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class="bx bx-search icon"></i>
                        <input type="text" placeholder="Search..." />
                    </li>

                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="index.php">
                                <i class="bx bx-home-alt icon"></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="menu.html">
                                <i class="bx bx-bar-chart-alt-2 icon"></i>
                                <span class="text nav-text">Menu</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="customer.html">
                                <i class="bx bx-bell icon"></i>
                                <span class="text nav-text">Customer</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="transaction.html">
                                <i class="bx bx-pie-chart-alt icon"></i>
                                <span class="text nav-text">Transaction</span>
                            </a>
                        </li>
                        <!-- 
                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-heart icon"></i>
                                <span class="text nav-text">Likes</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-wallet icon"></i>
                                <span class="text nav-text">Wallets</span>
                            </a>
                        </li> -->
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="#">
                            <i class="bx bx-log-out icon"></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class="bx bx-moon icon moon"></i>
                            <i class="bx bx-sun icon sun"></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>

        <section class="home">
            <div class="text">Transaction</div>
        </section>

        <script src="../uas/js/script.js"></script>
    </body>
</html>
