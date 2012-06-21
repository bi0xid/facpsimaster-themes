<?php if(bp_gallery_has_medias()):?>

		<?php while(bp_gallery_medias()):bp_gallery_the_media() ;?>
			
			<div class='media' id="gallery_media_<?php bp_media_id();?>">
				<div class="media-content">
					<h3 class="media-title"><?php  bp_media_title();?></h3>
					<a href="<?php bp_media_permalink();?>"><?php bp_media_html();?></a>
					<br class="clear" />
					
					<p class="media-description"><?php  bp_media_description();?></p>
					<?php //bp_gallery_image_edit_form($images_template->image->id,false);?>
					
					<div class='edit-delete'><a href="<?php bp_media_permalink();?>" class='mcomments'><?php _e("comments","bp-gallery");?>(<?php global $medias_template; echo get_activity_comment_count($medias_template->media);?>)</a>
					<?php global $bp; if(user_can_delete_gallery($bp->loggedin_user->id,$bp->gallery->current_gallery)):?>
					<a href="<?php bp_media_edit_link()?> " class='edit'>[<?php _e("edit","bp-gallery");?>]</a><a href="<?php bp_media_delete_link();?>" class='delete'>[x]<?php _e("remove","bp-gallery");?></a>
					<?php endif;?>
					</div>
					</div>
					<?php
					
					gallery_media_editable_content($medias_template->media);
					
					
					
					?>
			</div>
		
			<?php endwhile;?>
			<br class="clear" />
		<?php //bp_gallery_medias_pagination_count();?>
		<?php //bp_gallery_medias_pagination_links();?>
		

	<?php else: ?>

		<div id="message" class="info">
			<p><?php _e( 'Sorry, this Gallery does not have an image.', 'buddypress' ) ?></p>
		</div>

	<?php endif;?>


