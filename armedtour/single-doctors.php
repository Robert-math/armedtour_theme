<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Armedtour
 */

get_header();
?>

	<main id="primary" class="main">
        <div class="doctor__single__container">
			
			<?php
				while ( have_posts() ) :
					the_post();

				the_title( '<h1 class="doctor__title">', '</h1>' );
				 //Loop for doctor specialties
				$specialties =  get_the_terms( get_the_ID(), 'specialties' );
				echo '<div class = "doctor__spec">';
				$spec_first = false;
				foreach ($specialties as $spec) {
					if(!$spec_first){echo "<a href='".get_home_url(). "/" .$spec->slug."'>" . $spec->name . '</a>';}
					if($spec_first){
						echo "<a>/</a>";
						echo "<a href='".get_home_url(). "/" .$spec->slug."'>" . $spec->name . '</a>';
					}
					$spec_first = true;
				}
				echo '</div>';
				?>

				<div class="doctor__grid">
					<div class="doctor__grid_item">
						<?php armedtour_post_thumbnail(); ?>
					</div>
					<div class="doctor__grid_item">
						<div class="doctor__custom">
							<div class="doctor__custom__label"><?php echo get_field_object('working_hours')['label'];?></div>
							<div class="doctor__custom__value"><?php the_field('working_hours')?> </div>
						</div>
						<div class="doctor__custom">
							<div class="doctor__custom__label"><?php echo get_field_object('phone_number')['label'];?></div>
							<div class="doctor__custom__value"><?php the_field('phone_number')?> </div>
						</div>
						<div class="doctor__custom">
							<div class="doctor__custom__label"><?php echo get_field_object('email')['label'];?></div>
							<div class="doctor__custom__value"><?php the_field('email')?> </div>
						</div>
					</div>

				</div>
				
				
			<?php	
				the_content();
			endwhile;
			?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
