<?php
	/* Template Name: Listado de secciones hijas */
?>

<?php get_header(); ?>
<div id="container">
<div id="contents">
	<div id="content">
		<?php do_action( 'bp_before_blog_page' ) ?>
		<div class="page widget" id="blog-page">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<h2 class="pagetitle widgettitle"><?php the_title(); ?></h2>

				<div class="post widget-content" id="post-<?php the_ID(); ?>">
					
					<div class="entry">
						
						<?php //the_content( __( '<p class="serif">Read the rest of this page &raquo;</p>', 'buddypress' ) ); ?>
						
						
						<div class="listado-secciones">
						<?php 
								//Vamos a listar todas las páginas hijas de ésta
								$page_id = get_the_ID();
								$var = 'title_li=&child_of='.$page_id.'';
								wp_list_pages($var); 
						?>
						</div>
												
						<?php wp_link_pages( array( 'before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php edit_post_link( __( 'Edit this entry.', 'buddypress' ), '<p>', '</p>'); ?>
						
					</div>
					
				</div>
				
			<?php endwhile; endif; ?>
			
		</div>
		<?php do_action( 'bp_after_blog_page' ) ?>
	</div>
	<?php get_sidebar("Sidebar del blog");?>
	<br class="clear" />
</div>
</div><!--end of container-->
	
<?php get_footer(); ?>
