<?php
// Dao standing for DATA ACCESS OBJECT
// This accesses data from the pigs database to use to connect to Pig.php
require_once 'db-connect.php';
require_once 'Pig.php';

class PigDao // Pig DAO is a class
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('iofarm'); // 'INJECTED' name od database into the  function
    }                                      // Index9 tests this

    public function fetchAll(): array      // FETCHING data from db
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour` '
            . 'FROM `pigs`; ';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $pigs = [];                         // Made a pig constructor to creeate pig objects to
        foreach ($rows as $row) {           // return array of pigs rather than an array of arrays
            $pig = new Pig($row['name'], $row['weight'], $row['colour'], $row['id']);
            $pigs[] = $pig;
        }

        return $pigs;                        // Returns pig objects
    }

    public function fetch(int $pigId): Pig
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour` '
            . 'FROM `pigs` '
            . 'WHERE `id` = :id; ';

        $values = [':id' => $pigId]; // Array

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $pig = $query->fetch();

        return new Pig($pig['name'], $pig['weight'], $pig['colour'], $pig['id']);
    }

    public function add(Pig $pig):int
    {
        $sql = 'INSERT INTO `pigs` (`name`, `weight`, `colour`) '  // Does not contain 'id' so the db auto increment
            . 'VALUES (:name, :weight, :colour); ';

        $values = array(
            'name' => $pig->getName(),
            'weight' => $pig->getWeight(),
            'colour' => $pig->getColour()
        );

        $query = $this->db->prepare($sql);
        $query->execute($values);

        return $this->db->lastInsertId(); // lastInsertId is a part of PDO
    }
}
