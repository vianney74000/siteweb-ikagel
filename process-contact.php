<?php
// ca vérifie que le field nommé e-mail a bien été rempli
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "vianney.hiron.projet@gmail.Com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    // il s'agit d'une fonction a plusieurs parametres facile a deviner
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://edgeledger.net/success.html');
  }