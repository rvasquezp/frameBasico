<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 01:46 PM
 */

require_once "vendor/autoload.php";

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",realpath(dirname(__FILE__)).DS);
define("APP_PATH",ROOT.'app'.DS);

require_once APP_PATH.'Config.php';
try{
    App\Bootstrap::run(new App\Request());
}catch (Exception $e){
    die($e->getMessage());
}
