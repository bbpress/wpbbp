<?php

/**
 * Template Name: bbPress - Support (Index)
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

<div id="pagebody">
	<div class="wrapper">

		<?php do_action( 'bbp_before_main_content' ); ?>

		<?php do_action( 'bbp_template_notices' ); ?>

		<div class="col-6" id="forum-welcome">

			<p class="intro"><?php _e('We&rsquo;ve got a variety of resources to help you get the most out of WordPress. Your first stop should be our <a href="http://codex.wordpress.org">documentation</a>, where you&rsquo;ll find information on everything from installing WordPress for the first time to creating your own themes&nbsp;and&nbsp;plugins.', 'wporg'); ?></p>
			<h3><?php _e('Getting Started Resources', 'wporg'); ?></h3>
			<p><?php _e('If you need help getting started with WordPress, try these articles.', 'wporg'); ?></p>
			<ul>
				<li><?php _e('<a href="//codex.wordpress.org/Forum_Welcome">Welcome to the WordPress Support Forum</a>', 'wporg'); ?></li>
				<li><?php _e('<a href="//codex.wordpress.org/New_To_WordPress_-_Where_to_Start">New to WordPress &mdash; Where to Start</a>', 'wporg'); ?></li>
				<li><?php _e('<a href="//codex.wordpress.org/FAQ_Installation">Frequently Asked Questions about Installing WordPress</a>', 'wporg'); ?></li>
				<li><?php _e('<a href="//codex.wordpress.org/First_Steps_With_WordPress">First Steps with WordPress</a>', 'wporg'); ?></li>
				<li><?php _e('<a href="//codex.wordpress.org/Writing_Posts">Writing Posts</a>', 'wporg'); ?></li>
			</ul>
			<h3><?php _e('Search the Support Forums', 'wporg'); ?></h3>
			<p><?php _e('Enter a few words that describe the problem you&rsquo;re having.', 'wporg'); ?></p>
			<form id="forumsearch" method="get" action="<?php bbp_search_url(); ?>">
				<input name="search" class="text" id="forumsearchbox" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" type="text">
				<input id="go" name="go" class="button" value="<?php esc_attr_e( 'Search', 'wporg' ); ?>" type="submit">
				<input value="1" name="forums" type="hidden">
			</form>
			<h3><?php _e('Hot Topics', 'wporg'); ?></h3>
			<p class="frontpageheatmap">
				<?php wp_tag_cloud( array( 'smallest' => 14, 'largest' => 24, 'number' => 22, 'taxonomy' => bbp_get_topic_tag_tax_id() ) ); ?>
			</p>
		</div><!-- #forum-welcome -->
		<div class="col-6">
			<table id="forumlist">
				<thead>
					<tr>
						<th><h3><?php _e('Forums', 'wporg'); ?></h3></th>
						<th><?php _e('Topics', 'wporg'); ?></th>
						<th><?php _e('Posts', 'wporg'); ?></th>
					</tr>
				</thead>
				<tbody>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( bbp_has_forums() ) : ?>

							<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

								<tr>
									<td><a href="<?php bbp_forum_permalink(); ?>"><?php bbp_forum_title(); ?></a><br><?php bbp_forum_content(); ?></td>
									<td class="num"><?php bbp_forum_topic_count(); ?></td>
									<td class="num"><?php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?></td>
								</tr>

							<?php endwhile; ?>

						<?php endif; ?>

					<?php endwhile; ?>

				</tbody>
			</table><!-- #forumlist -->
			<div id="viewdiv">
				<ul id="views">

					<?php

					$view_iterator = 0;
					$topic_views   = array_keys( array_reverse( bbp_get_views() ) );
					$view_count    = count( $topic_views );

					foreach ( $topic_views as $view ) : $view_iterator++; ?>

						<li class="view"><a href="<?php bbp_view_url( $view ); ?>"><?php bbp_view_title( $view ); ?></a></li>

						<?php if ( $view_iterator < $view_count ) : ?>|<?php endif; ?>

					<?php endforeach;

					// Unset variables
					unset( $view_count, $topic_views ); ?>

				</ul>
			</div><!-- #viewdiv -->
		</div><!-- #col-6 -->

		<?php do_action( 'bbp_after_main_content' ); ?>

	</div><!-- #wrapper -->
</div><!-- #pagebody -->

<?php get_footer();
