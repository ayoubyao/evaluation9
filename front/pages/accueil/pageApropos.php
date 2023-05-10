<!DOCTYPE html>
<html lang="en">

<head>
    <title>diététicienne-nutritionniste</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */

        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="/front/pages/accueil/accueil.php">Acceuil</a></li>
                    <li class="active"><a href="/front/pages/accueil/pageApropos.php">À propos</a></li>
                    <li><a href="/front/pages/accueil/pageService.php">Mes services</a></li>
                    <li><a href="/front/pages/accueil/pageContact.php">page contact</a></li>
                    <li><a href="/front/pages/accueil/pageMlegale.php">page mentions légales</a></li>
                    <li><a href="/front/pages/accueil/pagePolitique.php">page politique de confidentialité</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/front/pages/connexion.php"><span class="glyphicon
                                    glyphicon-log-in"></span>Se connecter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <h1>
                    <center> Page A propos </center>
                </h1>
                <p>Sandrine Coupart est une diététicienne-nutritionniste dont le cabinet est situé à Caen. En tant que professionnelle de santé, elle prend en charge des patients dans le cadre de consultations diététiques. Madame Coupart anime également
                    des ateliers de prévention et d'information sur la nutrition.</p>
                <hr>
                <h5>L'important c'est le contenu du site, les recettes et les informations que vous pouvez y trouver, mais vous avez été assez nombreux à vouloir savoir qui était derrière tout ça </h5>
                <hr>
                <h2>
                    <center> Le contenu</center>
                </h2>
                <p>J'essaie de vous faire partager cette passion pour la cuisine via ce site, au fur et à mesure de mes essais et expériences, et des recettes que j'ai réussi à fignoler.
                    Mon but est de mettre en ligne des recettes qui soient claires, bien expliquées, bien commentées, et dont la réussite soit à la portée de tout le monde. J'y ajoute autant de photos que possible, j'insiste sur les points délicats, je répète toujours les quantités dans la recette ("ajouter les 100 g de sucre" plutôt que "ajouter le sucre") et je termine avec des conseils supplémentaires, des idées de variantes et, quand c'est possible, je cite mes sources.

                    Au fil des pages, vous trouverez peut-être des recettes un peu moins faciles, je les signale avec le symbole , ce n'est pas qu'elles soient vraiment difficiles (sinon elles ne seraient pas sur le site), mais elles réclament un peu plus d'attention de votre part : soit il y a quelques points délicats, mais dans ce cas ils sont tout particulièrement commentés, soit il peut y avoir un peu plus de travail que d'habitude, et donc ça peut être un peu long à préparer. Mais pas d'inquiétude, c'est de toute façon très faisable, le ne veut donc qu'attirer votre attention, et indiquer "Attention, il faudra bien lire cette recette".

                    Ces recettes sont le fond de ce site bien sur, mais je ne veux pas que ce soit seulement un catalogue. C'est pourquoi vous trouverez aussi des rubriques connexes, qui sont consacrées à des choses plus générales sur le matériel, les trucs et astuces, des thèmes particuliers, etc... Il y a également une partie qui est consacrée à "c'est pas de la cuisine", un espace dédié aux autres choses qui m'intéressent. Je vous laisse découvrir tout ça à votre guise</p>
            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>