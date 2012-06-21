<?php get_header() ?>

	<div id="content">
		<div class="padder">

		<form action="" method="post" id="galleries-directory-form" class="dir-form">

			<h3><?php _e( 'Gallery Directory', 'bp-gallery' ) ?></h3>

			<?php do_action( 'bp_before_directory_gallery_content' ) ?>
                        <div class="item-list-tabs">
				<ul>
					<li class="selected" id="gallery-all"><a href="<?php bp_root_domain() ?>"><?php printf( __( 'All Galleries (%s)', 'bp-gallery' ), bp_get_total_gallery_count_for_dir() ) ?></a></li>

					<!--<?php if ( is_user_logged_in() && function_exists( 'bp_get_total_gallery_count' ) && bp_get_total_gallery_count( null,null,array('public') ) ) : ?>
						<li id="members-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_FRIENDS_SLUG . '/my-friends/' ?>"><?php printf( __( 'My Friends (%s)', 'buddypress' ), bp_get_total_friend_count( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>
					-->
					<?php do_action( 'bp_members_directory_member_types' ) ?>
					<!--
					<li id="members-order-select" class="last filter">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select>
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="newest"><?php _e( 'Newest Registered', 'buddypress' ) ?></option>

							<?php if ( bp_is_active( 'xprofile' ) ) : ?>
								<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>
							<?php endif; ?>

							<?php do_action( 'bp_members_directory_order_options' ) ?>
						</select>
					</li> -->
				</ul>
			</div><!-- .item-list-tabs -->

			<div id="galleries-dir-list" class="gallery dir-list">
				<?php locate_template( array( 'gallery/gallery-loop.php' ), true ) ?>
			</div><!-- #galleries-dir-list -->

			<?php do_action( 'bp_directory_gallery_content' ) ?>

			<?php wp_nonce_field( 'directory_galleries', '_wpnonce-gallery-filter' ) ?>

			<?php do_action( 'bp_after_directory_galleries_content' ) ?>

		</form><!-- #galleries-directory-form -->

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_footer() ?>