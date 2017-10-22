<?php
if(empty($path)){
    return;
}

$separator=!empty($separator)?$separator:'';
$url=isset($url)?$url:null;

echo $this->element('Base/Post.path',['path'=>$path,'separator'=>$separator,'url'=>$url]);
?>
