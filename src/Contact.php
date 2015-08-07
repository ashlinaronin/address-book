<?php
class Contact {
    private $name;
    private $phone;
    private $address;

    /* Constructor doesn't really need to do input validation for this exercise.
       Cast class properties as explicit types but don't check inputs otherwise. */
    function __construct($contact_name, $contact_phone, $contact_address)
    {
        $this->name = (string) $contact_name;
        $this->phone = (int) $contact_phone;
        $this->address = (string) $contact_address;
    }

    // Getters
    function getName()
    {
        return $this->name;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getAddress()
    {
        return $this->address;
    }


    // Setters
    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function setPhone($new_phone)
    {
        $this->phone = $new_phone;
    }

    function setAddress($new_address)
    {
        $this->address = $new_address;
    }


    // Cookie methods
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function delete($index_to_delete)
    {
        unset($_SESSION['list_of_contacts'][$index_to_delete]);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
?>
