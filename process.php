<?php
// ca vérifie que le field nommé e-mail a bien été rempli
if (isset($_POST['email'])) {

    //Email information
    $contact_email = "demande-contact@ikagelfrance.fr";
    $newsletter_email = "abonnement-newsletter@ikagelfrance.fr";
    $nom = $_POST['nom'] . "\r\n";
    $nom_entreprise = $_POST['nom-entreprise'] . "\r\n";
    $rôle = $_POST['rôle'] . "\r\n";
    $email = $_POST['email'] . "\r\n";
    $téléphone = $_POST['téléphone'] . "\r\n";
    $nom = $_POST['nom'] . "\r\n";
    $activité = $_POST['activité'] . "\r\n";
    $message = "\r\n" . $_POST['message'] . "\r\n\n";
    $newsletter = $_POST['newsletter'] . "\r\n";

    //send email
    // il s'agit d'une fonction a plusieurs parametres facile a deviner
    mail(
        $contact_email,
        "Nouvelle demande client",
        'Nom : ' . $nom .
        'Poste : ' . $rôle .
        'Entreprise :  ' . $nom_entreprise .
        'Activité de l\'entreprise : ' . $activité .
        'Téléphone : ' . $téléphone .
        "\r\n" . 'Messages : ' . $message .
        'Abonnement NewsLetter : ' . $newsletter,
        "Mail du client : " . $email
    );

    if ($newsletter) {
        mail(
            $newsletter_email,
            "Nouvelle demande de Newsletter",
            'Nom : ' . $nom .
            'Poste : ' . $rôle .
            'Entreprise :  ' . $nom_entreprise .
            'Activité de l\'entreprise : ' . $activité .
            'Téléphone : ' . $téléphone .
            "\r\n" . 'Messages : ' . $message .
            'Abonnement NewsLetter : ' . $newsletter,
            "Mail du client : " . $email
        );
        header('Location: https://ikagelfrance.fr/contact.html');
    } else {
        header('Location: https://ikagelfrance.fr/contact.html');
    }

}
