<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
global $location;
$chiliTypes = get_the_terms($location->ID, 'Chilitype');

?>


<article class= "card-holder  col-md-6" >

	<div class="entry-content">
		<div class="card">

			<header class="entry-header">
				<h2><?php echo $location->post_title;?></h2>
			</header><!-- .entry-header -->	
			
			<div class="content-container">
				<div class="location-desc">
					<?php echo $location->post_content;?>
				</div>
				
				<div class="chili-types">
					<h3>Produzierte Sorten</h3>
					<ul>
					<?php foreach ($chiliTypes as $chiliType): ?>
						
							<li><?php echo $chiliType->name;?></li>
					<?php endforeach; ?>
					</ul>
				</div>

				

			</div>

	 		<div class="image-container"> 			

	 			<a href="<?=get_the_post_thumbnail_url($location->ID, 'large')?>" data-rel="lightbox-image-0" data-rl_title="" data-rl_caption="" title="">
	 				<img class="" src="<?=get_the_post_thumbnail_url($location->ID, 'locationpicture')?>" />
	 			</a>	
	 		</div>	
		</div>
	</div>	

</article>

