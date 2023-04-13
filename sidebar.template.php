<nav class="sidebar active">
    <div class="profile-sidebar">
        <img
            class="header-pp"
            src="<? $user_pic ?>"
            alt="🖼️"
        />
        <div class="profile-info">
            <h3>Connecté en tant que</h3>
            <?php 
            echo "<h2>" . $user_name["user_name"] . "</h2>";
            ?>
            <h2 class="username"><? $user_name ?></h2>
            <div class="stats-abo">
                <div class="abonnes">
                    <h4 class="abonnes-stats-strong">15 533</h4>
                    <h4 class="abonnes-stats">abonnés</h4>
                </div>
                <div class="bar-abo"></div>
                <div class="abonnements">
                    <h4 class="abonnements-stats-strong">2349</h4>
                    <h4 class="abonnements-stats">abonnements</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li>
                <a href="">
                    <div class="menu-list" id="menu-accueil">
                        <i class="fi fi-sr-home"></i>
                        <h2>Accueil</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="menu-list" id="menu-messages">
                        <i class="fi fi-rr-comment-alt"></i>
                        <h2>Messagerie</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="menu-list" id="menu-profile">
                        <i class="fi fi-rr-user"></i>
                        <h2>Profil</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="menu-list" id="menu-notifications">
                        <i class="fi fi-rr-bell"></i>
                        <h2>Notifications</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="menu-list" id="menu-settings">
                        <i class="fi fi-rr-settings"></i>
                        <h2>Paramètres</h2>
                    </div>
                </a>
            </li>
        </ul>
        <div class="menu-list" id="disconnect">
            <i class="fi fi-sr-exit"></i>
            <h3 id="quit">Déconnexion</h3>
        </div>
    </div>
</nav>
