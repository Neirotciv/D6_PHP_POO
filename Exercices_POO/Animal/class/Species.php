<?php

namespace MyClass;

class Species
{
    private string $species;

    /**
	 * Species constructor.
	 * @param string $species The name of the species
	 */
    public function __construct(string $species)
    {
        $this->species = $species;
    }

    /**
	 * Method to get the name of the species
	 * @return string The name of the species
	 */
    public function getSpecies()
    {
        return $this->species;
    }
}