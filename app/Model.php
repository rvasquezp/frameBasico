<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:14 PM
 */

namespace App;


class Model
{
    protected $_db;

    public function __construct()
    {
        $this->_db = new DataBase();
    }

    

}