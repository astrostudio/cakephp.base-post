<?php
namespace Base\Post\Model\Table;

use Cake\ORM\Table;

class PostMetaTable extends Table {

    public function initialize(array $config){
        $this->table('post_meta');
        $this->primaryKey(['post_id','id']);
        $this->belongsTo('Post');
        $this->addBehavior('Base.Locale',['fields'=>['body']]);
    }

}