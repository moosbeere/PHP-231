<!doctype html>
<html lang="en">
  <head>
    <title>Notebook</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active"> -->
    <?php if(isset($_GET['p']) && $_GET['p']=='view') echo '<li class="nav-item active">';?>
        <a class="nav-link" href="?p=view">View </a>
      </li>
      <?php if(isset($_GET['p']) && $_GET['p']=='add') echo '<li class="nav-item active">';?>
        <a class="nav-link" href="?p=add">Add</a>
      </li>
      <?php if(isset($_GET['p']) && $_GET['p']=='update') echo '<li class="nav-item active">';?>
        <a class="nav-link" href="?p=update">Update</a>
      </li>
      <?php if(isset($_GET['p']) && $_GET['p']=='delete') echo '<li class="nav-item active">';?>
        <a class="nav-link" href="?p=delete">Delete</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <main>
        <?php if ($_GET['p'] == 'view'):?>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="?p=view&o=id" class="btn btn-secondary">Id</a>
            <a href="?p=view&o=date" class="btn btn-secondary">Date</a>
            <a href="?p=view&o=lastname" class="btn btn-secondary">Lastname</a>
        </div>
        <?php endif;?>

