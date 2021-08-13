<?php
function file_upload($img) {
   $result = new stdClass();//this object will carry status from file upload
   $result->fileName = 'book.jpg';
   $result->error = 1;//it could also be a boolean true/false
   //collect data from object $img
   $fileName = $img["name"];
   $fileType = $img["type"];
   $fileTmpName = $img["tmp_name"];
   $fileError = $img["error"];
   $fileSize = $img["size"];
   $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));    
   $filesAllowed = ["png", "jpg", "jpeg"];
   if ($fileError == 4) {      
       $result->ErrorMessage = "No img was chosen. It can always be updated later.";
       return $result;
   } else {
       if (in_array($fileExtension, $filesAllowed)) {
           if ($fileError === 0) {
               if ($fileSize < 500000) { //500kb this number is in bytes
                   //it gives a file name based microseconds
                   $fileNewName = uniqid('') . "." . $fileExtension; // 1233343434.jpg i.e
                   $destination = "../img/$fileNewName";
                   if (move_uploaded_file($fileTmpName, $destination)) {
                       $result->error = 0;
                       $result->fileName = $fileNewName;
                       return $result;
                   } else {    
                       $result->ErrorMessage = "There was an error uploading this file.";
                       return $result;
                   }
               } else {                                      
                   $result->ErrorMessage = "This img is bigger than the allowed 500Kb. <br> Please choose a smaller one and update the product.";
                   return $result;
               }
           } else {                              
               $result->ErrorMessage = "There was an error uploading - $fileError code. Check the PHP documentation.";
               return $result;
           }
       } else {                      
           $result->ErrorMessage = "This file type can't be uploaded.";
           return $result;
       }
   }
}