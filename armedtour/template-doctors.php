<?php
/**
Template Name: Doctors template
 */

get_header();
?>

	<main id="primary" class="main">
		
        <?php the_content(); ?>

		<div class="archive__container">
			<?php 
					//Get all departments and loop throuh them to render 
					$departments = get_terms('departments','hide_empty=0');
					foreach($departments as $dep){
						
							echo '<h2 class = "archive__department__title">'. $dep->name . '</h2>';
							echo '<div class ="archive__department__container" >';
							
							
							//Query for doctors to loop 
							$args=array(
							'post_type' => 'doctors',
							'post_status' => 'publish',
							);
							$new = new WP_Query($args);
							
							
							while ( $new->have_posts() ) : $new->the_post();

							//Check if post department is equal to current department
							$doctor_department =  get_the_terms(get_the_ID(),'departments');
							
							if($doctor_department[0]->slug == $dep->slug){
								echo '<div class="archive__department__item">';
								
								the_title( '<h3 class="doctor__title">', '</h3>' );
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
									armedtour_post_thumbnail();
									?>
											<div class="doctor__custom">
												<div class="doctor__custom__label"><?php echo get_field_object('working_hours')['label'];?></div>
												<div class="doctor__custom__value"><?php the_field('working_hours')?> </div>
											</div>
										<div class="doctor__custom">
											<div class="doctor__custom__label"><?php echo get_field_object('phone_number')['label'];?></div>
											<div class="doctor__custom__value"><?php the_field('phone_number')?> </div>
										</div>
									<?php
									
								echo '</div>';
							}
							endwhile;
							
							echo '</div>';
						}
			?>
		</div>

	</main><!-- #main -->

<?php

get_footer();
?>