<?php

namespace App\Controllers;

use App\Models\Pets;
use App\Core\View;

class PetController {
    
    public function __construct()
    {   
        if(isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $this->delete($_GET["id"]);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"] == "create")){
            $this->create();
            return;
        }
        
        if(isset($_GET["action"]) && ($_GET["action"] == "store")){
            $this->store($_POST);
            return;
        }

        $this->index();
    }

    public function index(){
        $pet = new Pets;
        $pets = $pet->all();

        new View("petList",["pet"=>$pets]);
    }

    public function delete($id){
        $petHelper = new Pets();
        $pet = $petHelper->findById($id);
        $pet->delete();

        $this->index();
    }

    public function create(){
        new View("newDate");
    }

    public function store(array $request){
        $newPet = new Pets(null, $request["pet_name"], $request["species"], $request["doctor"], $request["date"], $request["observations"]);
        $newPet->save();

        $this->index();
    }
}