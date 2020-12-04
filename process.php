<?php
// ca vérifie que le field nommé e-mail a bien été rempli
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "vianney.hiron.projet@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //send email 
    mail($admin_email, "New Form Submission",  $phone, "From:" . $email);
    
    header('Location: https://nostalgic-dijkstra-b1aab4.netlify.app/decouvrir-ikagel.html');
  }