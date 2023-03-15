<?php

namespace App\Entity;

/**
 * Represents a course entity with a name and unique identifier
 */
class Course
{
    private string $name;
    private int $id;

    /**
     * Course constructor.
     * @param string $name - The name of the course
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = 0;
    }

    /**
     * Sets the id of the course
     * @param int $id - The id of the course
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    /**
     * Gets the id of the course
     * @return int - The id of the course
     */
    public function getId()
    {
        return $this->id;
    }
}
