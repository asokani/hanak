	<div id="main">
        <div class="panel main">
        </div>
        <div class="panel bar">
            <div class="shadow"></div>
            Dobrý den
        </div>
        <div class="panel undertext">
            Vítejte na mém webu. Věřím, že Vám přinese všechny potřebné informace<br>o mně coby moderátorce a prozradí i pár zajímavostí navíc.
            <ul class="switch">
                <li><a href=""></a></li>
                <li class="selected"><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="panel gray">
            <div class="panel inner clearfix">
                <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 1,
                        'category' => 4)
                    );
                    foreach( $recent_posts as $recent ) {
                ?>
                <div class="col third">
                    <div class="content">
                        <?php
                            $thumbnail = get_the_post_thumbnail($recent["ID"], array(239,126));
                            if ($thumbnail) {
                        ?>
                        <div class="image">
                            <a href="<?php echo get_permalink($recent["ID"]) ?>">
                                <?php echo $thumbnail; ?>
                            </a>
                        </div>
                        <?php } ?>
                        <p class="title"><a href="<?php echo get_permalink($recent["ID"]) ?>"><?php echo esc_attr($recent["post_title"]) ?></a></p>
                        <?php
                            $page_object = get_page($recent["ID"]);
                            $content = $page_object->post_content;
                            $content = strip_tags($content);
                        ?>
                        <p class="text"><?php echo substr($content, 0, 80); ?>...</p>
                        <p class="more" >
                            <a href="<?php echo get_permalink($recent["ID"]) ?>">podrobnosti</a>
                        </p>
                    </div>
                </div>
                <?php } ?>
                <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 2,
                        'category__not_in' => 4)
                    );
                    foreach( $recent_posts as $recent ) {
                ?>
                <div class="col third">
                    <div class="content">
                        <?php
                            $thumbnail = get_the_post_thumbnail($recent["ID"], array(239,126));
                            if ($thumbnail) {
                        ?>
                        <div class="image">
                            <a href="<?php echo get_permalink($recent["ID"]) ?>">
                                <?php echo $thumbnail; ?>
                            </a>
                        </div>
                        <?php } ?>
                        <p class="title"><a href="<?php echo get_permalink($recent["ID"]) ?>"><?php echo esc_attr($recent["post_title"]) ?></a></p>
                        <?php
                            $page_object = get_page($recent["ID"]);
                            $content = $page_object->post_content;
                            $content = strip_tags($content);
                        ?>
                        <p class="text"><?php echo substr($content, 0, 80); ?>...</p>
                        <p class="more" >
                            <a href="<?php echo get_permalink($recent["ID"]) ?>">podrobnosti</a>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="panel">
            <div class="panel inner clearfix">
                <p class="motto">Můj život, víc než moderování</p>
                <div class="scroller actions" data-for="actions-switch">
                    <div class="screen clearfix">
                        <?php
                            $posts = get_pages(array(
                                    'child_of' => 5,
                                    'sort_order' => 'ASC',
                                    'sort_column' => 'menu_order',
                                )
                            );
                            $post_counter = 0;
                            foreach( $posts as $post ) {
                              if ($post_counter % 3 == 0) {
                                  if ($post_counter != 0) echo '</div>';
                                  echo '<div class="view">';
                              }
                        ?>

                            <div class="col third">
                                <div class="content">
                                    <?php
                                    $thumbnail = get_the_post_thumbnail($post->ID, array(239,186));
                                    if ($thumbnail) {
                                        ?>
                                        <div class="image">
                                            <a href="<?php echo get_permalink($post->ID) ?>">
                                                <?php echo $thumbnail; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <p class="title underline"><a href="<?php echo get_permalink($post->ID) ?>"><?php echo esc_attr($post->post_title) ?></a></p>
                                </div>
                            </div>
                        <?php
                                $post_counter++;
                            }
                            echo '</div>';
                        ?>
                    </div>
                </div>

                <ul class="switch" id="actions-switch">

                </ul>
            </div>
        </div>