<?php
 /*
Template Name: Estudios de caso
*/
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
						
						<div style="float:left;width:300px;display:block;padding-left:30px;">
						
						<h3>Criterio 1</h3>
						<ul style="padding-bottom:30px;">
							<li><?php echo get_option('masterspsico_estudio1_1'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_2'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_3'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_4'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_5'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_6'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_7'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_8'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_9'); ?></li>
							<li><?php echo get_option('masterspsico_estudio1_10'); ?></li>
						</ul>

						<h3>Criterio 2</h3>
						<ul style="padding-bottom:30px;">
							<li><?php echo get_option('masterspsico_estudio2_1'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_2'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_3'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_4'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_5'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_6'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_7'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_8'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_9'); ?></li>
							<li><?php echo get_option('masterspsico_estudio2_10'); ?></li>
						</ul>
						</div>

						<div style="float:left;width:300px;display:block;">
						
						<h3>Criterio 3</h3>
						<ul style="padding-bottom:30px;">
							<li><?php echo get_option('masterspsico_estudio3_1'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_2'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_3'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_4'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_5'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_6'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_7'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_8'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_9'); ?></li>
							<li><?php echo get_option('masterspsico_estudio3_10'); ?></li>
						</ul>

						<h3>Criterio 4</h3>
						<ul style="padding-bottom:30px;">
							<li><?php echo get_option('masterspsico_estudio4_1'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_2'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_3'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_4'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_5'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_6'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_7'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_8'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_9'); ?></li>
							<li><?php echo get_option('masterspsico_estudio4_10'); ?></li>
						</ul>
						</div>


						<?php the_content( __( '<p class="serif">Read the rest of this page &raquo;</p>', 'buddypress' ) ); ?>

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
