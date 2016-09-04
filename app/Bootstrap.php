<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:11 PM
 */

namespace App;


class Bootstrap
{
    public static function run(Request $request){
         $controlador = $request->getController().'Controller';
         $rutaControlador = ROOT.'controllers'.DS.$controlador.'.php';
        if(is_readable($rutaControlador)){
            require_once  $rutaControlador;
            $objControlador = new $controlador;
            $metodo = $request->getMethod();
            $argumentos = $request->getArgs();

            if(!is_callable(array($objControlador,$metodo))) {
                $metodo = 'index';
            }

            if(count($argumentos)){
                call_user_func_array(array($objControlador,$metodo),$argumentos);
            }else{
                call_user_func(array($objControlador,$metodo));

            }

        }else{
            throw new \Exception("error al cargar el controlador");
        }
    }
}