<?php
require_once 'back/controller/securiteController.php';

require_auth();

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="/front/pages/administrateur/pageAdministrateur.css">
        <!------ Include the above in your HEAD tag ---------->

    </head>

    <body>

        <ul>
            <li>
                <div class="button"><a href="/creationPagePatients">Créer un patient</a></div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="button"><a href="/listRecettes">Voir les recettes</a></div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="button"><a href="/creationPageRecettes">Ajouter une recette</a></div>
            </li>
        </ul>





        <div class='light x1'></div>
        <div class='light x2'></div>
        <div class='light x3'></div>
        <div class='light x4'></div>
        <div class='light x5'></div>
        <div class='light x6'></div>
        <div class='light x7'></div>
        <div class='light x8'></div>
        <div class='light x9'></div>

    </html>

    <style>
        body {
            text-align: center;
            padding: 200px;
        }
        
        .button {
            display: inline-block;
            background: #0C0920;
            color: #fff;
            text-transform: uppercase;
            padding: 20px 50px;
            border-radius: 5px;
            box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
            cursor: pointer;
            -webkit-transition: all ease-in-out 300ms;
            transition: all ease-in-out 300ms;
        }
        
        .button:hover {
            box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
            -webkit-transform: translate(0px, -10px) scale(1.2);
            transform: translate(0px, -10px) scale(1.2);
        }
        
        a {
            color: #eee;
            text-decoration: none;
        }
        
        body {
            padding: 0;
            margin: 0;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh
        }
        
        h1 {
            color: #484848;
            font-size: 50px;
            font-weight: bold;
            font-family: monospace;
            letter-spacing: 7px;
            cursor: pointer
        }
        
        h1 span {
            transition: .5s linear
        }
        
        h1:hover span:nth-child(1) {
            margin-right: 5px
        }
        
        h1:hover span:nth-child(1):after {
            content: "'";
        }
        
        h1:hover span:nth-child(2) {
            margin-left: 30px
        }
        
        h1:hover span {
            color: #fff;
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 40px #fff;
        }
        /*made with ❤, by qpi65*/
    </style>