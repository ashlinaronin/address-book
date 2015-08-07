<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";


    // Initialize cookies
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    // Register Twig
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Root path displays any existing Contacts and supplies entry form
    $app->get('/', function() user ($app) {
        return $app['twig']->render('address_book.html.twig', array(
            'list_of_contacts' => Contact::getAll()
        ));
    });

    return $app;

?>
