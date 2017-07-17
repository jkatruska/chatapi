<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 17.7.17
 * Time: 12:36
 */

namespace Core;


class Singletone
{
    private static $instance = null;

    public function getInstance(){
        return !empty(self::$instance) ? self::$instance : self::$instance = new static();
    }
}