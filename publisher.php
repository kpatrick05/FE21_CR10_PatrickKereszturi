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
            $body .= '
            <tbody>
              <tr>
                <td>'.$row["publisher_name"]. '</td>
                
                
                </tr>
          ';
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <?php 'components/boot.php' ?>
    <title>Document</title>
</head>
<body>
    
<?php require_once'components/navbar.php'; ?>
    <div class="container text-center mb-4">
    <table class="table">
        <thead>
          <tr>
              
            <th scope="col">Publisher Name</th>
            
          </tr>
        </thead>
    <?= $body ?>
    </tbody>
        </table>
      
        <a class="btn btn-success" href="index.php">Go back</a>
    </div>
    <?php require_once'components/footer.php'; ?>
</body>
</html>