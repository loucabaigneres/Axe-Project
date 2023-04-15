<div class="overlay hidden">
    <div class="modal">
        <h2>Quelque chose à dire ?</h2>
        <div class="white-bar"></div>
        <div id="modal-tags" class="tags">
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
        <div class="whole-post">
            <form class="formPost" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="form" value="formulaire_ajout_post">
                <textarea placeholder="Écrivez ici..." name="post_content" id="post_content" class="posting" cols="30" rows="10" required></textarea>
                <label for="file">Ajouter un média</label>
                <input type="file" accept="image/png, image/jpeg, image/gif" class="upload-file">
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