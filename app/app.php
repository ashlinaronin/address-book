<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if (empty($_SESSION['address_book'])) {
        $_SESSION['address_book'] = array();
    }

    $app = new Silex\Application();

    // Register Twig
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    return $app;

?>
