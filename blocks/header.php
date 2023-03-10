<?php
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0]; // /pages/index.php

$indexUrl = '/index.php';
$contactUrl = '/pages/contact.php';
$aboutUrl = '/pages/about.php';
$placesUrl = '/pages/places.php';
?>


<div class="tm-row pt-4">
    <div class="tm-col-left">
        <div class="tm-site-header media">
            <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
            <div class="media-body">
                <h1 class="tm-sitename text-uppercase">UfAttr</h1>
                <p class="tm-slogon">Where to go in Ufa</p>
            </div>
        </div>
    </div>
    <div class="tm-col-right">
        <nav class="navbar navbar-expand-lg" id="tm-main-nav">
            <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item <?php $url === $indexUrl ? print('active') : print('') ?>">
                        <a class="nav-link tm-nav-link" href="../index.php" id="Home">Home</a>
                    </li>
                    <li class="nav-item <?php $url === $aboutUrl ? print('active') : print('') ?>">
                        <a class="nav-link tm-nav-link" href="../pages/about.php" id="About">About</a>
                    </li>
                    <li class="nav-item <?php $url === $placesUrl ? print('active') : print('') ?>">
                        <a class="nav-link tm-nav-link" href="../pages/places.php" id="Places">Places</a>
                    </li>
                    <li class="nav-item <?php $url === $contactUrl ? print('active') : print('') ?>">
                        <a class="nav-link tm-nav-link" href="../pages/contact.php" id="Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>