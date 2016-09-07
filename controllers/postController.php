<?php

/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/09/2016
 * Time: 05:55 PM
 */
class postController extends \App\Controller
{
    private $_post;
    public function __construct()
    {
        parent::__construct();
        $this->_post = $this->loadModel('post');

    }
    public function index()
    {
        $this->_view->posts = $this->_post->getPosts();
        $this->_view->renderizar('index');
    }
}