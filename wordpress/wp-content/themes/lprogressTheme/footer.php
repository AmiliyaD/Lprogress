  <!-- подвал -->
  <footer>
            <div class="row footer marg_might_top">

            <nav class="navbar  navbar-expand-lg">
            <a class="navbar-brand" href="http://lprogress/wordpress/">
            <img src="<?php echo get_template_directory_uri() . '/verstka/web/logo/Lprogress.png' ?>" width="150px" alt="Картинка">
                    <!-- <img src="web/logo/LProgress.png" width="150px" alt="Картинка"> -->

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse header_left  navbar-collapse" id="navbarNavAltMarkup">
               <?php
               wp_nav_menu([
                 'theme_location'=>'footer',
                 'container' => '',
                 'items_wrap' => '%3$s'
               ])
               ?>
                    <div class="nav_soc">
                        <?php dynamic_sidebar('footer_social') ?>
                    </div>
                </div>
            </nav>
    
            </div>
        </footer>
    </div>

</body>

</html>