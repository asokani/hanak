<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 */
?>
		<div class="panel gray contact">
            <div class="panel inner clearfix">
                <p class="title">Kontakt</p>
                <div class="col">
                    <p class="title">Přímý kontakt</p>
                    <p class="address">
                        Hanka Koutna<br>
                        Tel.: 777 615 681<br>
                        E-mail: <a href="mailto:moderatorka@hankakoutna.cz">moderatorka@hankakoutna.cz</a><br><br>
                        <a href="http://www.facebook.com/HankaKoutnaModeratorka"><img src="http://www.hankakoutna.cz/wp-content/themes/hankakoutna/images/facebook.png" style="margin-right: 10px;" />Facebook</a>
                    </p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="56" title="Kontakt"]'); ?>
            </div>
        </div>
        <div class="panel black partners">
            <div class="panel inner clearfix" data-arrow-fix="-6">
                <p class="title">Partneři</p>
                <div class="scroller" data-for="partners-switch">
                    <div class="screen clearfix">
                        <div class="view">
                            <ul class="links">
                                <li><a href="#" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/mohito.png" alt="Mohito" width="155"  height="57" /></a></li>
                                <li><a href="#" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/bikram-yoga.png" alt="Bikram Yoga" width="107"  height="57" /></a></li>
                                <li><a href="#" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/reserved.png" alt="Reserved" width="155"  height="57" /></a></li>
                                <li><a href="http://www.studio55.cz" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/studio55.png" alt="Siluet" width="154"  height="57" /></a></li>
                            </ul>
                        </div>
                        <div class="view">
                            <ul class="links">
                                <li><a href="#" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/siluet.png" alt="Mohito" width="46"  height="57" /></a></li>
                                <li><a href="http://www.netfinity.cz" onclick="return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/netfinity.png" alt="Siluet" width="125"  height="57" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="switch" id="partners-switch">
                </ul>
            </div>

        </div>
        <footer class="panel red">
            <div class="panel inner clearfix">
                <a href="/" class="logo" title="Hanka Koutná">
                    Hanka Koutná moderátorka
                </a>
                <div class="right">
                    <ul>
						<li><a href="/" title="Úvod">úvod</a></li>
						<li><a href="/par-slov" title="Pár slov">pár slov</a></li>
						<li><a href="/reference" title="Reference">reference</a></li>

						<li><a href="/galerie" title="Galerie">galerie</a></li>
						<li><a href="/blog" title="Blog">blog</a></li>
						<li><a href="/kontakt" title="Kontakt">kontakt</a></li>
                    </ul>
                    <p class="copy">&copy; Copyright 2012, Hanka Koutná</p>
                    <a class="author" href="http://www.netfinity.cz" title="Netfinity Digital Media - vývoj www stránek">Vytvořeno v Netfinity</a>
                </div>
            </div>
        </footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
    <!-- allow onready part 2/2 -->
    <script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/greensock/plugins/CSSPlugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/greensock/easing/EasePack.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/greensock/TweenLite.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>		
</body>
</html>
