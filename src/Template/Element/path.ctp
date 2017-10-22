<?php
if(empty($path)){
    return;
}

$separator=!empty($separator)?$separator:'';
$url=isset($url)?$url:null;
?>
<div class="base-post-path">
    <?php
    $s='';

    foreach($path as $item){
        echo $s;
    ?>
        <span class="base-post-path-item">
            <?php
            if(isset($url) and !empty($item->slug)){
                echo $this->Html->link($item->head_locale,$url.'/'.$item->slug);
            }
            else {
                echo $item->head_locale;
            }
            ?>
        </span>
    <?php
        $s=$separator;
    }
    ?>
</div>

