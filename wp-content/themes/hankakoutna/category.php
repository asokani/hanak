<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
  */

get_header(); ?>

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
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) { the_post(); ?>
                <div class="panel outer post">
                    <div class="panel inner clearfix">
                        <div class="post">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php
                                $thumbnail = get_the_post_thumbnail($page->ID, array(640,270));
                                if ($thumbnail) {
                            ?>
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail($page->ID, array(640,270)); ?>
                                </a>
                            </div>
                            <?php } ?>
                            <?php the_excerpt(); ?>
                            <!--<div class="navigation clearfix">
                                <nav>
                                    <ul>
                                        <li><a href="">1</a></li>
                                        <li class="selected"><span class="circle"></span><span>2</span></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                    </ul>
                                </nav>
                                <div class="next">
                                    <a href="">Další <span>&raquo;</span></a>
                                </div>
                                <div class="prev">
                                    <a href=""><span>&laquo;</span> Předchozí</a>
                                </div>
                            </div>-->


                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>



<?php get_footer(); ?>