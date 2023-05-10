<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/front/pages/recette/creationRecettes.css">
</head>

<body>
    <h1 class="text-center">Ajouter une recette</h1>

    <div class="container">
        <form action="/creationPageRecettes" method="post">
            <input type="text" name="isCreationRecettes" style="display:none">
            <div class="row">

                <h6 class="font-weight-bold">Ajouter le titre de la recette</h6>
                <div class="input-group input-group-icon">
                    <input name="titre" type="text" placeholder="le titre:" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter la description</h6>
                <div class="input-group input-group-icon">
                    <textarea class="input-group input-group-icon" id="description" name="description" rows="4" cols="50" placeholder="la description:"></textarea>
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter le temps de préparation</h6>
                <div class="input-group input-group-icon">
                    <input name="tempspre" type="text" placeholder="temps de préparation:" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter le temps de repos</h6>
                <div class="input-group input-group-icon">
                    <input name="tempsrepo" type="text" placeholder="temps de repos :" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter le temps de cuisson</h6>
                <div class="input-group input-group-icon">
                    <input name="tempscuisson" type="text" placeholder="temps de cuisson:" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter un ou plusieurs types de régime</h6>
                <div class="input-group input-group-icon">
                    <input name="typeregime" type="text" placeholder="Un ou plusieurs types de régime:" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter Les ingrédients</h6>
                <div class="input-group input-group-icon">
                    <input name="ingredients" type="text" placeholder="Les ingrédients:" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <h6 class="font-weight-bold">Ajouter Les étapes</h6>
                <div class="input-group input-group-icon">
                    <textarea class="input-group input-group-icon" id="description" name="etapes" rows="4" cols="50" placeholder="Les étapes:"></textarea>
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>

                <h6 class="font-weight-bold">Ajouter la liste des allergène possibles</h6>
                <div class="input-group input-group-icon">
                <div class="input-icon"><i class="fa fa-key"></i></div>
                    <select name="selectAllergene" id="selectAllergene" type="text" placeholder="liste des allergène possibles:">
                       

                        <?php $controller = new allergenesController();
                        $allergenes = $controller->getAllAllergenes();
                        foreach ($allergenes as $allergene) {
                            echo "<option value='" .  $allergene['idallergene'] . "'>" .  $allergene['nom']  .  "</option>";
                        }

                        ?>
                    </select>
                    <button class="btn btn-primary" type="button" id="btn-ajoutAllergene">+</button>
                    <ul id="listeAllergenes">

                    </ul>
                    <input style="display: none;" type="text" id="allergenes" name="allergenes">
                </div>
            </div>


            <div class="row">
                <div class="input-group">
                    <input type="checkbox" id="base" name="base" value="base">
                    <label for="base"> Recette de base</label><br>

                </div>
            </div>

            <div class="container my-3 bg-light">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-dark btn-lg">Crée une recette</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    const buttonAjouterAllergene = document.getElementById("btn-ajoutAllergene");
    buttonAjouterAllergene.addEventListener("click", function(e) {
        var objLI = document.createElement('li');
        const nomAllergene = document.getElementById("selectAllergene")
        var value = nomAllergene.options[nomAllergene.selectedIndex].value;
        var text = nomAllergene.options[nomAllergene.selectedIndex].text;

        var input =document.getElementById("allergenes")
        input.value += input.value + "-" + text 

        objLI.innerHTML = text
        objLI.value = value
        var objUL = document.getElementById('listeAllergenes');
        objUL.insertBefore(objLI, objUL.firstChild);
        e.stopPropagation();
    })
</script>

</html>