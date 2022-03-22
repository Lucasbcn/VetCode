<?php

namespace App\Models;

use App\Database;

class Coders {

    
    private int $id;
    private string $coder;
    private string $issue;
    private string $date_time;


    private $datebase;
    private $table ="Vetcode";

    public function_construct(){

        if($this->database){
            $this->database = new Database;
        }
    }


    public function all(){

        $querry = $this->database->mysql->querry("select * from {$this->table}");

    }

}