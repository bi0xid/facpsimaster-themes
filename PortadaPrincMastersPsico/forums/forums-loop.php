<?php if ( bp_has_forum_topics( 'type=' . bp_get_forum_topic_type() . '&per_page=25&max=250' ) ) : ?>	
		
	<div class="pagination">
	
		<div id="post-count" class="pag-count">
			<?php bp_forum_pagination_count() ?>
		</div>

		<div class="pagination-links" id="topic-pag">
			<?php bp_forum_pagination() ?>
		</div>
	
	</div>

	<?php do_action( 'bp_before_directory_forums_list' ) ?>		
	
	<table id="global-forum-topic-list">
		
		<tr>
			<th id="th-title"><?php _e( 'Topic Title', 'buddypress' ) ?></th>
			<th id="th-poster"><?php _e( 'Last Poster', 'buddypress' ) ?></th>
			<th id="th-group"><?php _e( 'Posted In', 'buddypress' ) ?></th>
			<th id="th-postcount"><?php _e( 'Posts', 'buddypress' ) ?></th>
			<th id="th-freshness"><?php _e( 'Freshness', 'buddypress' ) ?></th>
		</tr>
		
		<?php while ( bp_forum_topics() ) : bp_the_forum_topic(); ?>
			
		<tr class="<?php bp_the_topic_css_class() ?>">
			<td class="td-title">
				<a class="topic-title" href="<?php bp_the_topic_permalink() ?>" title="<?php bp_the_topic_title() ?> - <?php _e( 'Permalink', 'buddypress' ) ?>">
					<?php bp_the_topic_title() ?>
				</a>
			</td>
			<td class="td-poster">
				<a href="<?php bp_the_topic_permalink() ?>">
					<?php bp_the_topic_last_poster_avatar( 'type=thumb&width=20&height=20' ) ?>
				</a> 
				<div class="poster-name"><?php bp_the_topic_last_poster_name() ?></div>
			</td>
			<td class="td-group">
				<a href="<?php bp_the_topic_object_permalink() ?>"><?php bp_the_topic_object_avatar( 'type=thumb&width=20&height=20' ) ?></a> 
				<div class="object-name"><a href="<?php bp_the_topic_object_permalink() ?>" title="<?php bp_the_topic_object_name() ?>"><?php bp_the_topic_object_name() ?></a></div>
			</td>
			<td class="td-postcount">
				<?php bp_the_topic_total_posts() ?>
			</td>
			<td class="td-freshness">
				<?php bp_the_topic_time_since_last_post() ?>
			</td>

			<?php do_action( 'bp_directory_forums_extra_cell' ) ?>		
		</tr>

		<?php do_action( 'bp_directory_forums_extra_row' ) ?>		
		
		<?php endwhile; ?>
		
	</table>

	<?php do_action( 'bp_after_directory_forums_list' ) ?>		
	
<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( 'Sorry, there were no forum topics found.', 'buddypress' ) ?></p>
	</div>

<?php endif;?>