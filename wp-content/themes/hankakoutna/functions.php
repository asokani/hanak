<?php
if ( function_exists( 'add_theme_support' ) )
{
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800,600, true);
	add_image_size( 'main-large-thumb', 239, 186, true);
	add_image_size( 'widescreen-thumb', 700, 9999);
}

add_filter('comment_form_default_fields', 'hanakoutna_comments');

function hanakoutna_comments($arg) {
    $arg['url'] = '';
    return $arg;
}


function hanakoutna_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
    <div class="comment clearfix" id="comment-<?php comment_ID(); ?>">
        <p class="name"><?php comment_author(); ?></p>
        <p class="date"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></p>
        <div class="text">
        <?php comment_text() ?>
        </div>
        <div>
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
    <?php
}


