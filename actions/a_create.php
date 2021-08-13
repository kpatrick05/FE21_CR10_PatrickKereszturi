<?php
    require_once 'db_connect.php';
    require_once 'file_upload.php';

    if($_POST) {
        $title = $_POST["title"];
        $isbn_code = $_POST["isbn_code"];
        $short_description = $_POST["short_description"];
        $type = $_POST["type"];
        $author_first_name = $_POST["author_first_name"];
        $author_last_name = $_POST["author_last_name"];
        $publisher_name= $_POST["publisher_name"];
        $publisher_address= $_POST["publisher_address"];
        $publish_date= $_POST["publish_date"];
        $status= $_POST["status"];
        
        
        $uploadError ="";
        
        $img = file_upload($_FILES["img"]);

        $sql = "INSERT INTO `books` ( `title`, `img`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ( '$title', '$img->fileName', $isbn_code, '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$status')";

        if(mysqli_query($connect, $sql) ==true) {
            $class = "success";
            $message = "The entry below was successfully created <br>
            <table class='table w-50'>
            <tr>
                <td> $title </td>
                <td> $author_first_name </td>
            </tr>
            </table><hr>";
        } else {
            $class ="danger";
            $message = "Error while creating record. Try again: <br>" . $connect->error;
        }
        $uploadError = ($img->error !=0) ? $img->ErrorMessage : "";
        mysqli_close($connect);
    } else {
        header("Location: ../error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../components/boot.php"; ?>
    <title>Document</title>
</head>
<body>
<div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
       
</body>
</html>