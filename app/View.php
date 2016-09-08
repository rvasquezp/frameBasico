<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:12 PM
 */

namespace App;


class View
{
    protected $_controller;
    protected $_js;
    /**
     * View constructor.
     * @param Request $peticion
     */
    public function __construct(Request $peticion)
    {
        $this->_controller = $peticion->getController();
        $this->_js = array();
    }

    public function renderizar($vista, $item = false)
    {
        $_menu = array(
            array(
                'id' => 'index',
                'titulo' => 'Inicio',
                'url' => SITE_URL
            ),
            array(
                'id' => 'post',
                'titulo' => 'Post',
                'url' => SITE_URL . '/post'
            ),
            array(
                'id' => 'About',
                'titulo' => 'About',
                'url' => SITE_URL . '/index/post'
            )
        );

        $_layoutParams = array(
            'ruta_css' => SITE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_js'  => SITE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/js/',
            'ruta_img' => SITE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/img/',
            'js' => $this->_js,
            'menu' => $_menu
        );

        $rutaVista = ROOT . 'views' . DS . $this->_controller . DS . $vista . ".phtml";
        if (is_readable($rutaVista)) {
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . "header.php";
            include_once $rutaVista;
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . "footer.php";
        } else {
            throw new \Exception("error de vista");
        }
    }

    public function setJs(array $archivos){
        if(count($archivos)){
            foreach ($archivos as $archivo):
                $this->_js[] = SITE_URL.'views/'.$this->_controller.'/js/'.$archivo.'.js';
            endforeach;
        }
    }
}