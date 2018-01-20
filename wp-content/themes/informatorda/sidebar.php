<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p><?php the_author_meta( 'description' ); ?> </p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->

      <section id="read-also">
        <p class="headline">Przeczytaj także:</p>
        <ul class="article-list">
          <li id="sky">
            <a href="#">
              <p class="title">Etiam condimentum, tortor ac consequat porta</p>
              <div class="author">
                <div class="author-face-wrap">
                  <img src="/images/man.jpg" class="author-face">
                </div>
                <p class="author-name">Waldemar</p>
              </div>
            </a>
          </li>

          <li id="silhoutte">
            <a href="#">
              <p class="title">Ut a imperdiet diam.</p>
              <div class="author">
                <div class="author-face-wrap">
                  <img src="/images/man.jpg" class="author-face">
                </div>
                <p class="author-name">Waldemar</p>
              </div>
            </a>
          </li>

          <li id="tree">
            <a href="#">
              <p class="title">Pellentesque facilisis blandit ex, eget facilisis tellus lobortis ac.</p>
              <div class="author">
                <div class="author-face-wrap">
                  <img src="/images/man.jpg" class="author-face">
                </div>
                <p class="author-name">Waldemar</p>
              </div>
            </a>
          </li>
        </ul>
      </section>
  
      <section id="comments">
        
      </section>