<?php

namespace App\Controllers;

use App\Models\Coders;
use App\Core\View;

class CodersController{

    public function __construct()
    {
        $this->index();
    } 

    public function index(){

        $coder = new Coders;
        $coders = $coder->all();

        new View("coderList", ["coder" => $coders]);

    }

}


