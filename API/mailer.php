<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Vérifie si l'un des champs requis est vide
    if((empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message']))) {
        // Affiche un message d'erreur si un champ est vide
        echo '<p class="infos">Veuillez remplir tous les champs</p>';
    } else {
        // Récupère les valeurs des champs du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        
        // Adresse email du destinataire
        $destinataire = 'taufanajoe@gmail.com';

        // Sujet de l'email
        // $sujet = "Sujet de l'email";

        // Contenu de l'email au format HTML
        $contenu = "<html><body>
                        <p>$nom</p>
                        <p>$telephone</p>
                        <p>$email</p>
                        <p>$sujet</p>
                        <p>$message</p>
                    </body></html>";

        // En-têtes de l'email
        $headers = "From: '.$destinataire\n";
        $headers .= "Content-Type:text/html; charset='UTF-8'";

        // Envoie l'email
        mail($destinataire, $sujet, $contenu, $headers);
    }

    // Affiche un message de succès après l'envoi de l'email
    echo '<p class="success">Votre message a bien été envoyé</p>';
}
?>
