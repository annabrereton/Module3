<?php

// A class is the specification/description/blueprint of objects.
// It's a kind of data type.

// Update:
// Added $id property and getter and setter.
// Added a constructor.

class Pig
{
    const OWNER = 'iO Academy';

    // Properties - same as from db
    private int $id;
    private string $name;
    private float $weight;
    private string $colour;
    private string $scientificName = 'Sus';

    public function __construct(           // Added constructor to create pig objects
        string $name, float $weight, string $colour, int $id = -1 // id is on the end so that it is optional
    ) {                                                           // so that when add a pig to database it allows
        $this->id = $id;                                          // the db to automatically assign primary key.
        $this->name = $name;                                      // Db will never assign at -1
        $this->weight = $weight;
        $this->colour = $colour;
    }

    // Methods

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

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
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientificName;
    }

    public function speak(): string
    {
        return 'Oink!';
    }

    public function wagTail(): string
    {
        return 'Wag, wag!';
    }

    public function eat(string $food): string
    {
        return 'Mmmm. I love tasty ' . $food;
    }
}
