<?php include 'view/template/header.php'; ?>

<div class="col-sm-9 col-md-9  main" style="margin-top:80px;">

    <?php if ( $errors ) : ?>
        <div class="alert alert-danger" role="alert">
            <?php 
              foreach ( $errors as $field => $error )
                echo '<strong>Oh snap!</strong> '.htmlentities($error);
            ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="<?php echo htmlentities($name) ?>" id="catName" name="name" placeholder="name category">
        <input type="hidden" name="form-submitted" value="1" />
        <input type="hidden" name="id" value="<?php echo htmlentities($id) ?>" />
        <input type="submit" class="btn btn-default" value="Submit" />
      </div>
    </form>

</div>
      
<?php include 'view/template/footer.php'; ?>
