<?php

namespace App\Controllers;

use App\Models\Coders;

class CodersController{

    public function_construct()
    {
        $this->index();
    } 

    public function index(){

        $coder = new Coders;
        $coders = $coder->all();
    }

}


