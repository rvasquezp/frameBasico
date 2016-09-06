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
        try{
            $modelo= $this->loadModel('user');
            $this->_view->user = $modelo->getUser();
            $this->_view->renderizar('post');
        }catch (Exception $e){
           die($e->getMessage());
        }

    }
}