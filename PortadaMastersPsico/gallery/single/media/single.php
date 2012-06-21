<div id="medias">
		<?php if(bp_gallery_has_medias()):?>

			<?php while(bp_gallery_medias()):bp_gallery_the_media() ;?>
			<?php previous_gallery_media_link("<span class='prev'>&laquo; %link </span>");?>
			<?php next_gallery_media_link("<span class='next'>%link &raquo;</span>");?>
			<br class="clear" />
				<div class='sing-media' id="gallery_media_<?php bp_media_id();?>">
				<h3 class='media-title'><?php  bp_media_title();?></h3>
				<a href="<?php bp_media_permalink();?>"><?php bp_media_html();?></a>
				
				<p><?php  bp_media_description();?></p>
				
			
				<!--<p class='edit-delete'><a href="<?php bp_media_permalink();?>" class='view'>View</a><a href="<?php // bp_the_image_edit_link();?> " class='edit'>Edit</a><a href="<?php //bp_the_image_delete_link();?>" class='delete'>Delete</a></p>
			-->
			 </div><!-- end of single media div -->
			
		<!-- for media comments -->
			<div class="activity  single-media">
			<?php include( locate_template( array( 'gallery/single/media/activity.php' ), false ) ) ?>
			</div>
	<?php endwhile;?>
		
		

	<?php else: ?>

		<div id="message" class="info">
			<p><?php _e( 'Sorry, this Gallery does not have an image.', 'bp-gallery' ) ?></p>
		</div>

	<?php endif;?>

<br class="clear" />
<div id="navigation">
<?php //previous_gallery_link();?>
<?php //next_gallery_link();?>
</div>
</div><!-- end of medias -->
			
