<?php

namespace App\Entity;

use App\Entity\Person;

require('Person.php');

class Teacher extends Person
{
    private string $subject;
    
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}