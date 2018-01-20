<?php if (post_password_required()) return ?>
<div id="comments" class="comments-area">
	<?php if (have_comments()): ?>
	<h3 class="comments-title">
		<?php 
			printf(
				_nx('Jeden komentarz:', '%1$s komentarzy', get_comments_number(), 'tytuł komentarzy'),
				number_format_i18n(get_comments_number())
			); 
		?>
	</h3>

	<ul class="comments-list">
		<?php
			wp_list_comments(array(
				'short_ping' => true,
				'avatar_size' => 50
			));
		?>
	</ul>
	<?php endif; ?>

	<?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
		<p class="no-comments">
			<?php _e('Możliwość komentowania jest zablokowana.') ?>
		</p>
	<?php endif ?>
	<?php comment_form(); ?>
</div>