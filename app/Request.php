<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:10 PM
 */

namespace App;


class Request
{
    private $_controller;
    private $_method;
    private $_args;

    public function __construct()
    {
        if(isset($_GET['url'])){
            $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
            $url = array_filter(explode('/',$url));
            $this->_controller = strtolower(array_shift($url));
            $this->_method = strtolower(array_shift($url));
            $this->_args = $url;
        }

        if(empty($this->_controller)){
            $this->_controller = DEFAULT_CONTROLLER;
        }

        if(empty($this->_method)){
            $this->_method = 'index';
        }
        if(empty($this->_args)){
            $this->_args = array();
        }
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->_controller;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->_method;
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return $this->_args;
    }

}