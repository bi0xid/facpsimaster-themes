<?php
	/*
		Template Name: Portada 8 cubos
	*/
?>

<?php get_header(); ?>
<div id="container">
<div id="contents">
	
	<!-- Primer bloque de la home con las cuatro primeras secciones de widgets-->
	<div id="contents-home1">
		<div id="contents-home1-container">
			<div id="contents-home1-col1">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada seccion 1') ) : ?>
			<?php endif; ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada seccion 2') ) : ?>
			<?php endif; ?>
			</div><!-- contents-home1-col1 -->
			<div id="contents-home1-col2">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada seccion 3') ) : ?>
			<?php endif; ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada seccion 4') ) : ?>
			<?php endif; ?>
			</div><!-- contents-home1-col2 -->
			<br class="clear" />
			
			<div id="contents-home1-col1">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada de los 7 masters seccion 5') ) : ?>
					<?php endif; ?>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada de los 7 masters seccion 6') ) : ?>
					<?php endif; ?>
			</div><!-- contents-home1-col1 -->
			<div id="contents-home1-col2">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada de los 7 masters seccion 7') ) : ?>
					<?php endif; ?>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portada de los 7 masters seccion 8') ) : ?>
					<?php endif; ?>
			</div><!-- contents-home1-col2 -->
			<br class="clear" />
		</div><!-- contents-home1-container -->
	</div><!-- contents-home1 -->
	
	
	
	<!-- Segundo bloque de la home con dos secciones -->
	<div id="contents-home2">
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('welcome-section') ) : ?>
		<?php endif; ?>
		
		
		<?php if(is_active_sidebar("homepage-main-col1")||is_active_sidebar("homepage-main-col2")):?>
			<div id="home-2col-container">
				<div id="home-col1">
					<?php dynamic_sidebar('homepage-main-col1');?>
				</div>
				<div id="home-col2">
					<?php dynamic_sidebar('homepage-main-col2');?>
				</div>
				<br class="clear" />	
			</div>		
		<?php endif;?>
		
	</div><!-- contents-home2 -->
	<?php //get_sidebar();?>
	<br class="clear" />
	<?php //include_once("featured-bottom.php");?>
	
	
	</div><!-- contents -->
	
</div><!--end of container-->
	
<?php get_footer(); ?>
