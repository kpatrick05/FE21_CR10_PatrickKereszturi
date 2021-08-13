<?php
    require_once "actions/db_connect.php";

    if($_GET["id"]){
        $id = $_GET["id"];
        $sql = "SELECT * FROM books WHERE id = $id";

        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) == 1){
            $data = mysqli_fetch_assoc($result);
        }else {
            header("Location: error.php");
        }
        mysqli_close($connect);
    }else {
        header("Location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php" ?>
    <title>Document</title>
</head>
<body>
<?php require_once'components/navbar.php'; ?>
<div class="container">
    <form action="actions/a_delete.php" method="POST">
    <h1 class="text-center m-4">Are you sure you want to delete? </h1>  
    <a href="index.php" class="mb-3 btn btn-success">Go Back</a>
        <div class=" mb-3 col col-12 d-flex align-items-stretch">
        <div class="row g-1 container-fluid card shadow-lg bg-card-color">
        <img src="img/<?= $data["img"] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $data["title"] ?></h5>
          <a class="btn btn-outline-success" href="index.php"> No </a>
        <input class="btn btn-outline-danger"type="submit" value="Yes">
          
        </div>
      </div>
      
        <input type="hidden" name="id" value="<?= $data["id"] ?>">
        
        <input type="hidden" name="img" value="<?= $data["img"] ?>">
        
        
    </form>
    </div>
    </div>
    <?php require_once'components/footer.php'; ?>
</body>
</html>