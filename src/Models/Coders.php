<?php

namespace App\Models;

use App\Database;

class Coders {

    
    private int $id;
    private string $Pet;
    private string $specie;
    private string $Dr;
    private string $Date;
    private string $Observations;


    private $datebase;
    private $table ="Vetcode";

    public function __construct(int $id = null, string $Pet = '',string $specie = '', string $Dr = '', $Date = '', $Observations = ''){

        $this->id = $id;
        $this->Pet = $Pet;
        $this->specie =$specie;
        $this->Dr = $Dr;
        $this->Date = $Date;
        $this->Observations = $Observations;

        if($this->database){
            $this->database = new Database;
        }
    }


    public function all(){

        $query = $this->database->mysql->querry("select * from {$this->table}");

        $codersArray = $query->fetchAll();

        $coderList = [];

        foreach ($codersArray as $coders) {

            $codersItem = new Coders ($coders["id"],$coders["Pet"], $coders["specie"], $coders["Dr"], $coders["Date"], $coders ["Observations"]);

            array_push($coderList, $codersItem);
        }

        return $coderList;
    }

    public function getId(){
        return $this->id;
    }

    public function getPet(){
        return $this->Pet;
    }

    public function getspecie(){
        return $this->specie;
    }

    public function getDr(){
        return $this->Dr;
    }

    public function getDate(){
        return $this->Date;
    }

    public function getObservations(){
        return $this->Observations;
    }

}