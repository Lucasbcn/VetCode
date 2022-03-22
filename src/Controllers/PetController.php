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
        new View("createPet"); //!!!!!!!!!!!!!!!   MIN 31:00:00   ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
    }
}