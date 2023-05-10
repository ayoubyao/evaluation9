<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
                padding: 10px;
            }

            .row.content {
                height: auto;
            }
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 15px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 9px 13px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 3px;
            background-color: #f2f2f2;
            padding: 5px;
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
                    <li><a href="/front/pages/accueil/pageApropos.php">À propos</a></li>
                    <li><a href="/front/pages/accueil/pageService.php">Mes services</a></li>
                    <li class="active"><a href="/front/pages/accueil/pageContact.php">page contact</a></li>
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
                    <center> Page Conatact </center>
                </h1>
                </head>


                <h3>Contacter Nous</h3>

                <div class=" ">
                    <form action="/action_page.php">
                        <label for="fname">Nom</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Prenom</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Pays</label>
                        <select id="country" name="country">
                            <option value="australia">France</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                        <label for="subject">Suject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
                <hr>
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