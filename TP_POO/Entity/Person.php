<?php

namespace App\Entity;

/**
 * A representation of a person with a name and a lastname.
 */
class Person
{
    protected string $name;
    protected string $lastname;

    /**
     * Creates a new person instance with the given name and last name.
     * @param string $name The person's first name.
     * @param string $lastname The person's last name.
     */
    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    /**
     * Returns the person's full name.
     * @return string The person's full name.
     */
    public function getFullName()
    {
        return $this->name . ' ' . $this->lastname;
    }

    /**
     * Override toString, returns a string representation of the person.
     * @return string The person's last name.
     */
    public function __toString()
    {
        return $this->lastname;
    }
}
