<div id="comments" class="comments">
	<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
	<h3>コメント</h3>
	<ol class="comments-list">
		<?php wp_list_comments( 'avatar_size=80' ); ?>
	</ol>
	<?php endif; ?>
	<?php $args = array(
		'title_reply' => 'コメントする',
		'label_submit' => 'SUBMIT'
	);
	comment_form( $args ); ?>
</div><!-- #comments -->
