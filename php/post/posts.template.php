<div class="tag-list tags">
    <button class="tag tag-0">
        <p>Tout</p>
    </button>
    <button class="tag tag-1">
        <p>Action</p>
    </button>
    <button class="tag tag-2">
        <p>Animation</p>
    </button>
    <button class="tag tag-3">
        <p>Aventure</p>
    </button>
    <button class="tag tag-4">
        <p>Comédie</p>
    </button>
    <button class="tag tag-5">
        <p>Drame</p>
    </button>
    <button class="tag tag-6">
        <p>Fantastique</p>
    </button>
    <button class="tag tag-7">
        <p>Horreur</p>
    </button>
    <button class="tag tag-8">
        <p>Policier</p>
    </button>
    <button class="tag tag-9">
        <p>Science-fiction</p>
    </button>
    <button class="tag tag-10">
        <p>Old-school</p>   
    </button>
</div>

<?php
foreach ($posts as $post) {
    echo "<p>" . $post["post_content"] . "</p>";
    echo date("d/m/Y", strtotime($post['post_date'])) .
        " à " . date("H:i", strtotime($post['post_date']));
?>
<form action="./index.php" method="POST">
    <input type="hidden" name="form" value="formulaire_suppression_post">
    <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>">
    <input type="submit" value="Supprimer">
</form>
<?php
}
?>