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









//$thumbnail = get_field('thumbnail', $term->taxonomy . '_' . $term->term_id);



foreach ($chiliTypes as $chiliType ):

$chiliMeta = get_fields($chiliType);
$chiliExternalURL = $chiliMeta['external_url'];
$chiliAttachementID = $chiliMeta['bild']['ID'];

?>



<article>

	<div class="entry-content">
		<div class="card">

			<header class="entry-header">
				<h2><?php echo $chiliType->name;?></h2>
			</header><!-- .entry-header -->	
			
	 		<div class="image-container">
	 			
	 			<a href="<?=$chiliAttachementID?>" target="_blank">
	 				<img src="<?=wp_get_attachment_image_url($chiliAttachementID, 'medium')?>" />
	 			</a>	
	 		</div>	

		</div>
	</div>	

<?php endforeach; ?>

</article>

