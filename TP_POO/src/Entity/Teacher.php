<?php

namespace App\Entity;

use App\Entity\Person;

require_once 'Person.php';

class Teacher extends Person
{
    private array $subject;
    private array $course_supports;
    
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

}