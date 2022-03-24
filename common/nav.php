<nav class="navbar dark-mode" role="navigation">
    <div class="navbar__logo">CHAPO AUTO</div>
    <ul class="navbar__links">
        <li class="navbar__link first"><a href="index.php?page=occasions">Occasions</a></li>

        <li class="navbar__link second"><a href="index.php?page=location">Location</a></li>

        <li class="navbar__link third"><a href="#">Réparation / Entretien</a></li>
        <?php if (isset($_SESSION['etatConnexion']) && $_SESSION['etatConnexion'] == 1) { ?>

        <li class="navbar__link four"><a href="#">Mon profil</a></li>
        <li class="navbar__link four"><a href="index.php?page=deconnexion">Deconnexion</a></li>
        <?php } else { ?>
        <li class="navbar__link four"><a href="index.php?page=authentif">Connexion</a></li>
        <li class="navbar__link fifth"><a href="index.php?page=Inscription">Inscription</a></li>
        <?php } ?>
        <li class="navbar__link sixte"><a href="index.php?page=tarifs et gamme">Tarifs et Gamme</a></li>

    </ul>
    <button class="burger">
        <span class="bar"></span>
    </button>
</nav>