<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bp_page_title() ?></title>
		<?php do_action( 'bp_head' ) ?>
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
		<link rel="shortcut icon" href="http://facpsimaster.es/httpdocs/wp-content/plugins/buddypress/bp-themes/bp-default/_inc/images/favicon.ico" type="image/x-icon" />
		<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_member_activity_feed_link' ) && bp_is_member() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_displayed_user_fullname() ?> | <?php _e( 'Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_member_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_group_activity_feed_link' ) && bp_is_group() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_current_group_name() ?> | <?php _e( 'Group Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_group_activity_feed_link() ?>" />
		<?php endif; ?>
		
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>

<body <?php body_class() ?> id="cosmicbuddy">
   <?php 
   			//Cargar‡ el color de la plantilla del master que hallamos elegido en las opciones del panel de administraci—n
   			cargar_color_master();
   ?>
   
   <div id="page">
       <div id="top-bar">
        <a id="top-bar-logo" href="<?php bp_root_domain();?>"><img src="<?php global $cb_topbar_logo;echo $cb_topbar_logo;  ?>" alt="logo" /> </a>
        <!-- top navigation -->
		<ul id="top-nav-bar">
				<li<?php if ( bp_is_front_page() ) : ?> class="selected"<?php endif; ?>>
					<a href="<?php bp_root_domain();?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><?php _e( 'Home', 'buddypress' ) ?>
					</a>
				</li>
				
				<li<?php if ( bp_is_page( BP_HOME_BLOG_SLUG ) ) : ?> class="selected"<?php endif; ?>><a href="<?php echo get_option('home') ?>/noticias/" title="<?php _e( 'Noticias', 'buddypress' ) ?>"><?php _e( 'Noticias', 'buddypress' ) ?></a></li>
				<?php /* ?>
				<li<?php if ( bp_is_page( BP_MEMBERS_SLUG ) || bp_is_member() ) : ?> class="selected"<?php endif; ?>><a href="<?php echo get_option('home') ?>/<?php echo BP_MEMBERS_SLUG ?>" title="<?php _e( 'Members', 'buddypress' ) ?>"><?php _e( 'Members', 'buddypress' ) ?></a></li>

				<?php if ( bp_is_active( 'groups' ) ) : ?>
					<li<?php if ( bp_is_page( BP_GROUPS_SLUG ) ) : ?> class="selected"<?php endif; ?>><a href="<?php echo get_option('home') ?>/<?php echo BP_GROUPS_SLUG ?>" title="<?php _e( 'Groups', 'buddypress' ) ?>"><?php _e( 'Groups', 'buddypress' ) ?></a></li>
				<?php endif; ?>

				<?php if ( bp_is_active( 'forums' ) && bp_is_active( 'groups' ) && ( function_exists( 'bp_forums_is_installed_correctly' ) && !(int) bp_get_option( 'bp-disable-forum-directory' ) ) && bp_forums_is_installed_correctly() ) : ?>
					<li<?php if ( bp_is_page( BP_FORUMS_SLUG ) ) : ?> class="selected"<?php endif; ?>><a href="<?php echo get_option('home') ?>/<?php echo BP_FORUMS_SLUG ?>" title="<?php _e( 'Forums', 'buddypress' ) ?>"><?php _e( 'Forums', 'buddypress' ) ?></a></li>
				<?php endif; ?>
				
				<?php if ( bp_is_active( 'blogs' ) && bp_core_is_multisite() ) : ?>
					<li<?php if ( bp_is_page( BP_BLOGS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_BLOGS_SLUG ?>/" title="<?php _e( 'Blogs', 'buddypress' ) ?>"><?php _e( 'Blogs', 'buddypress' ) ?></a>
					</li>
				<?php endif; ?>
				<?php */ ?>
				
				<?php if ( bp_is_active( 'quejas-y-sugerencias' ) && bp_core_is_multisite() ) : ?>
					<li<?php if ( bp_is_page( 'quejas-y-sugerencias' ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/otros/<?php echo 'quejas-y-sugerencias' ?>/" title="<?php _e( 'Quejas y Sugerencias', 'buddypress' ) ?>"><?php _e( 'Quejas y Sugerencias', 'buddypress' ) ?></a>
					</li>
				<?php endif; ?>
				
				<?php if ( bp_is_active( 'contacto' ) && bp_core_is_multisite() ) : ?>
					<li<?php if ( bp_is_page( 'contacto' ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo 'contacto' ?>/" title="<?php _e( 'Contacto', 'buddypress' ) ?>"><?php _e( 'Contacto', 'buddypress' ) ?></a>
					</li>
				<?php endif; ?>

				<?php do_action( 'bp_nav_items' ); ?>
        </ul>
		<!-- end of top navigation -->
		<div id="search-user-bar">
			
	        <div class="user-info">
			<?php if(is_user_logged_in()):?>
			<?php bp_loggedin_user_avatar( 'width=20&height=20' ) ?> &nbsp; <?php bp_loggedinuser_link() ?> / <?php bp_log_out_link() ?>
	         <?php else:?>
					<a href="<?php bloginfo('home'); ?>/wp-login.php" id="login">Accede</a> |&nbsp;<a href="<?php echo bp_signup_page() ?>">Regístrate</a>
					<?php endif;?>
	        </div>

		</div><!--end of user/search bar -->
         <div class="clear" ></div>
       </div><!-- end of top menu bar -->
	   <?php //if(bp_is_blog_page()):?>
		   <div id="top-banner">
		   <a href="<?php echo get_option('home') ?>"><img src="<?php global $cb_logo; echo $cb_logo;?>" alt="Logo" /></a>
		   
		   </div>
	  <?php //endif;?>
	  
	  <div id="menu-debajo-cabecera">
	  		<ul id="menu-debajo-cabecera-bar">
	  			<?php wp_list_pages('title_li=&child_of=1&depth=1'); ?>
	  		</ul>
	  </div>
        
        <!--end of top bar -->
        <!--may be header can fit here -->
	
	<?php 
			global $current_user;
			get_currentuserinfo();
			if (!is_user_logged_in() ) {
				if(!bp_is_blog_page()){
					if(!bp_is_register_page()){
						locate_template( array( 'debes-logearte.php' ), true );
						die();
					}
				}
			}
	?>