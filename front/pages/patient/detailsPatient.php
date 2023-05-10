
<?php 
require_once __DIR__ . '../../../../back/controller/securiteController.php';

require_auth();
?>
<!-- creation du bouton de cerfation patient -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="front/pages/patient/list.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container text-center text-white">
        <div class="row pt-5">
            <div class="col-lg-8 mx-auto">
            <h1>details patients</h1>
            </div>
        </div>
    </div>

<div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <!-- Fixed header table-->
                <div class="table-responsive">
<?php
$controller = new patientsController();
$idPatient = $_SESSION['idutilisateur'];
        $patient = $controller->getPatientByID($idPatient );

        echo "<p>username : " . $patient->username . "</p>";
        echo "<p>password : " . $patient->motdepasse . "</p>";
        echo "<p>allergene : " . $patient->allergene . "</p>";

?>
</div>
                <!-- End -->
            
            </div>
        </div>
    </div>

</body>

