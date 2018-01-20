<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= get_bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.min.css"> 
    <!-- <link rel="stylesheet" type="text/css" href="<?= get_bloginfo('template_directory'); ?>/informator-styles.css"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="<?= get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body>

    <header>
      <div class="container">
        <a href="/" id="logo-link"><img src="<?= get_bloginfo('template_directory') ?>/img/logo_informatora_3_inverted.png" id="brand" alt="Informator Duszpasterstw Akademickich Poznań"/></a>

        <nav id="mainnav">
          <ul>
            <?php wp_list_pages( '&title_li=' ); ?>
            <!-- <li><a href="#" class="active">Strona główna</a></li>
            <li class="parent">
              <a href="#">Inicjatywy</a>
              <ul>
                <li><a href="#">Akademicka Noc Czuwania</a></li>
                <li><a href="#">Akademicka Procesja Bożego Ciała</a></li>
              </ul>
            </li>
            <li><a href="#">Artykuły</a></li>
            <li><a href="#" class="accent">Poznańskie duszpasterstwa</a></li>
            <li><a href="#">Misja</a></li>
            <li><a href="#">Kontakt</a></li> -->
          </ul>
        </nav>
      </div>
    </header>

    <section id="breadcrumb" class="container">
      <nav>
        <ul>
          <!-- <li><a href="/"><i class="fa fa-fw fa-home"></i></a></li> -->
          <!-- <li><a href="#">Artykuły</a></li> -->
          <!-- <li><a href="#">Wywiady</a></li> -->
          <!-- <li><a href="#">Wywiad z Księdzem Krzysztofem Grześkowiakiem</a></li> -->
        </ul>
      </nav>
    </section>