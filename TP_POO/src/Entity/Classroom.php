<?php

namespace Entity;

use Entity\Course;
use Entity\Teacher;

class Classroom
{
    private string $name;

    /**
     * Constructor for the classroom
     * @param string $name The classroom name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Getters

    public function getName()
    {
        return $this->name;
    }

    // Setters

    public function setName(string $name)
    {
        $this->name = $name;
    }

}