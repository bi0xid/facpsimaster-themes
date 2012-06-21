<form  id="gallery_media_upload_form" action="<?php bp_gallery_media_upload_form_action();?>" method="post" enctype="multipart/form-data">
			<div id="from-my-comuter">
			<div class="guploading" style="display:none;"></div>
			<input type="hidden" name="auth_cookie" value="<?php if ( is_ssl() ) echo $_COOKIE[SECURE_AUTH_COOKIE]; else echo $_COOKIE[AUTH_COOKIE]; ?>" id="auth_cookie" />
			<?php wp_nonce_field( 'save_gallery_media','_wpnonce-save-gallery-image' ) ?> 
			<br />
			<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

			<input type="file" name="file" id="file" class="validate[required]" />
			<br />
			<p><?php 
			if(bp_is_single_gallery()):?>
			<input type="hidden" name="galleries-list" id="galleries-list" value="<?php echo bp_get_single_gallery_id();?>" />
			<?php else:
			echo bp_list_galleries_dropdown();
			endif;
			?>
            </p>
			<div id="swfupload-control">
			<p id="queuestatus" ></p>
			<ol id="log"></ol>
		</div>
			<p><input type="submit" name="save-media" id="bulk_upload_media_submit" value="Upload & Save"> 
			
		</div>
		<div class="update_media_upload" id="update_media_upload">
		
		</div>
		<br class="clear" />
	</form>