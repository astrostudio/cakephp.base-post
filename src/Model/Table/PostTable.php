<?php
namespace Base\Post\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;

class PostTable extends Table {

    public function initialize(array $config){
        $this->table('post');
        $this->primaryKey('id');
        $this->hasMany('PostMeta');
        $this->addBehavior('Tree');
        $this->addBehavior('Base.Locale',['field'=>['head','body']]);
    }

    public function load($id){
        return($this->find()->contain('PostMeta',function(Query $q){
            $q=$q->find('list');
            return($q);
        })->where(['id'=>$id])->first());
    }


}