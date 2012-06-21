<div class="item-list-tabs no-ajax" id="subnav">
<ul>
<?php bp_group_gallery_admin_tabs(); ?>
</ul>
</div>
<div class="gnav"><?php bp_gallery_bcomb();?>	</div>
<?php //do_action( 'bp_before_gallery_content' ) ?>
	<div id="galleries">
		<?php if(bp_has_galleries()):?>
				
			<?php while(bp_galleries()):bp_the_gallery() ;global $bp;?>
			
				
				<div class="gallery-actions">
				<?php if ( user_can_delete_gallery($bp->loggedin_user->id,bp_get_gallery_id())): ?>
					<a href="<?php bp_gallery_edit_link();?>"><?php _e("Edit This gallery","bp-gallery");?></a>|
				<?php endif;?>
				<?php if(groups_is_user_member($bp->loggedin_user->id,$bp->groups->current_group->id)):?>
				<a href="<?php echo  bp_get_media_upload_link();?>" class='upload'><?php _e("Upload");?></a><br />
				<?php endif;?>
				
				</div>
				
				
			<?php 	locate_template( array( '/gallery/single/media/media-loop.php' ), true );?>
						<br class="clear" />	
		
		<?php endwhile;?>
			
		<?php bp_gallery_pagination_count();?><br />
		<?php   bp_gallery_pagination();?><br />
	<?php else:?>
	<p><?php _e("Perhaps! the Gallery does not exist or You don't have adequate permissions to view them.");?></p>
	<?php //bp_gallery_create_button();?>
	<?php endif;?>
	<br class="clear" />
</div>