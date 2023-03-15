<?php

namespace MyClass;

use MyInterfaces\AnimalInterface;

require_once 'Species.php';
require_once 'Diet.php';
require_once '../interface/AnimalInterface.php';

class Animal extends Species
{
	private Species $species;
	private int $numberOfMembers;
	private Diet $diet;
	private int $lifeExpectancy;
	private int $gestationPeriod;
	private string $name;

	public function __construct()
	{
		$this->species = new Species();
		$this->numberOfMembers = 0;
		$this->diet = new Diet();
		$this->lifeExpectancy = 0;
		$this->gestationPeriod = 0;
	}

	public function passAway($diet)
	{
		echo 'died';
	}
}