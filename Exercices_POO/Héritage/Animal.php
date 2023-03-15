<?php

namespace Entity;

use Entity\Specie;

require 'Specie.php';

class Animal extends Specie
{
    protected $lifeExpectancy;
    protected $gestationTime;

    public function __construct($diet, $membersNumber, $lifeExpectancy, $gestationTime)
    {
        parent::__construct($diet, $membersNumber);
        $this->lifeExpectancy = $lifeExpectancy;
        $this->gestationTime = $gestationTime;
    }

    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }

    public function getGestationTime()
    {
        return $this->gestationTime;
    }

    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;
    }

    public function setGestationTime($gestationTime)
    {
        $this->gestationTime = $gestationTime;
    }
}