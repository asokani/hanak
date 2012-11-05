<div class="comments clearfix">
    <?php if (have_comments()) { ?>
    <p class="count">
        Počet komentářů: <?php echo get_comments_number() ?>
    </p>
    <?php wp_list_comments( array( 'callback' => 'hanakoutna_comment' ) ); ?>
    <?php } ?>
    <?php if ('open' == $post->comment_status) { ?>
    <div id="respond"></div>
    <form class="clearfix" id="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" >
        <p>Vložte komentář</p>
        <div class="name" >
            <input type="text" name="author" />
        </div>
        <div class="email">
            <input type="text" name="email" />
        </div>
        <div class="text">
            <textarea name="comment"></textarea>
        </div>
        <?php comment_id_fields(); ?>
        <div class="submit">
            <a href="#" >Odeslat</a>
        </div>
        <p class="important">Povinné údaje *</p>
    </form>
    <?php } ?>
</div>