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
    
    public function getPost($id){
        return $this->_db->query("Select * from posts WHERE id ={$id}")->fetchAll();
    }

    public function insertPost($titulo, $cuerpo){
        $this->_db->prepare("INSERT INTO posts VALUES (null, ?,?)")->execute(array($titulo,$cuerpo));
    }

    public function actualizarPost($id,$titulo,$cuerpo){
        $this->_db->prepare("UPDATE `posts` SET `titulo`= ? , `cuerpo`= ? WHERE `id` = {$id}")->execute(array($titulo,$cuerpo));
    }
    public function elimiarPost($id){
        $this->_db->query("DELETE FROM `posts` WHERE `id`={$id}");

    }

}