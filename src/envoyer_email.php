<?php
if(isset($_POST['envoyer'])) {
    $to = "strongsolutions.contact@gmail.com"; // Adresse e-mail de destination
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $societe = $_POST['societe'];
    $corps = $_POST['corps'];
    $subject = "Nouveau message de $nom $prenom de la société $societe";
    $message = "Nom: $nom\nPrénom: $prenom\nSociété: $societe\n\nMessage:\n$corps";

    // En-têtes pour l'e-mail
    $headers = "From: " . $nom . " <" . $to . ">\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'e-mail
    mail($to, $subject, $message, $headers);

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: confirmation.html");
    exit();
}
?>
