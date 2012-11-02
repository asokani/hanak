<?php
/*
Template Name: Galerie
*/

get_header(); ?>

<div id="main">
    <div class="panel gallery">
        <h1>Galerie</h1>
        <h2>Stáhněte si fotky</h2>
        <div class="panel inner clearfix">
            <ul class="clearfix">
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery1_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery2_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery3_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery4_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li><!--
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5_small.jpg" width="239" height="186" title="" alt="" />
                        </a>
                    </div>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery5_large.jpg" class="download"><span><em>Stáhnout velké foto</em></span></a>
                </li>-->
                <li class="clearfix">
                    <div class="image">
                        <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery6.jpg">
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
    <div class="panel">
        <div class="panel inner clearfix">
            <p class="motto">Jaké je to na akcích</p>
            <div class="scroller actions" data-for="actions-switch">
                <div class="screen clearfix">
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/01.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/01_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/02.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/02_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/03.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/03_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/04.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/04_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/05.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/05_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/06.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/06_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/07.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/07_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/08.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/08_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/09.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/09_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/10.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/10_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/11.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/11_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/12.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/12_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/13.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/13_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/14.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/14_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/15.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/15_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/16.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/16_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/17.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/17_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/18.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/18_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/19.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/19_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/20.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/20_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/21.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/21_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/22.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/22_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/23.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/23_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/24.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/24_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/25.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/25_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/26.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/26_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/27.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/27_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/28.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/28_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/29.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/29_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/30.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/30_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/31.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/31_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/32.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/32_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/33.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/33_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/34.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/34_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/35.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/35_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/36.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/36_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/37.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/37_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/38.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/38_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/39.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/39_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/40.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/40_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/41.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/41_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/42.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/42_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/43.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/43_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/44.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/44_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/45.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/45_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/46.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/46_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/47.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/47_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/48.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/48_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/49.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/49_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/50.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/50_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/51.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/51_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="view">
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/52.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/52_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/53.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/53_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                        <div class='col third'>
                            <div class='content'>
                                <div class='image'><a href='<?php echo get_template_directory_uri(); ?>/images/akce/54.jpg'> <img
                                        src='<?php echo get_template_directory_uri(); ?>/images/akce/54_small.jpg' width='239'
                                        height='186' title='' alt=''/> </a></div>
                            </div>
                        </div>
                    </div>
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