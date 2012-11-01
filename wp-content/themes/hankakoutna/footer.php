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
                        Tel.: 602 611 170<br>
                        Mail: <a href="">hanka.koutna@gmail.com</a><br>
                        <a href="">Facebook</a>
                    </p>
                </div>
                <div class="col">
                    <p class="title">Poslat zprávu</p>
                    <div class="input">
                        <input type="text" />
                    </div>
                    <div class="input">
                        <input type="text" />
                    </div>
                    <div>
                        Povinné údaje *
                    </div>
                </div>
                <div class="col">
                    <div class="textarea">
                        <textarea>

                        </textarea>
                    </div>
                    <div class="submit">
                        <a href="">Odeslat</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="panel black partners">
            <div class="panel inner clearfix">
                <p class="title">Partneři</p>
                <ul class="links">
                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/partners/mohito.png" alt="Mohito" width="155"  height="57" /></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/partners/bikram-yoga.png" alt="Bikram Yoga" width="106"  height="57" /></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/partners/reserved.png" alt="Reserved" width="176"  height="57" /></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/partners/cosmopolitan.png" alt="Cosmopolitan" width="130"  height="57" /></a></li>
                </ul>
                <ul class="switch">
                    <li><a href=""></a></li>
                    <li class="selected"><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
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
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>		
</body>
</html>
