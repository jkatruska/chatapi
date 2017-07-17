<?php

/**
 * Created by PhpStorm.
 * User: academy
 * Date: 17.7.17
 * Time: 12:01
 */

use Core\Model;

class User extends Model
{
    protected $table = "user";

    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}