<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armedtour
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Armedtour</title>
	<?php wp_head();?>
    </head>
    <body>
        <div class="wrapper">
        <header class="header">
<div class="header__fixed">
    <div class="container">
        <div class="header__body">
        <div class="header__burger ">
                <span></span>
        </div>   
		<?php
		if(function_exists('the_custom_logo')){
            the_custom_logo();
                 }
        ?>
            
            <nav class="header__menu">
                <div class="header__list">
				<?php wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class' => 'header__list1',
                                ));?>
                </div>
            </nav>

            <a class="header__search" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="">
                               
            </a>
            <div class="header__search__content">
                       <div class="header__search__container">
                          <form method="get" action="<?php print site_url();?>">
                                <input type="text" name="s" placeholder="Search" class="header__searchtext">
                                 <input type= "submit" value="Search" class="header__searchbutton">
                             </form>
                         </div>
            </div>     
            
            <div class="header__socialmenu">
                <a href="<?php echo get_theme_mod('footer_url1') ?>" class="header__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_icon.webp" alt=""></a>
                <a href="<?php echo get_theme_mod('footer_url2') ?>" class="header__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_icon.webp" alt=""></a>
                <a href="<?php echo get_theme_mod('footer_url3') ?>" class="header__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_icon.webp" alt=""></a>
                <a href="<?php echo get_theme_mod('footer_url4') ?>" class="header__social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsup_icon.webp" alt=""></a>
            </div>
            
        </div>
    </div>
</div>

</header>