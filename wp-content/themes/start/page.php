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
					<div class="post-content">
						<div class="post-title">
							<h2>
								<?php the_title(); ?>
							</h2>
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
</main><!-- .site-main -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
