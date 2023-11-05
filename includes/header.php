<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Swim</title>

    <link rel="shortcut icon" href="assets/images/sm-logo.png" type="image/png">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header>
        <nav class="primary-navigation">
            <a href="./" class="image-container">
                <img src="assets/images/tag.png" alt="">
            </a>
            <ul class="menu">
                <li class="menu-item"><a href="./">Home</a></li>
                <li class="menu-item"><a href="services.php">Services</a></li>
                <li class="menu-item"><a href="">Shop</a></li>
                <li class="menu-item"><a href="">Blog</a></li>
                <li class="menu-item"><a href="">Contact Us</a></li>
            </ul>
            <div class="buttons">
                <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
                <a href=""><i class="fa-solid fa-user"></i></a>
                <div class="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>
    <nav class="mobile-menu">
        <ul>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">home</span><span>Home</span></a>
            </li>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">school</span><span>Classes</span></a></li>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">gallery_thumbnail</span><span>Gallery</span></a></li>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">group</span><span>Staff</span></a>
            </li>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">contacts</span><span>Contacts</span></a></li>
            <li class="menu-item"><a href=""><span class="material-symbols-outlined">info</span><span>About</span></a>
            </li>
        </ul>
    </nav>
    <main onclick="menuShut()">