<?php
    require_once "actions/db_connect.php";

    if($_GET["id"]) {
        $id = $_GET["id"];
        $sql= "SELECT * FROM books WHERE id = {$id}";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
        } else {
            header("location: error.php");
        }
        mysqli_close($connect);
    } else {
        header("location: error.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <?php require_once "components/boot.php" ?>
    <title>Update</title>
</head>
<body>
<?php require_once'components/navbar.php'; ?>
<div class="container text-center mb-5">
    <a class="btn btn-success m-3" href="index.php">Go Back</a>
<form action="actions/a_update.php" method="POST" enctype="multipart/form-data">
    <form action="actions/a_create.php" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="title" placeholder="title" value="<?= $data["title"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Img</span>
  <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="img" >
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ISBN Code</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="isbn_code" placeholder="ISBN Code" value="<?= $data["isbn_code"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Short Description</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="short_description" placeholder="Short description" value="<?= $data["short_description"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Book type</span>
  <select id="books" name="type" value="<?= $data["type"] ?>" selected>
  <option value="Book">Book</option>
  <option value="CD">CD</option>
  <option value="DVD">DVD</option>
</select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default"> Author First Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="author_first_name" placeholder="Author First Name" value="<?= $data["author_first_name"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default"> Author Last Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="author_last_name" placeholder="Author Last Name" value="<?= $data["author_last_name"] ?>">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publisher Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publisher_name" placeholder="Publisher Name" value="<?= $data["publisher_name"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publisher Address</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publisher_address" placeholder="Publisher Address" value="<?= $data["publisher_address"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Publish Date</span>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="publish_date" placeholder="Publish Date" value="<?= $data["publish_date"] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
  <select id="books" name="status" value="<?= $data["status"] ?>" selected>
  <option value="Available">Available</option>
  <option value="Reserved">Reserved</option>
</select>
</div>

        <input type="hidden" name="id" value="<?= $data["id"] ?>">
        <input type="hidden" name="img" value="<?= $data["img"] ?>">
        
        <input class="btn btn-success" type="submit" name="submit">
    
    </form>

</div>
    <?php require_once'components/footer.php'; ?>
</body>
</html>