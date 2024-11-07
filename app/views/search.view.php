<?php require('partials/head.php'); ?>

<form class="p-5" method="GET" action="search">
    <div class="mb-3">
        <label for="search" class="form-label">Search</label>
        <input name="search" type="text" class="form-control" id="search">
    </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>

<ul class="list-group">
    <?php foreach ($results as $result) : ?>
        <li class="list-group-item list-group-item-danger"><?php echo $result; ?></li>
    <?php endforeach; ?> 
</ul>

<?php require('partials/footer.php'); ?>
