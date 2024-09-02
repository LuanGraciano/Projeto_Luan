<?php

namespace luan\clube\Models;

use luan\clube\Helpers\Database\Database;

abstract class AbstractModel
{
    public $table;

    protected Database $database;

    protected $connect;

    public function __construct()
    {
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }

    public function create($data)
    {
        echo "Metodo para criação de uma data";
    }
public function find0ne()
{

}
public function 


}
