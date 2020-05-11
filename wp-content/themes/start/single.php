<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="contents">
	<main id="s-main" class="site-main" role="main">
		<div id ="s-posts" >

      <?php
      if (have_posts()):
      while (have_posts()) :
        the_post();
      ?>

			<div class="s-post">
				<div class="post-header">
					<div class="single-bg-img">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" >
						<?php endif; ?>
					</div>
					<div class="s-post-title">
						<div class="">
							<h3>
								<?php the_title(); ?>
							</h3>
							<div class="post-meta">
								<?php echo get_the_date(); ?>
								<div class="post-category">
								<?php the_category(' '); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php the_content(); ?>
			</div>
      <div class="navigation">
        <div class="prev"><?php previous_post_link(); ?></div>
        <div class="next"><?php next_post_link(); ?></div>
      </div>
      <?php endwhile;
      else: ?>
      <p>投稿記事はありません</p>

      <?php endif; ?>
    </div>
		<?php comments_template() ?>
	</main><!-- .site-main -->
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
