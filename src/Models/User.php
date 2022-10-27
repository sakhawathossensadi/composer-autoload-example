<?php

namespace Learn\Composer\Models;

class User
{
    private $name;
    private $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDetails()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Address : " . $this->address . "<br>";
    }
}
