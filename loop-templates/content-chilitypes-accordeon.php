<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
global $chiliTypes;
global $location;
global $singleLocation;
global $chiliType;

$args = array(
	'post_type'  => 'domi_location_cpt',
	'numberposts' => -1,
	'post_status' => 'publish', 
	'orderby' => 'menu_order', 
	'order' => 'ASC', 

);


$location = get_posts( $args );?>




	<div class="accordion custom-accordion" id="accordion">
		<?php $i = 1;

		// go through the location, this is the header/ title data only
		foreach ($location as $singleLocation ):?>

	  <div class="card-wrapper">
	    <div class="card-header" id="heading-<?=$i?>">
	      <h2 class="mb-0">
	        <div class="accordion-buttton-holder" data-toggle="collapse" data-target="#collapse-<?=$i?>" aria-expanded="true" aria-controls="collapse-<?=$i?>">
		        <button class="custom-accordion-button btn btn-link" >
		          <?php echo $singleLocation->post_title; ?>
		        </button>
				<i class="fas fa-angle-down"></i>
			</div>	

	      </h2>
	      
	    </div>

	    <div id="collapse-<?=$i?>" class="collapse show" aria-labelledby="heading-<?=$i?>" data-parent="#accordion">
	      <div class="card-body">

			<?php 
				$chiliTypes = get_the_terms($singleLocation->ID, 'Chilitype' );
				
				// go through the chili types, this is the main data
				foreach ($chiliTypes as $chiliType ):

				$chiliMeta = get_fields($chiliType);
				$chiliExternalURL = $chiliMeta['chili_Tax_external_URL'];
				$chiliAttachementID = $chiliMeta['chili_Tax_img']['ID'];
				$chiliDegree = $chiliMeta['chili_Tax_degree'];

				?>



				<article>

					<div class="entry-content">
						<div class="card">

							<header class="entry-header">
								<h2><?php echo $chiliType->name;?></h2>
							</header><!-- .entry-header -->	
							
					 		<div class="image-container">
					 			<a href="<?=$chiliExternalURL?>" target="_blank">
					 				<img src="<?=wp_get_attachment_image_url($chiliAttachementID, 'medium')?>" />
					 			</a>	
					 		</div>	

					 		<div class="spicy-degree-container">

					 			<?php
									$active = get_field('options_spicy_active', 'option');
									$active = $active['url'];
									
									$inactive = get_field('options_spicy_inactive', 'option');										
									$inactive = $inactive['url'];
								

									for ($i = 1; $i <= $chiliDegree; $i++) {

										$active = get_field('options_spicy_active', 'option');
										$active = $active['url'];	?>
										<img src="<?=$active?>" />
										
	
									<?php
									}
					 			?>
					 			

					 			<?php
									
									for ($i = 1; $i <= (10 - $chiliDegree); $i++) {

											?>
										<img src="<?=$inactive?>" />										
	
									<?php
									}
					 			?>					 			
					 		</div>						 		

						</div>
					</div>	

				<?php endforeach; ?>

				</article>											

	      </div>	<!-- card-body -->					     
	    </div>	<!-- collapse -->					     
	  </div>	<!-- card -->					     

		
			<?php 
				$i = $i+1;
				endforeach;
			?>
		</div> <!-- accordeon-->




