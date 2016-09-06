<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 04:38 PM
 */



class userModel extends \App\Model
{
    public function getUser(){
        return $this->_db->query("Select * from posts")->fetchAll();
    }
}