<?php

namespace App\Models;

use App\Database;

class Pets{
    
    private ?int $id;
    private string $pet_name;
    private string $doctor;
    private string $date;
    private string $observations;

    private $database;
    private $table="dates";

    public function __construct(int $id = null, string $pet_name = '', string $doctor = '', string $observations = '', string $date = '')
    {
        $this->id = $id;
        $this->pet_name = $pet_name;
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
            $petsItem = new Pets ($pets["id"], $pets["pet_name"], $pets["doctor"], $pets["observations"], $pets["date"]);

            array_push($petsList, $petsItem);
        }
        return $petsList;
    }

    public function getId(){
        return $this->id;
    }

    public function getDoctor(){
        return $this->doctor;
    }

    public function getPetName(){
        return $this->pet_name;
    }

    public function getObservations(){
        return $this->observations;
    }

    public function getDate(){
        return $this->date;
    }
}

?>