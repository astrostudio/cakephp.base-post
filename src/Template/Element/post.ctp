<?php
if(!isset($post)){
    return;
}
?>
<div class="base-post">
    <?php
    if(!empty($post->head_locale)) {
        ?>
        <h1 class="base-post-head"><?php echo $post->head_locale; ?></h1>
        <?php
    }

    if(!empty($post->body_locale)){
        ?>
        <div class="base-post-body">
            <?php
            echo $post->body_locale;
            ?>
        </div>
        <?php
    }
    ?>
</div>
