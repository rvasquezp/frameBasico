<?php

/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/09/2016
 * Time: 05:57 PM
 */
class postModel extends \App\Model
{
    public function getPosts(){
        return $this->_db->query("Select * from posts")->fetchAll();
    }
}