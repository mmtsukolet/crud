<?php include 'view/template/header.php'; ?>

    <div class="col-sm-9 col-md-9  main" style="margin-top:80px;">
      
      <h2 class="sub-header">List Category</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <a class="btn btn-primary" href="<?php echo $base_url_index ?>&r=creatures&op=create">create</a>
          <tbody>
            <?php foreach ($creatures as $m): ?>
            <tr>
                <td><a href="<?php echo $base_url_index ?>r=creatures&op=show&id=<?php echo $m->id; ?>"><?php echo htmlentities($m->id); ?></a></td>
                <td><?php echo htmlentities($m->name); ?></td>
                <td><?php echo htmlentities($m->status); ?></td>
                <td>
                    <a class="btn btn-danger" href="<?php echo $base_url_index ?>r=creatures&op=delete&id=<?php echo $m->id; ?>" onclick="return confirm('Are you sure?')">delete</a>
                    <a class="btn btn-warning" href="<?php echo $base_url_index ?>r=creatures&op=update&id=<?php echo $m->id; ?>">update</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>
      
    </div>
      
<?php include 'view/template/footer.php'; ?>