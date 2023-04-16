<section class="accueil">
    <div class="tags">
        <button class="tag tag-0">Tout</button>
        <button class="tag tag-1">Action</button>
        <button class="tag tag-2">Animation</button>
        <button class="tag tag-3">Aventure</button>
        <button class="tag tag-4">Comédie</button>
        <button class="tag tag-5">Drame</button>
        <button class="tag tag-6">Fantastique</button>
        <button class="tag tag-7">Horreur</button>
        <button class="tag tag-8">Policier</button>
        <button class="tag tag-9">Science-fiction</button>
        <button class="tag tag-10">Old-school</button>
    </div>
    <div class="all-publications">
        <div class="publication tag-9">
            <div class="div-publication">
                <img class="pp" src="./images/pp/PPLou.png" alt="🖼️" />
                <div class="content-publication">
                    <div class="id">
                        <div class="name">
                            <h2 class="username">Diamond</h2>
                        </div>
                        <div class="div-handle">
                            <h3 class="handle">@diams</h3>
                            <h3 class="dash">-</h3>
                            <h3 class="time">16mn</h3>
                        </div>
                    </div>
                    <div class="post">
                        <p> Bon... J'ai craqué, c'est parti pour 3h40 de plaisir ! </p>
                        <img src="./images/img-post/avatar.jpg" alt="🖼️" />
                    </div>
                </div>
            </div>
            <div class="transition"></div>
        </div>
        <div class="publication tag-2">
            <div class="div-publication">
                <img class="pp" src="./images/pp/PPLou.png" alt="🖼️" />
                <div class="content-publication">
                    <div class="id">
                        <div class="name">
                            <h2 class="username">Diamond</h2>
                        </div>
                        <div class="div-handle">
                            <h3 class="handle">@diams</h3>
                            <h3 class="dash">-</h3>
                            <h3 class="time">16mn</h3>
                        </div>
                    </div>
                    <div class="post">
                        <p> Officiellement mon film favori de l'année ! </p>
                        <img src="./images/img-post/mario.jpg" alt="🖼️" />
                    </div>
                </div>
            </div>
            <div class="transition"></div>
        </div>
    </div>
    <?php
    foreach ($posts as $post) {
        echo "<p>" . $post["post_content"] . "</p>";
        // echo "<img" . $post["post_pic"] . "/>";
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
</section>