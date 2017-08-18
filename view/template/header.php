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

    <link href="<?php echo $base_url ?>assets/css/css.css" rel="stylesheet">

  </head>

  <body>

    <div>
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="margin-top: 80px;">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Mordor DMP Manager</a>
          </div>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo $base_url_index ?>&r=creatures">Add Creature</a></li>
            <li><a href="<?php echo $base_url_index ?>&r=creatures">List Creature</a></li>
          </ul>
        </div>