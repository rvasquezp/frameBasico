<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:09 PM
 */

namespace App;


abstract class Controller
{
    protected $_view;


    /**
     * Controller constructor.
     */

    public function __construct()
    {
        $this->_view = new View(new Request());
    }

    abstract public function index();

    public function loadModel($modelo)
    {
        $modelo = $modelo . 'Model';
        $rutamodelo = ROOT . 'models' . DS . $modelo . '.php';

        if (is_readable($rutamodelo)) {
            require_once $rutamodelo;
            $_modelo = new $modelo;
            return $_modelo;

        } else {
            throw new \Exception();
        }
    }

    public function getLibrary($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . DS . $libreria . '.php';
        if (is_readable($rutaLibreria)) {
                require_once $rutaLibreria;
        }else{
            throw new \Exception("Error al cargar la libreria");
        }
    }
}