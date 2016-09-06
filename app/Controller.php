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

    public function __construct()
    {
        $this->_view = new View(new Request());
    }
    abstract public function index();
}