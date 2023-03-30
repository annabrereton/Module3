<?php

//A class is the specification/description/blueprint of objects
// It's a kind of data type

class Cow
{
    const OWNER = 'iOAcademy'; // this is a constant, don't need to write public/private
                               //as it is a constant and cannot be changed either way
    // PROPERTIES
    private string $name;
    private float $weight;
    private string $colour;
    private string $scientificName = 'Bos';

    public function __construct(string $name, float $weight, string $colour)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->colour = $colour;
    }

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
        return 'Mooooo!';
    }
public function wagTail(): string
    {
        return 'Swish, swish!';
    }
    public function eat(string $food): string{
        return 'Mmmmoooo, I like yummy ' . $food;
    }

    public function __toString(): string
    {
        return $this->name . ' is ' . $this->colour;    // TODO: Implement __toString() method.
    }
}