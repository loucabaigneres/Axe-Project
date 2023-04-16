<div class="overlay hidden">
    <div class="modal">
        <h2>Quelque chose à dire ?</h2>
        <div class="white-bar"></div>
        <div id="modal-tags" class="tags">
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
        <div class="whole-post">
            <form class="formPost" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="form" value="formulaire_ajout_post">
                <textarea placeholder="Écrivez ici..." name="post_content" id="post_content" class="posting" cols="30" rows="10" required></textarea>
                <br>
                <input name="post_pic" id="post_pic" type="file" accept="image/png, image/jpeg, image/gif" class="upload-file">
                <input id="distribute" class="send_button" type="submit" value="Poster">
            </form>
            <!-- <div class="add-file">
                <div>
                    <i class="fi fi-rr-picture"></i>
                    <p>Média</p>
                </div>
            </div> -->
        </div>
        <div class="div-distribute">
            <div id="not-distribute">
                <p>Hm, non</p>
            </div>
            <!-- <button id="distribute" class="send_button" type="submit" value="Envoyer">
                <p>Poster</p>
            </button> -->
        </div>
    </div>
</div>