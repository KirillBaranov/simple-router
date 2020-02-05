<?php

$routes = array(
    // Basic page
    array(
        'url' => '/',
        'title' => 'Главная',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'homepage.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/pages/o-nas',
        'title' => 'О нас',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'about.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/pages/optimizaciya-dolgov',
        'title' => 'Оптимизация долгов',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'optimisation.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/pages/creditniy-urist',
        'title' => 'Кредитный юрист',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'credit-layer.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/blog',
        'title' => 'Блог',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'blog.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/pages/bankrotstvo-fizicheskogo-lica',
        'title' => 'Банкротство',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'smash.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/franshiza',
        'title' => 'Франшиза',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'franchise.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    // Products
    array(
        'url' => '/producti/mini',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'products/mini.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/producti/base',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'products/base.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/producti/opti',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'products/opti.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    ),
    array(
        'url' => '/producti/maxi',
        'view' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'products/maxi.php',
        'header' => $_SERVER['DOCUMENT_ROOT'] . PATH_TO_VIEWS . 'layouts/header.php'
    )
);
