<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 17.7.17
 * Time: 12:01
 */

namespace Core;


abstract class Model
{
    private $db = null;
    protected function __construct()
    {
        $this->db = Database::getInstance();
    }

    protected function findAll(){
        $result = $this->query("SELECT * FROM {$this->table}");
        return $result;
    }

    protected function findBy(){

    }
}