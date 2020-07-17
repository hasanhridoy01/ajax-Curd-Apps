<?php 


   /**
    * DB Connection
    */
    require_once "../../apps/db.php";
    require_once "../../apps/function.php";

    //Get Some Values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];

    //file SetUp
    $data = Uploadsystem($_FILES['photo'],'../../media/student/',['jpg','png','jpeg']);
    $photo_name = $data['file_name'];

    //DB Connection With values
    $sql = "INSERT INTO student (name, email, cell, photo) VALUES ('$name','$email','$cell','$photo_name')";
    $data = $connection -> query($sql);

    echo '<p class="alert alert-success"> Student Added Successfull! </p>';



 ?>