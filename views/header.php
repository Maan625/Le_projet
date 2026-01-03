<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <title> Accueil</title>
</head>
<!-- body -->

<body>
    <header class="header_accueil">
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="Images/logo.png" alt="logo" width="80" height="80"></a>
                <button class="navbar-toggler text-white text-bg-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item  text-bg-warning">
                            <a class="nav-link  " aria-current="page" href="/index.php"> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="/views/A propos.php"> A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Nos Cours
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="link_drop" href="/views/cours_communication.php"> cours en communication</a>
                                </li>
                                <li><a class="link_drop" href="/views/cours_réseaux_informatiques.php"> cours en Réseaux
                                        informatiques</a></li>
                                <li><a class="link_drop" href="/views/Tous_les_cours.php">tous les cours</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/views/Articles_techniques.php"> Articles
                                techniques </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/views/contact.php"> Contactez-Nous </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/views/nouveau_compte.php">Nouveau compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/views/connexion.php">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>