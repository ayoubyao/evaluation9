<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="/creationPagePatients" method="post">
        <section class="vh-100" style="background-color: #609A7D;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">

                        <h1 class="text-white mb-4 text-center ">Page Creation patient</h1>

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <input type="text" name="creationPagePatients" style="display:none" />

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">nom:</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input name="nom"  type="text" class="form-control form-control-lg" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">mot de passe:</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="motdepasse" class="form-control form-control-lg" />

                                    </div>
                                </div>


                                <hr class="mx-n3">
                                <h6 class="mb-0">Ajouter la liste des allergène possibles :</h6>
                                <div class="">
                                    <div class="col-md-9 pe-5"><i class="fa fa-key"></i></div>
                                    <select class="form-control form-control-lg"name="selectAllergene" id="selectAllergene" type="text" placeholder="liste des allergène possibles:">

                                        <option value="">selectionner les allergenes</option>
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
                                    <input style="display:none;" type="text" id="allergenes" name="allergenes">
                                </div>


                                <div class="container my-3 bg-light">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn btn-success btn-lg">Crée un patient</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
<script>
    const buttonAjouterAllergene = document.getElementById("btn-ajoutAllergene");
    buttonAjouterAllergene.addEventListener("click", function(e) {
        var objLI = document.createElement('li');
        const nomAllergene = document.getElementById("selectAllergene")
        var value = nomAllergene.options[nomAllergene.selectedIndex].value;
        var text = nomAllergene.options[nomAllergene.selectedIndex].text;

        var input = document.getElementById("allergenes")
        input.value += text + "-"

        objLI.innerHTML = text
        objLI.value = value
        var objUL = document.getElementById('listeAllergenes');
        objUL.insertBefore(objLI, objUL.firstChild);
        e.stopPropagation();
    })
</script>

</html>