<?php
    require_once 'actions/db_connect.php';

    $sql ="SELECT * FROM books";

    $result = mysqli_query($connect, $sql);

    $body = "";
    $nOR = mysqli_num_rows($result);

    if($nOR == 0) {
        $body = "No results";
    } else {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($rows as $row) {
            $body .= '<div class=" mb-5 col col-12 col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="row g-1 container-fluid card shadow-lg bg-card-color">
            <div class="";">
            <img style="width:100%; height:220px; object-fit: cover;" src=img/'.$row["img"].' class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$row["title"].'</h5>
              <p class="card-text">'.$row["short_description"].'<br> '.$row["publish_date"].'</p>
              <a href="update.php?id='.$row["id"].'" class="m-1 btn btn-success">Update</a>
              <a href="delete.php?id='.$row["id"].'" class="m-1 btn btn-danger">Delete</a>
              <a href="show.php?id='.$row["id"].'" class="m-1 btn btn-warning">Show More Details</a>
            </div>
            </div>
            </div>
          </div>
          ';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Library</title>
</head>
<body>
    <?php require_once'components/navbar.php'; ?>
    <div class="container">
    <div class="row">
    <?= $body ?>
    </div>
    </div>
    <?php require_once'components/footer.php'; ?>

</body>
</html>