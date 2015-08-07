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
    $app->get('/', function() use ($app) {
        return $app['twig']->render('address_book.html.twig', array(
            'list_of_contacts' => Contact::getAll()
        ));
    });

    $app->post('/create_contact', function() use ($app) {
        $new_contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $new_contact->save();

        // pass Twig the new Contact object so it can confirm creation for user
        return $app['twig']->render('create_contact.html.twig', array(
            'new_contact' => $new_contact
        ));
    });

    return $app;

?>
