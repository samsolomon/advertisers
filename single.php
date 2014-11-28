<?php
get_header();
the_post();
/* @var $post WP_Post */
global $post;
$url = get_post_meta( get_the_ID(), 'url', true );
$user_votes = get_user_meta( get_current_user_id(), '_votes_type_post' );
if ( empty ( $user_votes ) ) $user_votes = array();
?>

<div class="table">
		<div class="vote">
			<?php if ( $post->post_author != get_current_user_id() && ! in_array( $post->ID, $user_votes ) ): ?> <!-- If post author automatically count vote -->
				<a class="upvote-ajax" href="<?php echo upvote_get_vote_url( get_the_ID() ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/up.png" alt="Upvote" /></a>
			<?php endif; ?>
					<!-- show upvote points - is sprintf needed? -->
			<?php
			printf(
				'%d',
				upvote_get_points( get_the_ID(), 'post' ),
				bp_core_get_userlink( $post->post_author ),
				human_time_diff( strtotime( $post->post_date_gmt ) ),
				sprintf( '<a href="%s">%d comments</a>', get_comments_link(), get_comments_number() ) 
			);			
			?>
		</div>
		<div class="content">
			<h2>
				<a href="<?php echo $url ? esc_url( $url ) : get_permalink(); ?>"><?php the_title(); ?></a>
				<?php if ( $url ): ?>
					<span class="post-url"><?php echo parse_url( $url, PHP_URL_HOST ); ?></span>
				<?php endif; ?>
			</h2>
			<p class="byline"><?php
				printf(
					'%d points by %s %s ago — %s',
					upvote_get_points( get_the_ID(), 'post' ),
					bp_core_get_userlink( $post->post_author ),
					human_time_diff( strtotime( $post->post_date_gmt ) ),
					sprintf( '<a href="%s">%d comments</a>', get_comments_link(), get_comments_number() )
				);
			?></p>

			<div class="entry-content"><?php the_content(); ?></div>
		</div>
		
			<div id="respond">
				<form role="form" action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post">
					<textarea name="comment" class="form-control comment" rows="3"></textarea>
					<button type="submit" class="btn btn-default">Add Comment</button>
					<?php comment_id_fields( get_the_ID() ); ?>
				</form>
				<?php cancel_comment_reply_link( 'Cancel Reply' ); ?>
			</div>

</div>

<?php comments_template(); ?>

<?php get_footer();