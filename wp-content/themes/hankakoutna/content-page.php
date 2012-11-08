<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package WordPress
 */

?>
<script type="text/javascript">
    $(function() {$("header nav li:nth-child(1)").addClass("selected")})
</script>
<div id="main">
        <div class="panel blog">
            <h1 style="margin:0 auto;width: 940px;"><?php the_title(); ?></h1>
            <div class="panel outer post">
                <div class="panel inner clearfix">
                    <div class="detail" style="margin:0;">
                        <div class="text">
                        <?php the_content(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

