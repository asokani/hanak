<?php
/*
Template Name: Blog
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
                <li><a href="/category/pobavilo-me/" title="Pobavilo mě">Pobavilo mě</a></li>
                <li><a href="/category/zajimavosti/" title="Zajímavosti">Zajímavosti</a></li>
            </ul>
        </div>
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'paged' => $paged );
			$wp_query = new WP_Query($args);
		?>
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) { the_post(); ?>

                <div class="panel outer post">
                    <div class="panel inner clearfix">
                        <div class="post">
                            <div class="blog-icons clearfix">
                                <div class="date"><?php the_time(get_option('date_format')); ?></div>
                                <div class="comments">komentářů: <?php echo get_comments_number() ?></div>
                            </div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php
                                $thumbnail = get_the_post_thumbnail($page->ID,  'widescreen-thumb');
                                if ($thumbnail) {
                            ?>
                                    <div class="clearfix">
                                        <div class="image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php echo $thumbnail; ?>
                                            </a>
                                        </div>
                                    </div>
                            <?php } ?>
                            <div class="text">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php ?>
                            <div class="navigation clearfix" style="display: none;">
                                <!--
                                <nav>
                                    <ul>
                                        <li><a href="">1</a></li>
                                        <li class="selected"><span class="circle"></span><span>2</span></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                    </ul>
                                </nav>-->

                                <div class="prev">

                                    <?php previous_posts_link( 'Další <span>&raquo;</span>' ); ?>
                                </div>
                                <div class="next">
                                    <?php next_posts_link( '<span>&laquo;</span> Předchozí' ); ?>
                                </div>
                            </div>
                            <?php ?>

                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>



<?php get_footer(); ?>