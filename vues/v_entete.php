<?php
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Pascal Crochard">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Portfolio de Pascal Crochard</title>
        <meta name="description" content="Un portfolio de qualité effectué par un développeur de qualité">
        <!-- Intégration du CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Intégration du CSS perso -->
        <link href="../vues/css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="/vues/images/favicon.ico">
    </head>

    <body>
    <body>
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Navigation raccourcie</span>
            </button>
            <a class="navbar-brand" href="#">Mon portfolio</a>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item">
                        <a href="?uc=accueil" class="nav-link">
                            <span class="fa fa-home"></span> Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="?uc=cv" class="nav-link">
                            <span class="fa fa-id-badge"></span> CV
                        </a>
                    </li>

                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link"
                           data-toggle="dropdown" role="button">
                            <span class="fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header dropdown-item">
                                En autodidacte</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Création d'un bot discord <br>en JS (actuellement non fonctionnel)</a>
                            </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Site web pour le club d'aviron seynois</a>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                En entreprise</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Projet de 1ère année</a>
                            </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Projet de 2ème année</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link"
                           data-toggle="dropdown" role="button">
                            <span class="fa fa-graduation-cap"></span>
                            Jury E5 BTS SIO
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header dropdown-item" role="presentation">
                                Documentations contexte</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Présentation</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Application</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Missions à réaliser</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Annexes</a></li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Fiches d'examen</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Situation professionnelle n°1</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Situation professionnelle n°2</a></li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Démonstrations</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Démo SP n°1</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Démo SP n°2</a></li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Codes sources</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Sources SP n°1</a></li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="#">Sources SP n°2</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link"><span class="fa fa-envelope"></span>
                            Me contacter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </body>
</html>