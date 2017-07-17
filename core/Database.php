<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 17.7.17
 * Time: 12:29
 */

namespace Core;


class Database extends Singletone
{
    private $connection = null;

    protected function __construct()
    {
        //TODO: load variables from file
        $dsn = 'mysql:dbname=chatApi;host=192.168.33.10';
        $user = 'strator';
        $password = '123456';

        $this->connection = new PDO($dsn,$user,$password);
    }
}