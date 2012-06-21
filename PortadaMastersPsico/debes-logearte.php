<?php
 /*
Template Name: Página Privada
*/
?>

<?php get_header(); ?>
<div id="container">
<div id="contents">
	<div id="content">
	<div class="widget">
	<div class="widgettitle"><?php _e( 'Página privada.', 'buddypress' ) ?></div>
		<div class="widget-content">
				
					<div class="post">
					
						<h2 class="post-title"></h2>
						<p>Para acceder a esta página debes estar logeado, si todavía no eres usuario de la red de los masters de la Facultad de Psicología de la Universidad de Sevilla, ¡regístrate!</p>
						<div class="entry">
							<div class="user-info">
								<?php if(is_user_logged_in()):?>
									<?php bp_loggedin_user_avatar( 'width=20&height=20' ) ?> &nbsp; <?php bp_loggedin_user_link() ?> / <?php bp_log_out_link() ?>
	         					<?php else:?>
									<a href="<?php bloginfo('home'); ?>/wp-login.php" id="login">Login</a> |&nbsp;<a href="<?php echo bp_signup_page() ?>/">Signup</a>
								<?php endif;?>
	        				</div>
						</div>

						<br class="clear" />
					</div>

					<?php do_action( 'bp_after_blog_post' ) ?>

			<br class="clear" />
		</div>
	

	</div>
	<?php do_action( 'bp_after_blog_home' ) ?>
	</div>
	<?php //get_sidebar("blog");?>
	<br class="clear" />
</div>
</div><!--end of container-->
	
<?php get_footer(); ?>
