<?php
    
// accediamo alla sessione
session_start();
$generatedPassword = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <header class="container-fluid bg-secondary">
        <h1 class="text-warning fs-1 p-3 text-center">Genera la tua password sicura</h1>
    </header>
    
    <main class="container-fluid"> 

    <div class="col-6 m-auto pt-4">
            <h2 class="text-warning fs-4">Password sicura generata:</h2>
            <div class="text-white p-2 mb-3">   
                <?php echo  $generatedPassword  ?>
            </div>

            <a href="./index.php" class="text-dark bg-warning p-2 border border-0 rounded-3 text-uppercase fw-bold text-decoration-none ">Torna indietro</a>
        </div>


    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>