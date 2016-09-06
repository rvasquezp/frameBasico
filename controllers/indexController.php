<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:37 PM
 */


class indexController extends \App\Controller
{
    public function index(){
        $this->_view->renderizar('index');
    }
    public function post(){
        $this->_view->renderizar('post');
    }
}