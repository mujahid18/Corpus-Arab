<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/sblanding/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/sblanding/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/sblanding/'); ?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/sblanding/'); ?>css/landing-page.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Arabic Corpus</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-light bg-light" style="padding-left: 377px;">
          <li class="nav-item active">
            <a class="nav-link" href="#">Word Sketch <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Word Sketch Differents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thesauros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Concordance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Wordlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">N-grams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Keywords</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="<?= base_url('auth'); ?>">Sign In</a>
          </li>
        </ul>
      </div>
    </nav>