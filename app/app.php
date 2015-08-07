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

        // add input validation in constructor

        $new_contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $new_contact->save();

        // pass Twig the new Contact object so it can confirm creation for user
        return $app['twig']->render('create_contact.html.twig', array(
            'new_contact' => $new_contact
        ));
    });

    $app->get('/tests', function() use ($app) {
        $output = '';

        foreach (Contact::getAll() as $current_contact) {
            $output .= "Contact name: " . $current_contact->getName();
            $output .= ", phone: " . $current_contact->getPhone();
            $output .= ", address: " . $current_contact->getAddress();
            $output .= "<hr>";
        }

        return $output;
    });

    /* Delete contacts route doesn't need to pass any data to Twig because
       nothing particular to the user's address book is displayed. */
    $app->get('/delete_contacts', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;

?>
