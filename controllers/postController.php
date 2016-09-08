<?php
use App\Helpers;

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

    public function nuevo(){
        $this->_view->setJs(array('nuevo'));
        if(isset($_POST['guardar']) and Helpers::getInt($_POST['guardar'])==1){
            $this->_post->insertPost(Helpers::getTexto($_POST['inputTitulo']),Helpers::getTexto($_POST['inputCuerpo']));
            \App\Redirect::to("post/");
        }
        $this->_view->renderizar('nuevo');
    }

    public function editar($id= null){

        if(isset($_POST) and !empty($_POST)){
            $id =Helpers::getInt($_POST['inputId']);
            if(!$id){
                \App\Redirect::to('post');
            }

            if(!$this->_post->getPost($id)){
                \App\Redirect::to('post');
            }
            $this->_post->actualizarPost($id,Helpers::getTexto($_POST['inputTitulo']),Helpers::getTexto($_POST['inputCuerpo']));
            \App\Redirect::to("post");
            
        }elseif (!empty($id)){

            $datosPost = $this->_post->getPost(Helpers::getInt($id));
            if($datosPost){
                $this->_view->datosPost = $datosPost;
                $this->_view->renderizar('editar');
            }else{
                $this->_view->_error = "No se encontro el post solicitado";
                $this->_view->renderizar('post');
            }

        }

    }
    public function eliminar($id){
        $id = Helpers::getInt($id);
        if(!empty($id)){
            $this->_post->elimiarPost($id);
            $this->_view->mensaje = "Post Eliminado Correctamente";
            \App\Redirect::to('post/index');
        }
        else{
            $this->_view->error = "Post Eliminado Correctamente";
            \App\Redirect::to('post/index');
        }


    }
}