<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <header class="container-fluid bg-secondary">
        <h1 class="text-warning fs-1 p-3 text-center">Genera la tua password sicura</h1>
    </header>
    
    <main class="container-fluid"> 

        <div class="col-6 m-auto pt-4">
            <form action="index.php" method="GET">
                <div>
                    <label class="text-white p-2" for="passwordLunghezza">Scrivi la lunghezza della password che vuoi generare: </label>
                    <input class="w-100 p-2 border border-0 rounded-3" name="passwordLunghezza" id="passwordLunghezza" type="number" placeholder="8" min="8" max="16">
                </div>
                <input value="genera" id="genera" class="text-dark bg-warning p-2 w-100 border border-0 rounded-3 mt-3 text-uppercase fw-bold" type="submit">
            </form>
        </div>

    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>