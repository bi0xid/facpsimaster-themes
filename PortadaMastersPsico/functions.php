<?php
/* Register the widget columns */
//for welcome section in the main home

register_sidebars( 1, 
	array( 
		'name' => 'Portada seccion 1',
		'before_widget' => '<div id="%1$s" class="portada-seccion-1 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle"><br><br>',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada seccion 2',
		'before_widget' => '<div id="%1$s" class="portada-seccion-2 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle"><br><br>',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada seccion 3',
		'before_widget' => '<div id="%1$s" class="portada-seccion-3 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle"><br><br>',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada seccion 4',
		'before_widget' => '<div id="%1$s" class="portada-seccion-4 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle"><br><br>',
        'after_title' => '</h2>'
	) 
);

register_sidebars( 1, 
	array( 
		'name' => 'Portada de los 7 masters seccion 5',
		'before_widget' => '<div id="%1$s" class="portada-seccion-5 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada de los 7 masters seccion 6',
		'before_widget' => '<div id="%1$s" class="portada-seccion-6 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada de los 7 masters seccion 7',
		'before_widget' => '<div id="%1$s" class="portada-seccion-7 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada de los 7 masters seccion 8',
		'before_widget' => '<div id="%1$s" class="portada-seccion-8 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
	) 
);

register_sidebars( 1, 
	array( 
		'name' => 'Portada bloque izq abajo',
		'id' => 'homepage-main-col1',
		'before_widget' => '<div id="homepage-main-col1" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2><div class="widget-content">'
	) 
);
register_sidebars( 1, 
	array( 
		'name' => 'Portada bloque der abajo',
		'id' => 'homepage-main-col2',
		'before_widget' => '<div id="homepage-main-col2" class="homepage-main-col2 widget %2$s">',
        'after_widget' => '<div class="clear"></div></div></div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2><div class="widget-content">'
	) 
);
//for homepage/register/activation page
register_sidebars( 1,
	array( 
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></div></div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3><div class="widget-content">'
	) 
);
//for blog pages
/*register_sidebars( 1,
	array( 
		'name' => 'Sidebar del blog',
		'id' => 'sidebar-del-blog',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></div></div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3><div class="widget-content">'
	) 
);

register_sidebars( 1,
	array( 
		'name' => 'profile-sidebar-top',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></div></div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3><div class="widget-content">'
	) 
);*/

/* Add our function to the widgets_init hook. */
add_action( 'widgets_init', 'masterspsico_load_widgets' );

/* Function that registers our widget. */
/* Function that registers our widget. */
function masterspsico_load_widgets() {
	register_widget( 'WP_Widget_RSS_MasterPsico' );
	register_widget( 'WP_Widget_Text_MasterPsico' );
	register_widget( 'WP_Widget_Cuadro_MasterPsico' );
}


/**
 * Text MasterPsico widget class
 */
class WP_Widget_Text_MasterPsico extends WP_Widget {

