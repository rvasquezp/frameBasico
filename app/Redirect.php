<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 07/09/2016
 * Time: 11:32 PM
 */

namespace App;


class Redirect
{
    public static function to($ruta = null)
    {
        if (!is_null($ruta)) {
            header("Location: " . SITE_URL . $ruta);
        } else {

            header("Location: " . SITE_URL);
        }
    }
}