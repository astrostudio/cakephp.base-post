<?php
if(!isset($post)){
    return;
}

echo $this->element('Base/Post.post',['post'=>$post]);
?>
