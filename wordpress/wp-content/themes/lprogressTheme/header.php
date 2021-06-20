
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,900&display=swap"
        rel="stylesheet">
    <title>Главная</title>
</head>
<?php wp_head() ?>

<body>

    <div class="container">
        <!-- header -->
        <div class="row  header">
        <nav class="navbar  navbar-expand-lg">

            <a class="navbar-brand" href="http://lprogress/wordpress/">
            <img src="<?php echo get_template_directory_uri() . '/verstka/web/logo/Lprogress.png' ?>" width="150px" alt="Картинка">
                    <!-- <img src="web/logo/LProgress.png" width="150px" alt="Картинка"> -->

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse header_left navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav header_a">
                    <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => '',
                    'items_wrap' => '%3$s' 
  
                ]) ?>
                
            
                    </div>
                </div>
            </nav>

          

        </div>
    </div>