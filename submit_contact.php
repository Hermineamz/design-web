<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'votre-email@example.com';
    $subject = 'Nouveau message de ' . $name;
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci, votre message a été envoyé.";
    } else {
        echo "Désolé, une erreur s'est produite. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode de requête non supportée.";
}
?>