<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armedtour
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__section footer__section1">
            <div class="section__container">
                <div class="section__grid">
                    <div class="grid__item">
									<?php
						if(function_exists('the_custom_logo')){
							the_custom_logo();
								}
						?>
                    </div>
                    <div class="grid__item">
                        <div class="footer__text"><?php echo get_theme_mod('footer_text') ?></div>
                    </div>
                    <div class="grid__item">
                        <div class="footer__socialmenu">
                            <a href="<?php echo get_theme_mod('footer_url1') ?>" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_icon.webp" alt=""></a>
                            <a href="<?php echo get_theme_mod('footer_url2') ?>" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_icon.webp" alt=""></a>
                            <a href="<?php echo get_theme_mod('footer_url3') ?>" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_icon.webp" alt=""></a>
                            <a href="<?php echo get_theme_mod('footer_url4') ?>" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsup_icon.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__section footer__section2">
            <div class="section__container">
                <div class="section__grid">
                    <div class="grid__item grid__item1">
                        <nav class="footer__menu">
                            <div class="footer__list">
							<?php wp_nav_menu(array(
                                    'theme_location' => 'menu-2',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class' => 'footer__list1',
                                ));?>
                            </div>
                        </nav>
                    </div>
                    <div class="grid__item grid__item2">
                        <div class="footer__menu2">
						<?php wp_nav_menu(array(
                                    'theme_location' => 'menu-3',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class' => 'footer__list2',
                                ));?>
                        </div>
                    </div>
                    <div class="grid__item grid__item3">
                        <div class="footer__pnumber"><?php echo get_theme_mod('phone_number') ?></div>
                        <div class="footer__callblock">
                            <div class="callblock__header"><?php echo get_theme_mod('phone_title') ?></div>
                            <div class="callblock__text"><?php echo get_theme_mod('phone_text') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__section footer__section3">
            <div class="section__container">
                 <div class="footer__copy"><?php echo get_theme_mod('copyright') ?></div>
                 <button class="footer_gotop"><?php echo get_theme_mod('gotop_button') ?></button>
            </div>
        </div>
    </div>
</footer>
        </div>
        <script src="./js/script.js"></script>
		<?php wp_footer();?>
    </body>
</html>
