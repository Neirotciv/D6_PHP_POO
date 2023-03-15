<?php

namespace Entity;

class Specie
{

    protected $diet;
    protected $membersNumber;

    public function __construct($diet, $membersNumber)
    {
        $this->diet = $diet;
        $this->membersNumber = $membersNumber;
    }

    public function getDiet()
    {
        return $this->diet;
    }
    public function getMembersNumber()
    {
        return $this->membersNumber;
    }

    public function setDiet($diet)
    {
        $this->diet = $diet;
    }
    public function setMembersNumber($membersNumber)
    {
        $this->membersNumber = $membersNumber;
    }
}
