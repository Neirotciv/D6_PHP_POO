<?php

namespace App\Entity;

use App\Entity\Person;

require('Person.php');

class Student extends Person
{
    // Override the parent method with ucfirst
    public function getFullName()
    {
        return ucfirst($this->name) . ' ' . ucfirst($this->lastname);
    }
}