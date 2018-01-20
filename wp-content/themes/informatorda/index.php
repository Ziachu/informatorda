<?php get_header() ?>
		<main class="container">
		
			<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part('content', get_post_format());
					}

					next_posts_link('Starsze wpisy');
					previous_posts_link('Nowsze wpisy');
				}
			?>

			<?php get_sidebar() ?>
    </main>

<?php get_footer() ?>