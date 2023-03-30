<?php

//A class is the specification/description/blueprint of objects
// It's a kind of data type

class Pig
{
    const OWNER = 'iOAcademy'; // this is a constant, don't need to write public/private
                               //as it is a constant and cannot be changed either way
    // PROPERTIES
    private string $name;
    public float $weight;
    public string $colour;
    private string $scientificName = 'Sus';



    // GETTERS AND SETTERS - good to validate setters
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */

    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    /**
     * @return string    // Only a setter for 'scientific name' as there is only one right answer,
     */                  //  don't want to be able to change
    public function getScientificName(): string
    {
        return $this->scientificName;
    }



    // METHODS - are functions or 'behaviours'

    public function speak(): string
    {
        return 'Oink!';
    }
public function wagTail(): string
    {
        return 'Wag, wag!';
    }
    public function eat(string $food): string{
        return 'Mmmm, I like tasty ' . $food;
    }
}