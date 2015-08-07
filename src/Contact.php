<?php
class Contact {
    private name;
    private phone;
    private address;

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
        array_push($_SESSION['address_book'], $this)
    }

    static function getAll()
    {
        return $_SESSION['address_book'];
    }

    static function deleteAll()
    {
        $_SESSION['address_book'] = array();
    }
}
