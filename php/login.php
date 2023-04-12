<!-- Back-end du formulaire d'inscription -->
<?php
session_start();
require_once '../conf/database.php';

if (isset($_POST['connect'])) {

    // Verification des champs
    if(empty($_POST['user_mail']) OR empty($_POST['user_password'])){
        echo "Veuillez compléter tous les champs...";
        die();
    }

    // Transformation des données
    $user_mail = htmlspecialchars($_POST['user_mail']);
    $user_password = sha1($_POST['user_password']);
    $data = [$user_mail, $user_password];

    // Récupération dans la base de données
    $user_insert = $database->prepare('SELECT * FROM user WHERE user_mail = ? AND user_password = ?');
    $user_insert->execute($data);

    // Vérification de la présence d'utilisateurs
    if($user_insert->rowCount() === 0){
        echo "Votre adresse mail et/ou mot de passe est/sont incorrect(s).";
        die();
    }
    
    // Tout a été vérifié, on enregistre une session
    $_SESSION['user_id'] = $user_insert->fetch()['user_id'];
    header('Location: ../index.html');
}
?>