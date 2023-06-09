<?php

namespace Entity;

use Service\AuthenticationService;

/**
 * A representation of a person
 */
class Person
{
    protected string $name;
    protected string $lastname;
    protected string $email; // Email is unique for person identification
    protected string $password;
    protected string $login;
    protected AuthenticationService $auth_helper;
    protected bool $isConnected = false;

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
        $this->login = $email;
        $this->auth_helper = AuthenticationService::getInstance();
        $this->setPassword($password);
    }

    /**
     * Override toString, returns a string representation of the person.
     * @return string The person's last name.
     */
    public function __toString()
    {
        return $this->name . " " . $this->lastname . " " . $this->email;
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

    public function getIsConnected()
    {
        return $this->isConnected;
    }

    public function getLogin()
    {
        return $this->login;
    }

    // Setters

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setLastname(string $lastname)
    {
        $this->name = $lastname;
    }

    public function setEmail(string $email)
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
        $this->password = $this->auth_helper->hashPassword($password);
    }

    public function setIsConnected(bool $isConnected)
    {
        $this->isConnected = $isConnected;
    }

    public function setLogin(string $login)
    {
        $this->login = $login;
    }
}