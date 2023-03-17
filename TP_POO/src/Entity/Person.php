<?php

namespace App\Entity;

use Service\AuthenticationService;

require_once '../Service/ ,AuthenticationService.php';

/**
 * A representation of a person
 */
class Person
{
    protected string $name;
    protected string $lastname;
    protected string $email; // Email is unique for person identification
    protected string $password;
    protected AuthenticationService $helper;

    /**
     * Creates a new person instance with personnal informations
     * @param string $name The person's first name
     * @param string $lastname The person's lastname
     * @param string $email The person's email
     * @param string $password The person's password
     */
    public function __construct(string $name, string $lastname, string $email, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->setPassword($password);
        $this->helper = AuthenticationService::getInstance();
    }

    // Getters
    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // SETTERS

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastname($lastname)
    {
        $this->name = $lastname;
    }

    public function setEmail($email)
    {
        $this->name = $email;
    }
        
    /**
     * Update the password after hashed it
     * @param  mixed $password
     * @return void
     */
    public function setPassword(string $password)
    {
        $this->password = $this->helper->hashPassword($password);
    }

    /**
     * Override toString, returns a string representation of the person.
     * @return string The person's last name.
     */
    public function __toString()
    {
        return printf(
            "Student: %s %s %s\n",
            $this->getname(),
            $this->getLastname(),
            $this->getEmail()
        );
    }
}
