<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 07/09/2016
 * Time: 10:16 PM
 */

namespace App;


class Helpers
{
    public static function getTexto($texto){
        
        if(!empty($texto)){

            return htmlspecialchars($texto,ENT_QUOTES);
        }
        return "";

    }

    public static function getInt($numero){
        if(filter_var($numero,FILTER_VALIDATE_INT)){
            return (int) $numero;
        }
        return 0;
    }
}