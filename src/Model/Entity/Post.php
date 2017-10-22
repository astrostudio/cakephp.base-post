<?php
namespace Base\Post\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity {

    private $__meta=[];
    private $__metaInit=false;

    private function __initMeta(){
        if(!$this->__metaInit){
            if(isset($this->post_meta)){
                foreach($this->post_meta as $meta){
                    $this->__meta[$meta->name]=$meta->body;
                }
            }

            $this->__metaInit=true;
        }
    }

    public function getMeta($name,$body=null){
        $this->__initMeta();

        if(is_array($name)){
            $bodies=[];

            foreach($name as $n=>$b){
                if(is_int($n)){
                    $bodies=$this->getMeta($b);
                }
                else {
                    $bodies=$this->getMeta($n,$b);
                }
            }

            return($bodies);
        }

        return(isset($this->__meta[$name])?$this->__meta[$name]:$body);
    }

    public function getMetaByPrefix($prefix){
        $bodies=[];
        $prefixLen=mb_strlen($prefix);

        foreach($this->__meta as $name=>$body){
            if(mb_substr($name,0,$prefixLen)==$prefix){
                $bodies[$name]=$body;
            }
        }

        return($bodies);
    }

}