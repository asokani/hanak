<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package WordPress
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<script type="text/javascript">
    $(function() {$("header nav li:nth-child(5)").addClass("selected")})
</script>
<div id="main">
        <div class="panel blog">
            <h1>Blog</h1>
            <div class="panel inner submenu">
                <ul>
                    <li><a href="/category/akce/" title="Akce">Akce</a></li>
                    <li><a href="/category/ladies-movie-night/" title="Ladies Movie Night">Ladies Movie Night</a></li>
                    <li><a href="/category/doporucuji/" title="Doporučuji">Doporučuji</a></li>
                    <li><a href="/category/rozesmalo-me/" title="Rozesmálo mě">Rozesmálo mě</a></li>
                    <li><a href="/category/zajimavosti/" title="Zajímavosti">Zajímavosti</a></li>
                </ul>
            </div>
            <div class="panel outer post">
                <div class="panel inner clearfix">
                    <div class="detail">
                        <h2><?php the_title(); ?></h2>
                        <p class="date"> <?php the_date(); ?></p>
                        <div class="text">
                        <?php the_content(); ?>
                        </div>
                        <?php comments_template(); ?>


                    </div>

                </div>
            </div>
        </div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>