	function WP_Widget_Text_MasterPsico() {
		$widget_ops = array('classname' => 'widget_text_masterpsico', 'description' => __('Masters Psicología: Texto o HTML a voluntad'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('text_masterpsico', __('Texto MastersPsico'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title_masterpsico', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$title_link = apply_filters( 'widget_title_link_masterpsico', $instance['title_link'], $instance);
		$text = apply_filters( 'widget_text_masterpsico', $instance['text'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title .'<a href="'.$title_link.'">'. $title .'</a>'. $after_title; } ?>
			<div class="textwidget"><?php echo $instance['filter'] ? wpautop($text) : $text; ?></div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['title_link'] = strip_tags($new_instance['title_link']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'title_link' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$title_link = strip_tags($instance['title_link']);
		$text = format_to_edit($instance['text']);
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('title_link'); ?>"><?php _e('Enlace del Título:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title_link'); ?>" name="<?php echo $this->get_field_name('title_link'); ?>" type="text" value="<?php echo $instance['title_link']; ?>" />
		</p>
		
		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
<?php
	}
}


/**
 * RSS MasterPsico widget class
 *
 * @since 2.8.0
 */
class WP_Widget_RSS_MasterPsico extends WP_Widget {

	function WP_Widget_RSS_MasterPsico() {
		$widget_ops = array( 'description' => __('Entries from any RSS of MastersPsico') );
		$control_ops = array( 'width' => 400, 'height' => 200 );
		$this->WP_Widget( 'rss', __('RSS MastersPsico'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {

		if ( isset($instance['error']) && $instance['error'] )
			return;

		extract($args, EXTR_SKIP);

		$url = $instance['url'];
		while ( stristr($url, 'http') != $url )
			$url = substr($url, 1);

		if ( empty($url) )
			return;

		$rss = fetch_feed_masterpsico($url);
		$title = $instance['title'];
		$desc = '';
		$link = '';

		if ( ! is_wp_error($rss) ) {
			$desc = esc_attr(strip_tags(@html_entity_decode($rss->get_description(), ENT_QUOTES, get_option('blog_charset'))));
			if ( empty($title) )
				$title = esc_html(strip_tags($rss->get_title()));
			$link = esc_url(strip_tags($rss->get_permalink()));
			while ( stristr($link, 'http') != $link )
				$link = substr($link, 1);
		}

		if ( empty($title) )
			$title = empty($desc) ? __('Unknown Feed') : $desc;

		$title = apply_filters('widget_title', $title );
		$url = esc_url(strip_tags($url));
		$icon = includes_url('images/rss.png');
		if ( $title )
			$title = "<a class='rsswidget' href='$url' title='" . esc_attr(__('Syndicate this content')) ."'><img style='background:orange;color:white;border:none;' width='14' height='14' src='$icon' alt='RSS' /></a> <a class='rsswidget' href='$link' title='$desc'>$title</a>";

		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title;
		wp_widget_rss_output( $rss, $instance );
		echo $after_widget;

		if ( ! is_wp_error($rss) )
			$rss->__destruct();
		unset($rss);
	}

	function update($new_instance, $old_instance) {
		$testurl = $new_instance['url'] != $old_instance['url'];
		return wp_widget_rss_process( $new_instance, $testurl );
	}

	function form($instance) {

		if ( empty($instance) )
			$instance = array( 'title' => '', 'url' => '', 'items' => 10, 'error' => false, 'show_summary' => 0, 'show_author' => 0, 'show_date' => 0 );
		$instance['number'] = $this->number;

		wp_widget_rss_form( $instance );
	}
}


/**
 * Cuadro MasterPsico widget class
 */
class WP_Widget_Cuadro_MasterPsico extends WP_Widget {

	function WP_Widget_Cuadro_MasterPsico() {
		$widget_ops = array('classname' => 'widget_cuadro_masterpsico', 'description' => __('Masters Psicología: Selecciona la página que quieres que salga en el cuadro de la portada'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('cuadro_masterpsico', __('Cuadro MastersPsico'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		
		$page_id = $instance['page'];
		
		echo $before_widget;
		if ( !empty( $page_id ) ) { echo $before_title .'<a href="'.get_permalink($page_id).'">'. get_the_title($page_id).'</a>'. $after_title; } ?>
		<div class="textwidget">
			<?php 
				$child_pages = get_pages('child_of='.$page_id.'&depth=1&hierarchical=0&exclude_tree=102&exclude=68,73,78,80,83,85,87,97,99'); 
  				foreach ($child_pages as $pagg) {
  					echo '<a href="'.get_page_link($pagg->ID).'">'.$pagg->post_title.'</a><br /><br />';
  				}
			?>
		</div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['page'] = strip_tags($new_instance['page']);
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'page' => '') );
		$page = strip_tags($instance['page']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('page'); ?>"><?php _e('Página:'); ?></label>
			<select name="<?php echo $this->get_field_name('page'); ?>" id="<?php echo $this->get_field_id('page'); ?>"> 
 				<option value=""><?php echo attribute_escape(__('Select page')); ?></option> 
 				<?php 
  					$pages = get_pages('child_of=1&parent=1'); 
  					foreach ($pages as $pagg) {
  						$option = '<option value="'.$pagg->ID.'"'; 
  						if($page == $pagg->ID){
  							$option .= 'selected="selected"';
  						}
  						$option .= '>';
						$option .= $pagg->post_title;
						$option .= '</option>';
						echo $option;
  					}
 				?>
			</select>
		</p>
		
<?php
	}
}




function fetch_feed_masterpsico($url) {
      require_once  (ABSPATH . WPINC . '/class-feed.php');
  
      $feed = new SimplePie();
      $feed->set_feed_url($url);
      $feed->set_cache_class('WP_Feed_Cache');
      $feed->set_file_class('WP_SimplePie_File');
      $feed->set_cache_duration(apply_filters('wp_feed_cache_transient_lifetime', 60, $url));
      do_action_ref_array( 'wp_feed_options', array( &$feed, $url ) );
      $feed->init();
      $feed->handle_content_type();
  
      if ( $feed->error() )
          return new WP_Error('simplepie-error', $feed->error());
  
      return $feed;
}


/* Load the AJAX functions for the theme */
require_once( TEMPLATEPATH . '/_inc/ajax.php' );

/* Load the javascript for the theme */

wp_enqueue_script( 'dtheme-ajax-js', get_template_directory_uri() . '/_inc/global.js', array( 'jquery') );

/* Make sure the blog index page shows under /[HOME_BLOG_SLUG] if enabled */
function bp_dtheme_show_home_blog() {

	global $bp, $query_string, $paged;
		if ( $bp->current_component == BP_HOME_BLOG_SLUG && ( !$bp->current_action || 'page' == $bp->current_action ) ) {				
		unset( $query_string );
		
		if ( ( 'page' == $bp->current_action && $bp->action_variables[0] ) && false === strpos( $query_string, 'paged' ) ) {
			$query_string .= '&paged=' . $bp->action_variables[0];
			$paged = $bp->action_variables[0];
		}

		query_posts($query_string);
		
		bp_core_load_template( 'index', true );
	}
}
add_action( 'wp', 'bp_dtheme_show_home_blog', 2 );

/*let us keep an eye on the site_url*/
add_filter("site_url","my_custom_register_url",10,3);
function my_custom_register_url($url, $path, $orig_scheme)
{	/*if the site url is used in login contentxt,let us check for the register link*/
	if($orig_scheme=="login")
	{
		if($path=="wp-login.php?action=register")//so it is a registration link..cool
		return get_option('siteurl')."/".BP_REGISTER_SLUG;//let us send it to our buddypress registration page
	}
	
	return $url;

}

if(is_admin())
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'theme-admin/admin.php');
//for logo, topbar logo and bottombar log
$cb_logo=get_option("cb_cb_header_logo");
$cb_topbar_logo=get_option("cb_cb_topbar_logo");
$cb_bottombar_logo=get_option("cb_cb_bottombar_logo");
if(empty($cb_logo))
	$cb_logo=get_stylesheet_directory_uri()."/_inc/images/logo-big.gif";
if(empty($cb_topbar_logo))
	$cb_topbar_logo=get_stylesheet_directory_uri()."/_inc/images/topbar_logo.gif";
if(empty($cb_bottombar_logo))
	$cb_bottombar_logo=get_stylesheet_directory_uri()."/_inc/images/bottombar_logo.gif";

	/*** This was removed by Bp 1.2
	*/
	function cb_get_the_body_class( $wp_classes, $custom_classes ) {
		global $bp;

				
		if ( bp_is_blog_page() || bp_is_register_page() || bp_is_activation_page() )
			$bp_classes[] = 'blog-page';
		
		if ( !bp_is_blog_page() && !bp_is_register_page() && !bp_is_activation_page() )
			$bp_classes[] = 'internal-page';
				
	
		
 
		/* Merge WP classes with BP classes */
		$classes = array_merge( (array) $bp_classes, (array) $wp_classes );
		
		/* Remove any duplicates */
		$classes = array_unique( $classes );
		
		return apply_filters( 'bp_get_the_body_class', $classes, $bp_classes, $wp_classes, $custom_classes );
	}
	add_filter( 'body_class', 'cb_get_the_body_class', 11, 2 );



add_action("wp","add_sextra_nav");

function add_sextra_nav(){
global $bp;
$groups_link = $bp->loggedin_user->domain . $bp->groups->slug . '/';

$bp->bp_options_nav[$bp->groups->slug]["create"] = array(
		'name' => "Create",
		'link' => $groups_link . '/',
		'slug' => $slug,
		'css_id' => $item_css_id,
		'position' => 100,
		'user_has_access' => $user_has_access
	);
	print_r($bp->options_nav);
	/* Add the subnav items to the groups nav item */
	//bp_core_new_subnav_item( array( 'name' => __( 'My Groups', 'buddypress' ), 'slug' => 'my-groups', 'parent_url' => $groups_link, 'parent_slug' => $bp->groups->slug, 'screen_function' => 'groups_screen_my_groups', 'position' => 10, 'item_css_id' => 'groups-my-groups' ) );
	//bp_core_new_subnav_item( array( 'name' => __( 'aaaaa', 'buddypress' ), 'slug' => 'aaaa', 'parent_url' => $groups_link, 'parent_slug' => $bp->groups->slug, 'screen_function' => 'groups_screen_group_invites', 'position' => 30, 'user_has_access' => bp_is_my_profile() ) );


}


/* MENÚ DE ADMINISTRACIÓN */



function masterspsico_admin_head() {

}
function masterspsico_estudio_admin_head() {

}

// VARIABLES

$themename = "Masters Psicología";
$shortname = "masterspsico";
$manualurl = 'http://facpsimaster.es';
$options = array();
$options_estudio = array();

add_option("masterspsico_settings",$options);
add_option("masterspsico_estudio_settings",$options_estudio);

$template_path = get_bloginfo('template_directory');

$layout_path = TEMPLATEPATH . '/layouts/'; 
$layouts = array();

$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

$functions_path = TEMPLATEPATH . '/functions/';


$masterspsico_ids = array('#881133','#40498f','#E8A838','#a257ad','#8188bf','#A0522D','#00BFFF','#009833','#9370D8');
$masterspsico_colores = array('Bourdeos (Portada Principal)','Azul Marino (Clínica)','Amarillo (Educación)','Rosa (Comunitaria)','Lila (Migraciones)','Marrón (Clínica)','Celeste (Educación)','Verde (Comunitaria)','Morado (Migraciones)');


$estudios_de_caso = masterspsico_estudio_posts_by_category();


// THESE ARE THE DIFFERENT FIELDS

$options = array (

				array(	"name" => "Opciones generales",
						"type" => "heading"),
	
				array(	"name" => "Color",
						"desc" => "Seleccione el color principal del blog",
						"id" => $shortname."_color",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),												    

				
				array(	"name" => "Color 1er. Bloque Portada",
						"desc" => "Seleccione el color del 1er. bloque de la portada",
						"id" => $shortname."_color_bloque1",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),												    

				
				array(	"name" => "Color 2º Bloque Portada",
						"desc" => "Seleccione el color del 2º bloque de la portada",
						"id" => $shortname."_color_bloque2",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),												    

				
				array(	"name" => "Color 3er. Bloque Portada",
						"desc" => "Seleccione el color del 3er. bloque de la portada",
						"id" => $shortname."_color_bloque3",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),												    

				
				array(	"name" => "Color 4º Bloque Portada",
						"desc" => "Seleccione el color del 4º bloque de la portada",
						"id" => $shortname."_color_bloque4",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),
						
				array(	"name" => "Color 5º Bloque Portada",
						"desc" => "Seleccione el color del 5º bloque de la portada",
						"id" => $shortname."_color_bloque5",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),
						
				array(	"name" => "Color 6º Bloque Portada",
						"desc" => "Seleccione el color del 6º bloque de la portada",
						"id" => $shortname."_color_bloque6",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),
						
				array(	"name" => "Color 7º Bloque Portada",
						"desc" => "Seleccione el color del 7º bloque de la portada",
						"id" => $shortname."_color_bloque7",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores),
						
				array(	"name" => "Color 8º Bloque Portada",
						"desc" => "Seleccione el color del 8º bloque de la portada",
						"id" => $shortname."_color_bloque8",
						"std" => "Seleccione un color:",
						"type" => "select",
						"options" => $masterspsico_colores)										    

				);
				
$options_estudio = array (
				
				array(	"name" => "Criterio 1",
						"type" => "heading"),
	
				array(	"name" => "Primero (más alta puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio1_1",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),												    
				array(	"name" => "Segundo",
						"desc" => "",
						"id" => $shortname."_estudio1_2",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Tercero",
						"desc" => "",
						"id" => $shortname."_estudio1_3",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Cuarto",
						"desc" => "",
						"id" => $shortname."_estudio1_4",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Quinto",
						"desc" => "",
						"id" => $shortname."_estudio1_5",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Sexto",
						"desc" => "",
						"id" => $shortname."_estudio1_6",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Séptimo",
						"desc" => "",
						"id" => $shortname."_estudio1_7",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Octavo",
						"desc" => "",
						"id" => $shortname."_estudio1_8",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Noveno",
						"desc" => "",
						"id" => $shortname."_estudio1_9",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Décimo (más baja puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio1_10",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				
				array(	"name" => "Criterio 2",
						"type" => "heading"),
	
				array(	"name" => "Primero (más alta puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio2_1",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),												    
				array(	"name" => "Segundo",
						"desc" => "",
						"id" => $shortname."_estudio2_2",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Tercero",
						"desc" => "",
						"id" => $shortname."_estudio2_3",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Cuarto",
						"desc" => "",
						"id" => $shortname."_estudio2_4",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Quinto",
						"desc" => "",
						"id" => $shortname."_estudio2_5",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Sexto",
						"desc" => "",
						"id" => $shortname."_estudio2_6",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Séptimo",
						"desc" => "",
						"id" => $shortname."_estudio2_7",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Octavo",
						"desc" => "",
						"id" => $shortname."_estudio2_8",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Noveno",
						"desc" => "",
						"id" => $shortname."_estudio2_9",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Décimo (más baja puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio2_10",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				
				
				array(	"name" => "Criterio 3",
						"type" => "heading"),
	
				array(	"name" => "Primero (más alta puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio3_1",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),												    
				array(	"name" => "Segundo",
						"desc" => "",
						"id" => $shortname."_estudio3_2",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Tercero",
						"desc" => "",
						"id" => $shortname."_estudio3_3",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Cuarto",
						"desc" => "",
						"id" => $shortname."_estudio3_4",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Quinto",
						"desc" => "",
						"id" => $shortname."_estudio3_5",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Sexto",
						"desc" => "",
						"id" => $shortname."_estudio3_6",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Séptimo",
						"desc" => "",
						"id" => $shortname."_estudio3_7",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Octavo",
						"desc" => "",
						"id" => $shortname."_estudio3_8",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Noveno",
						"desc" => "",
						"id" => $shortname."_estudio3_9",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Décimo (más baja puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio3_10",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
						
				array(	"name" => "Criterio 4",
						"type" => "heading"),
	
				array(	"name" => "Primero (más alta puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio4_1",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),												    
				array(	"name" => "Segundo",
						"desc" => "",
						"id" => $shortname."_estudio4_2",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Tercero",
						"desc" => "",
						"id" => $shortname."_estudio4_3",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Cuarto",
						"desc" => "",
						"id" => $shortname."_estudio4_4",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Quinto",
						"desc" => "",
						"id" => $shortname."_estudio4_5",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Sexto",
						"desc" => "",
						"id" => $shortname."_estudio4_6",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Séptimo",
						"desc" => "",
						"id" => $shortname."_estudio4_7",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Octavo",
						"desc" => "",
						"id" => $shortname."_estudio4_8",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Noveno",
						"desc" => "",
						"id" => $shortname."_estudio4_9",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso),
				array(	"name" => "Décimo (más baja puntuación)",
						"desc" => "",
						"id" => $shortname."_estudio4_10",
						"std" => "Seleccione un estudio de caso:",
						"type" => "select",
						"options" => $estudios_de_caso)
				
				
				);

			

// ADMIN PANEL

function masterspsico_add_admin() {

	 global $themename, $options, $blog_id;
	
	if ( $_GET['page'] == basename(__FILE__) ) {	
        if ( 'save' == $_REQUEST['action'] ) {
	
                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							update_option($up_opt, $_REQUEST[$up_opt] );
						}
					}
				}

                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;						
							if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); } 
						}
					}
				}
						
				header("Location: admin.php?page=functions.php&saved=true");								
			
			die;

		} else if ( 'reset' == $_REQUEST['action'] ) {
			delete_option('sandbox_logo');
			
			header("Location: admin.php?page=functions.php&reset=true");
			die;
		}

	}

add_menu_page($themename." Opciones", $themename." Opciones", 'edit_themes', basename(__FILE__), 'masterspsico_page');

}

//Página de opciones para los Estudios de caso
function masterspsico_estudio_add_admin() {

	 global $options_estudio, $blog_id;

	if ( $_GET['page'] == 'estudios_de_caso' ) {	
        if ( 'save' == $_REQUEST['action'] ) {
	
                foreach ($options_estudio as $value) {
					if($value['type'] != 'multicheck'){
                    	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							update_option($up_opt, $_REQUEST[$up_opt] );
						}
					}
				}

                foreach ($options_estudio as $value) {
					if($value['type'] != 'multicheck'){
                    	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;						
							if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); } 
						}
					}
				}
						
				header("Location: admin.php?page=estudios_de_caso&saved=true");								
			
			die;

		} else if ( 'reset' == $_REQUEST['action'] ) {
			delete_option('sandbox_logo');
			
			header("Location: admin.php?page=estudios_de_caso&reset=true");
			die;
		}

	}


	if($blog_id == 5)
		add_menu_page("Estudios de caso", "Estudios de caso", 'edit_themes', 'estudios_de_caso', 'masterspsico_estudios_de_caso');

}

//
//ESTUDIOS DE CASO
//
function masterspsico_estudios_de_caso(){
	global $options_estudio, $themename, $manualurl, $blog_id;
		

	//Estas opciones sólo se mostrarán en el blog de comunitaria, para los Estudios de caso
	if($blog_id == 5){ ?>

		<div class="wrap">

    			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

						<h2>Página de opciones del Ranking de los Estudios de caso</h2>

						<?php if ( $_REQUEST['saved'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?> se ha actualizado</div><?php } ?>
						<?php if ( $_REQUEST['reset'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?> se ha reseteado</div><?php } ?>						
						
						<div style="clear:both;height:20px;"></div>
						
						<div class="info">
					
							<p>Seleccione los estudios de caso para cada criterio y valoración.</p>
						
						</div>	    			
						
						<!--START: GENERAL SETTINGS-->
     						
     						<table class="maintable">
     							
							<?php foreach ($options_estudio as $value) { ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<tr class="mainrow">
										<td class="titledesc"><?php echo $value['name']; ?></td>
										<td class="forminp">
		
									<?php } ?>		 
	
									<?php
										
										switch ( $value['type'] ) {
										case 'text':
		
									?>
									
		        							<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		
									<?php
										
										break;
										case 'select':
		
									?>
		
	            						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                					<?php foreach ($value['options'] as $option) { ?>
	                						<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option>
	                					<?php } ?>
	            						</select>
		
									<?php
		
										break;
										case 'textarea':
										$ta_options = $value['options'];
		
									?>
									
										<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="8"><?php  if( get_settings($value['id']) != "") { echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
		
									<?php
										
										break;
										case "radio":
		
 										foreach ($value['options'] as $key=>$option) { 
				
													$radio_setting = get_settings($value['id']);
													
													if($radio_setting != '') {
		    											
		    											if ($key == get_settings($value['id']) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
													
													} else {
													
														if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									} ?>
									
	            					<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		
									<?php }
		 
										break;
										case "checkbox":
										
										if(get_settings($value['id'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									
									?>
		            				
		            				<input type="checkbox" class="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		
									<?php
		
										break;
										case "multicheck":
		
 										foreach ($value['options'] as $key=>$option) {
 										
	 											$masterspsico_key = $value['id'] . '_' . $key;
												$checkbox_setting = get_settings($masterspsico_key);
				
 												if($checkbox_setting != '') {
		    		
		    											if (get_settings($masterspsico_key) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
												} else { if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
									} ?>
									
	            					<input type="checkbox" class="checkbox" name="<?php echo $masterspsico_key; ?>" id="<?php echo $masterspsico_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $masterspsico_key; ?>"><?php echo $option; ?></label><br />
									
									<?php }
		 
										break;
										case "heading":

									?>
									
										</table> 
		    							
		    									<h3 class="title"><?php echo $value['name']; ?></h3>
										
										<table class="maintable">
		
									<?php
										
										break;
										default:
										break;
									
									} ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<?php if ( $value['type'] <> "checkbox" ) { ?><br/><?php } ?><span><?php echo $value['desc']; ?></span>
										</td></tr>
	
									<?php } ?>		
									
							<?php } ?>	
							
							</table>
							

							<p class="submit">
								<input name="save" type="submit" value="Guardar cambios" />    
								<input type="hidden" name="action" value="save" />
							</p>							
							
							<div style="clear:both;"></div>		
						
						<!--END: GENERAL SETTINGS-->						
             
            </form>



</div><!--wrap-->
<?php }//Sólo para el blog de comunitaria ?>

<div style="clear:both;height:20px;"></div>
 
 <?php

}



function masterspsico_page (){

		global $options, $themename, $manualurl, $blog_id;
		
		?>

<div class="wrap">

    			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

						<h2><?php echo $themename; ?> Opciones</h2>

						<?php if ( $_REQUEST['saved'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?> se ha actualizado</div><?php } ?>
						<?php if ( $_REQUEST['reset'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?> se ha reseteado</div><?php } ?>						
						
						<div style="clear:both;height:20px;"></div>
						
						<div class="info">
					
							<div style="width: 70%; float: left; display: inline;padding-top:4px;"><strong>¿Atascado?</strong> <a href="<?php echo $manualurl; ?>" target="_blank">Lea la documentación</a>.</div>
							<div style="width: 30%; float: right; display: inline;text-align: right;"><input name="save" type="submit" value="Guardar cambios" /></div>
							<div style="clear:both;"></div>
						
						</div>	    			
						
						<!--START: GENERAL SETTINGS-->
     						
     						<table class="maintable">
     							
							<?php foreach ($options as $value) { ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<tr class="mainrow">
										<td class="titledesc"><?php echo $value['name']; ?></td>
										<td class="forminp">
		
									<?php } ?>		 
	
									<?php
										
										switch ( $value['type'] ) {
										case 'text':
		
									?>
									
		        							<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		
									<?php
										
										break;
										case 'select':
		
									?>
		
	            						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                					<?php foreach ($value['options'] as $option) { ?>
	                						<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                					<?php } ?>
	            						</select>
		
									<?php
		
										break;
										case 'textarea':
										$ta_options = $value['options'];
		
									?>
									
										<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="8"><?php  if( get_settings($value['id']) != "") { echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
		
									<?php
										
										break;
										case "radio":
		
 										foreach ($value['options'] as $key=>$option) { 
				
													$radio_setting = get_settings($value['id']);
													
													if($radio_setting != '') {
		    											
		    											if ($key == get_settings($value['id']) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
													
													} else {
													
														if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									} ?>
									
	            					<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		
									<?php }
		 
										break;
										case "checkbox":
										
										if(get_settings($value['id'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									
									?>
		            				
		            				<input type="checkbox" class="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		
									<?php
		
										break;
										case "multicheck":
		
 										foreach ($value['options'] as $key=>$option) {
 										
	 											$masterspsico_key = $value['id'] . '_' . $key;
												$checkbox_setting = get_settings($masterspsico_key);
				
 												if($checkbox_setting != '') {
		    		
		    											if (get_settings($masterspsico_key) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
												} else { if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
									} ?>
									
	            					<input type="checkbox" class="checkbox" name="<?php echo $masterspsico_key; ?>" id="<?php echo $masterspsico_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $masterspsico_key; ?>"><?php echo $option; ?></label><br />
									
									<?php }
		 
										break;
										case "heading":

									?>
									
										</table> 
		    							
		    									<h3 class="title"><?php echo $value['name']; ?></h3>
										
										<table class="maintable">
		
									<?php
										
										break;
										default:
										break;
									
									} ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<?php if ( $value['type'] <> "checkbox" ) { ?><br/><?php } ?><span><?php echo $value['desc']; ?></span>
										</td></tr>
	
									<?php } ?>		
									
							<?php } ?>	
							
							</table>
							

							<p class="submit">
								<input name="save" type="submit" value="Guardar cambios" />    
								<input type="hidden" name="action" value="save" />
							</p>							
							
							<div style="clear:both;"></div>		
						
						<!--END: GENERAL SETTINGS-->						
             
            </form>



</div><!--wrap-->

<div style="clear:both;height:20px;"></div>
 
 <?php

};

add_action('admin_menu', 'masterspsico_add_admin');
add_action('admin_head', 'masterspsico_admin_head');

//Creando la página de opciones de los Estudios de caso
add_action('admin_menu', 'masterspsico_estudio_add_admin');
add_action('admin_head', 'masterspsico_estudio_admin_head');	


function cargar_color_master(){
	
	$master_color = get_option('masterspsico_color');
	
   			
	switch($master_color){
   		case 'Bourdeos (Portada Principal)':
   			$color[0] = '#881133';
   			$bg[0] = 'col-bourdeospsico.jpg';
   			break;
   		case 'Azul Marino (Clínica)':
   			$color[0] = '#40498f';
   			$bg[0] = 'col-azulmarinopsico.jpg';
   			break;
   		case 'Amarillo (Educación)':
   			$color[0] = '#E8A838';
   			$bg[0] = 'col-amarillo.png';
   			break;
   		case 'Rosa (Comunitaria)':
   			$color[0] = '#a257ad';
   			$bg[0] = 'col-rosapsico.jpg';
   			break;
   		case 'Lila (Migraciones)':
   			$color[0] = '#8188bf';
   			$bg[0] = 'col-lilapsico.jpg';
   			break;	
   		
   		case 'Marrón (Clínica)':
   			$color[0] = '#A0522D';
   			$bg[0] = 'col-marron.png';
   			break;
   		case 'Celeste (Educación)':
   			$color[0] = '#00BFFF';
   			$bg[0] = 'col-celeste.png';
   			break;
   		case 'Verde (Comunitaria)':
   			$color[0] = '#009833';
   			$bg[0] = 'col-verde.png';
   			break;
   		case 'Morado (Migraciones)':
   			$color[0] = '#9370D8';
   			$bg[0] = 'col-morado.png';
   			break;
   		default:
   			$color[0] = '#881133';
   			$bg[0] = 'col-bourdeospsico.jpg';
   			break;
   	}?>
   	<style type="text/css">
		body a, #top-bar a, #footer a, .widget h2.widgettitle, .widget h2.widgettitle a, .widget .widgettitle, .widget .widgettitle a, .post h2.post-title a, .post p.date em a, .post span.comments a, .postmetadata a, .post h1, .entry a{
			color: <?php echo $color[0]; ?>;
		}
	</style>
   	
   	
   	<?php for($i = 1;$i<=8;$i++){
   	
   		$master_color_bloque = get_option('masterspsico_color_bloque'.$i);
   		
   		
   		if($master_color_bloque != ''){
   		switch($master_color_bloque){
   		case 'Bourdeos (Portada Principal)':
   			$color[$i] = '#881133';
   			$bg[$i] = 'col-bourdeospsico.jpg';
   			break;
   		case 'Azul Marino (Clínica)':
   			$color[$i] = '#40498f';
   			$bg[$i] = 'col-azulmarinopsico.jpg';
   			break;
   		case 'Amarillo (Educación)':
   			$color[$i] = '#E8A838';
   			$bg[$i] = 'col-amarillo.png';
   			break;
   		case 'Rosa (Comunitaria)':
   			$color[$i] = '#a257ad';
   			$bg[$i] = 'col-rosapsico.jpg';
   			break;
   		case 'Lila (Migraciones)':
   			$color[$i] = '#8188bf';
   			$bg[$i] = 'col-lilapsico.jpg';
   			break;	
   		
   		case 'Marrón (Clínica)':
   			$color[$i] = '#A0522D';
   			$bg[$i] = 'col-marron.png';
   			break;
   		case 'Celeste (Educación)':
   			$color[$i] = '#00BFFF';
   			$bg[$i] = 'col-celeste.png';
   			break;
   		case 'Verde (Comunitaria)':
   			$color[$i] = '#009833';
   			$bg[$i] = 'col-verde.png';
   			break;
   		case 'Morado (Migraciones)':
   			$color[$i] = '#9370D8';
   			$bg[$i] = 'col-morado.png';
   			break;
   		default:
   			$color[$i] = '#40498f';
   			$bg[$i] = 'col-amarillo.png';
   			break;
   			}//End switch ?>
   			
   			<style type="text/css">
   				div.portada-seccion-<?php echo $i; ?> h2.widgettitle{
					background:transparent url(http://facpsimaster.es/wp-content/plugins/buddypress/bp-themes/PortadaMastersPsico/_inc/images/<?php if($master_color_bloque != ''): echo $bg[$i]; else: echo $bg[0]; endif; ?>) repeat;
				}
   			</style>
   			
   		<?php }//End if($master_color_bloque != '')
   	}//End for
	
}


//Función que recoge todos los posts de la categoría Estudios de caso
function masterspsico_estudio_posts_by_category() {
    global $wpdb;   
    
    $j=1;
    $the_output = array();
    $the_output[0] = '---';
    
    $results = $wpdb->get_results("SELECT ID, post_title FROM wp_5_posts WHERE post_type = 'post' AND ID IN (SELECT object_id FROM wp_5_term_relationships, wp_5_terms WHERE wp_5_term_relationships.term_taxonomy_id = 10)");
    
	
    foreach ( $results as $result ) {
    			
    	$the_output[$j] = $result->post_title;
    	$j++;
    }
    
    return $the_output;
}



add_theme_support('nav-menus'); ?>