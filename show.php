<?php
    require_once 'actions/db_connect.php';

    if($_GET["id"]) {
        $id = $_GET["id"];
        $sql= "SELECT * FROM books WHERE id = {$id}";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
        } else {
            header("location: error.php");
        }
        mysqli_close($connect);
    } else {
        header("location: error.php");
    }

    $body="";

    foreach($rows as $row) {
        $body .= '<div class=" mb-5 col col-12 d-flex align-items-stretch">
        <div class="row g-1 container-fluid card shadow-lg bg-card-color">
        <img src=img/'.$row["img"].' class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$row["title"].'</h5>
          <hr>
          <p class="card-text">ISBN Code : '.$row["isbn_code"].'<br> Publish Date:'.$row["publish_date"].'</p>
          <p class="card-text">Short description: '.$row["short_description"].'</p>
          <p class="card-text">Type: '.$row["type"].'</p>
          <p class="card-text">Author First Name: '.$row["author_first_name"].'</p>
          <p class="card-text">Author Last Name: '.$row["author_last_name"].'</p>
          <p class="card-text">Publisher Name: '.$row["publisher_name"].'</p>
          <p class="card-text">Publisher Address: '.$row["publisher_address"].'</p>
          <p class="card-text">Publisher Date: '.$row["publish_date"].'</p>
          <p class="card-text">Status: '.$row["status"].'</p>
          
          <a href="index.php" class="btn btn-success">Go Back</a>
        </div>
      </div>
      </div>
      ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Details</title>
</head>
<body>
<?php require_once'components/navbar.php'; ?>
<div class="container text-center d-flex align-items-center justify-content-center">

<?=$body?>

</div>
<?php require_once'components/footer.php'; ?>
</body>
</html>