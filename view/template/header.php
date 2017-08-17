<?php 
  $base_url = 'http://localhost/crud/';
  $base_url_index = 'http://localhost/crud/index.php?';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>
      <?php 
        if(isset($title)) { 
          echo htmlentities($title); 
        } 
      ?>
    </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo $base_url ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>assets/css/style.css" rel="stylesheet"> -->
    <link href="<?php echo $base_url ?>assets/css/css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div>
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="margin-top: 80px;">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Mordor DMP Manager</a>
          </div>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo $base_url_index ?>&r=news">News</a></li>
            <li><a href="<?php echo $base_url_index ?>&r=reporter">Reporter</a></li>
            <li><a href="<?php echo $base_url_index ?>&r=categories">Categories</a></li>
          </ul>
        </div>