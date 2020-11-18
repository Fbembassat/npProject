<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body>

<div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1 pl-5">
                    <a class="text-white envelope" href="http://eepurl.com/hij_3P" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>
Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <h1 class="blog-header-logo text-white font-italic"><img class="logo mr-2" src="<?php echo URLROOT; ?>/img/logo.png" alt ="Logo">SpaceNews</h1>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-white" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <?php if(isset($_SESSION['user_id'])) : ?>

                        <div class="mr-3 text-white">Hi, <?php echo $_SESSION['user_name'] ?></div>
                        <a class="btn btn-sm btn-outline-secondary text-white mr-3" href="<?php echo URLROOT; ?>/users/logout">Logout</a>

                    <?php else : ?>
                    <a class="btn btn-sm btn-outline-secondary text-white mr-1" href="<?php echo URLROOT; ?>/users/signup">Sign up</a>
                    <a class="btn btn-sm btn-outline-secondary text-white mr-3" href="<?php echo URLROOT; ?>/users/login">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>">Home</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/pages/about">About us</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Sun</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Mercury</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Venus</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Earth</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Mars</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Jupiter</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Saturn</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Uranus</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Neptune</a>
            </nav>
        </div>