      <article>
        <header>
          <h1><?php the_title(); ?></h1>

          <div class="details">
            <a href="#" class="author-face-wrap"><img src="/images/man.jpg" class="author-face"></a>
            <p class="author"><a href="#"><i class="fa fa-fw fa-user-circle-o"></i> <?php the_author() ?></a></p>
            <p class="date"><i class="fa fa-fw fa-calendar"></i> <?php the_date() ?></p>
            <ul class="tags accent">
              <!-- <li><a href="#" class="accent">wywiady</a></li>
              <li><a href="#" class="accent">inny tag</a></li>
              <li><a href="#" class="accent">testowy tag</a></li> -->
            </ul>
          </div>
        </header>

        <div class="body">
          <?= the_content(); ?>
        </div>
      </article>