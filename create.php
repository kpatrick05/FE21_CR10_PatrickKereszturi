<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>Add New Book</title>
</head>
<body>
<?php require_once'components/navbar.php' ?>
    <div class="container mb-4">
    <form action="actions/a_create.php" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="title" placeholder="title">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Img</span>
  <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="img" >
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ISBN Code</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="isbn_code" placeholder="ISBN Code">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Short Description</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="short_description" placeholder="Short description">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Book type</span>
  <select id="books" name="type">
  <option value="book">Book</option>
  <option value="cd">CD</option>
  <option value="dvd">DVD</option>
</select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default"> Author First Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="author_first_name" placeholder="Author First Name">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default"> Author Last Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="author_last_name" placeholder="Author Last Name">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publisher Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publisher_name" placeholder="Publisher Name">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publisher Address</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publisher_address" placeholder="Publisher Address">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publish Date</span>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publish_date" placeholder="Publish Date">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
  <select  name="status">
  <option value="available">Available</option>
  <option value="available">Reserved</option>
</select>
</div>

        
        <input class="btn btn-success" type="submit" name="submit">
    </form>

    </div>
    <?php require_once'components/footer.php'; ?>
</body>
</html>