<?php

namespace App\Models;

use App\Database;

class Pets{
    
    private ?int $id;
    private string $pet_name;
    private string $doctor;
    private string $species;
    private string $date;
    private string $observations;

    private $database;
    private $table="dates";

    public function __construct(int $id = null, string $pet_name = '', string $species = '', string $doctor = '', string $observations = '', string $date = '')
    {
        $this->id = $id;
        $this->pet_name = $pet_name;
        $this->species = $species;
        $this->doctor = $doctor;
        $this->date = $date;
        $this->observations = $observations;


        if(!$this->database){
            $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $petsArray = $query->fetchAll();
        $petsList = [];
        foreach ($petsArray as $pets) {
            $petsItem = new Pets ($pets["id"], $pets["pet_name"], $pets["species"], $pets["doctor"], $pets["observations"], $pets["date"]);

            array_push($petsList, $petsItem);
        }
        return $petsList;
    }

    public function getId(){
        return $this->id;
    }

    public function getPetName(){
        return $this->pet_name;
    }

    public function getSpecies(){
        return $this->species;
    }

    public function getDoctor(){
        return $this->doctor;
    }


    public function getObservations(){
        return $this->observations;
    }

    public function getDate(){
        return $this->date;
    }
    
    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Pets($result[0]["id"], $result[0]["pet_name"], $result[0]["species"], $result[0]["doctor"], $result[0]["date"], $result[0]["observations"]);
    }
    
    
    public function delete(){
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }
}

?>