<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
global $partner;
$partnerMeta = get_fields($partner->ID); 

// different layout for home and "partneren"
$columnwidth = 'partner-col card-holder' . ' ' . (is_front_page() ? 'col-sm-3' : 'col-sm-6');
$partnertype =  (is_front_page() ? 'smallpartnerLayout' : 'bigpartnerLayout');

?>


<article class= " <?=$columnwidth . ' ' . $partnertype?>" >

	<div class="entry-content">
		<div class="card">

			<header class="entry-header">
				<h2><?php echo $partner->post_title;?></h2>
			</header><!-- .entry-header -->	
			
	 		<div class="image-container">
	 			
	 			<a href="<?=$partnerMeta["partner_url"]?>" target="_blank">
	 				<img src="<?=get_the_post_thumbnail_url($partner->ID, 'medium')?>" />
	 			</a>	
	 		</div>	

		</div>
	</div>	

</article>

