<?php 
require_once '../conf/database.php';

// Back-end de classement des posts
$request = $database->prepare("SELECT * FROM post ORDER BY date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);


// Back-end de recherche d'un post

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (!empty($_GET['recherche'])) {
        $data = [
            "recherche" => "%" . $_GET['recherche'] . "%",
        ];

        $request_search = $database->prepare("SELECT * FROM post WHERE post_content LIKE :recherche");
        $request_search->execute($data);
        $posts = $request_search->fetchAll(PDO::FETCH_ASSOC);
    }
}


// Back-end de création d'un post

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_post") {
        if (!empty($_POST['post_content'])) {
            $post_content = $_POST['post_content'];

            $data = [
                "post_content" => $post_content
            ];

            $request_insert = $database->prepare("INSERT INTO post (post_content, date) VALUES (:post_content, NOW())");
            $post_inserted = $request_insert->execute($data);
        }
    }
}

// Back-end de suppression d'un post

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_post") {
        if (!empty($_POST['post_id'])) {
            $data = [
                "post_id" => $_POST['post_id']
            ];

            $request_delete = $database->prepare("DELETE FROM post WHERE post_id = :post_id");
            $post_deleted = $request_delete->execute($data);
            header('Location: ../index.php');
        }
    }
}

?>