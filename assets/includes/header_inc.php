<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?> | E-Z Unix</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= URL_CSS; ?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= URL_CSS; ?>offcanvas.css" rel="stylesheet">
    <link href="<?= URL_CSS; ?>sticky-footer.css" rel="stylesheet">
    <link href="<?= URL_CSS; ?>navbar.css" rel="stylesheet">
    <link href="<?= URL_CSS; ?>custom.css" rel="stylesheet">
    <link rel="icon" href="<?= URL; ?>assets/images/favicon.ico" type="image/x-icon">


  </head>

  <body>

    <div class="container">

    <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= URL . 'index.php'?>"><img src="<?= URL. 'assets/images/navbar_logo.png' ?>" alt='Ezix logo' style="height: 52px; top: -14px; display: block; position: relative;"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?= $active =="home" ? "class='active'" : "";?>><a href="<?= URL . 'index.php'?>">Introduction</a></li>
                  <li <?= $active =="whatisunix" ? "class='active'" : "";?>><a href="<?= URL . 'whatisunix.php'?>">Why use Unix?</a></li>
                  <li <?= $active =="history" ? "class='active'" : "";?>><a href="<?= URL . 'history.php'?>">History</a></li></a></li>
                </ul>
              </li>
              <li <?= $active =="windows" ? "class='active'" : "";?>>
                <a href="<?= URL . 'getstart/windows.php'?>">Getting Started</a>
              </li>
              <li class ="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Commands <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?= $active =="rudimentary" ? "class='active'" : "";?>><a href="<?= URL . 'commands/rudimentary.php'?>">Rudimentary Commands</a></li>
                  <li><a href="<?= URL . 'commands/basic.php'?>">Basic Commands</a></li>
                  <li><a href="<?= URL . 'commands/advanced.php'?>">Advanced Commands</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test Your Skills <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?= $active =="quiz" ? "class='active'" : "";?>><a href="<?= URL . 'skills/quiz.php/'?>">Quiz</a></li>
                  <li <?= $active =="match" ? "class='active'" : "";?>><a href="<?= URL . 'skills/match.php'?>">Matching</a></li>
                  <li <?= $active =="hangman" ? "class='active'" : "";?>><a href="<?= URL . 'skills/hangman.php'?>">Hangman</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?= $active =="faq" ? "class='active'" : "";?>><a href="<?= URL . 'help/faq.php'?>">FAQ</a></li>
                  <li <?= $active =="contact" ? "class='active'" : "";?>><a href="<?= URL . 'help/contact.php'?>">Contact Us</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav><!-- /.navbar -->


      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1 class="text-center"><?= $active =="home" ? "Welcome to<img src='" . URL . "assets/images/logo.png' alt='Ezix logo' class='img-responsive img-rounded'/>" : $title;?></h1>
