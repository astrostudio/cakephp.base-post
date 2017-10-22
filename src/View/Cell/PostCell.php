<?php
namespace Base\Post\View\Cell;

use Cake\View\Cell;
use Cake\Utility\Hash;

class PostCell extends Cell {

    public function display($id,array $options=[]){
        $this->loadModel('Base/Post.Post');

        $post=$this->Post->load($id);

        $this->set('post',$post);
    }

    public function displayPath($id,array $options=[]){
        $this->loadModel('Base/Post.Post');

        $path=$this->Post->find('path', ['for' => $id]);

        $this->set('path',$path);
        $this->set('separator',Hash::get($options,'separator','/'));
        $this->set('url',Hash::get($options,'url'));
    }

}