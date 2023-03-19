<?php

namespace Entity;

use Entity\Person;

class Teacher extends Person
{
    private string $subject;

    public function __construct(string $name, string $lastname, string $email, string $password, ?string $subject)
    {
        parent::__construct($name, $lastname, $email, $password);
        $this->subject = $subject;
    }
    
    // Getters

    public function getSubject()
    {
        return $this->subject;
    }

    // Setters

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}