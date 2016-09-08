<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/09/2016
 * Time: 11:14 AM
 */

namespace App;


class DataBase extends \PDO
{
    /**
     * DataBase constructor.
     */
    public function __construct()
    {
        parent::__construct("mysql:host=".DB_HOST.';charset='.DB_CHAR. ";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
    }
    
    
}