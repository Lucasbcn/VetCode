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

        $this->index();
    }

    public function index(){
        $pet = new Pets;
        $pets = $pet->all();

        new View("petList",["pet"=>$pets]);
    }

    public function delte($id){
        $petHelper = new Pets();
        $pet = $petHelper->findById($id);
        $coder->delete();

        $this->index();
    }
}