      <!-- <article>
        <header>
          <h1><?= the_title(); ?></h1>

          <div class="details">
            <a href="#" class="author-face-wrap"><img src="/images/man.jpg" class="author-face"></a>
            <p class="author"><a href="#"><i class="fa fa-fw fa-user-circle-o"></i> <?= the_author() ?></a></p>
            <p class="date"><i class="fa fa-fw fa-calendar"></i> <?= the_date() ?></p>
            <ul class="tags accent">
              <li><a href="#" class="accent">wywiady</a></li>
              <li><a href="#" class="accent">inny tag</a></li>
              <li><a href="#" class="accent">testowy tag</a></li>
            </ul>
          </div>
        </header>

        <div class="body">
          <?= the_content(); ?>
        </div>
      </article> -->

      <div class="blog-post">
        <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

        <a href="<?php comments_link() ?>">
          <?php printf(_nx('1 komentarz', '%1$s komentarzy', get_comments_number(), 'tytuł komentarzy', 'textdomain'), number_format_i18n(get_comments_number())) ?>
        </a>

        <?php the_excerpt(); ?>

      </div><!-- /.blog-post -->