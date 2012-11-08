<?php
/*
Template Name: Galerie
*/

get_header(); ?>

<div id="main">
    <div class="panel gallery" style="overflow: hidden;">
        <h1>Galerie</h1>
        <h2>Stáhněte si fotky</h2>
        <div class="panel inner clearfix">
            <ul class="clearfix">
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li><!--
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>-->
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery6.jpg" class="thickbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery6_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery6_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--
    <div class="panel gray player">
        <div class="panel inner clearfix">
            <h2>Podívejte se na video</h2>
            <div class="player">
                <iframe id="ytplayer" type="text/html" width="640" height="360"
                        src="https://www.youtube.com/embed/Zhawgd0REhA"
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>-->

    <div class="panel" style="overflow: hidden;">
        <div class="panel inner clearfix" data-arrow-fix="86">
            <p class="motto">Jaké je to na akcích</p>
            <div class="scroller actions" data-for="actions-switch">
                <div class="screen clearfix">
                <?php
                $newnggShortcodes = new NextGEN_Shortcodes;
                $gallery = $newnggShortcodes->show_gallery( array("id"=>6) );
                preg_match_all('/<a.*<\/a>/isU', $gallery, $matches);
                $images = $matches[0];
                $counter = 0;
                foreach ($images as $image) {
                    if ($counter % 3 == 0) {
                        if ($counter != 0) echo '</div>';
                        echo '<div class="view">';
                    }
                    $image = str_replace('width="200" height="160"', 'width="240" height="192"', $image);
                    echo "<div class='col third'><div class='content'><div class='image'>$image</div></div></div>";
                    $counter++;
                }
                echo "</div>";
                ?>

                </div>
            </div>

            <ul class="switch" id="actions-switch">

            </ul>
        </div>
    </div>
    <div class="panel aboutme bar long">
        <div class="shadow"></div>
        <a href=""  class="portfolio">
            Portfolio ke stažení<br>
            <span>ve formátu PDF</span>
        </a>
    </div>


<?php get_footer(); ?>