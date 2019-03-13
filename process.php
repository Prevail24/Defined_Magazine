<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "hessedarren@gmail.com";
    $email = $_POST['email'];
    $title = $_POST['title'];
    $photographer = $_POST['photographer'];
    $model = $_POST['model'];
    $MUAhair = $_POST['MUAhair'];
    $wardrobe = $_POST['wardrobe'];
    $upload = $_POST['upload'];
    
    //send email
    mail($admin_email, "New Form Submission", $email . ' - ' . $title, "From:" . $email);
    
    header('Location: /success.html');