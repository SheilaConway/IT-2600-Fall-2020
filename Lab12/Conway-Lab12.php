<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "upload";

    $errors = []; 

    $fileExtensionsAllowed = ['gif','jpg','png']; 
	
    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG, PNG or GIF file";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "You uploaded the file" . basename($fileName)."\r\n";
        } else {
          echo "An error occurred.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }

   $mydir = 'upload'; 
  
   $myfiles = scandir($mydir); 
   
   print_r($myfiles)."\r\n"; 
?>
