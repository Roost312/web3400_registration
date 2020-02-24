<?php
//Aaron Whipple 2-24-20 session log in
require 'session.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="js/main.js"></script>

</head>

<body>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="home.php">
                <h1 class="title">My Website</h1>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">

            <div class="navbar-start">
                <!--       <a class="navbar-item">
        Home
      </a> -->
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="profile.php" class="button">
                            <span class="icon"><i class="fas fa-user-circle"></i></span><span>Profile</span>
                        </a>
                        <a href="logout.php" class="button">
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span><span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Home page
            </h1>
            <h2 class="subtitle">Welcome back,
                <?=$_SESSION['name']?>!</h2>
        </div>
    </section>
</body>

</html>
