<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Password generator</title>
    <?php
    include __DIR__ .'/helper.php';
    session_start();
    $passwordGenerata = generateRanPwd($lunghezza);
    $_SESSION["passwordGenerata"] = $passwordGenerata;
    if ($passwordGenerata){
        header('Location: ./success.php');
    };

    ?>
</head>
<body>
<main>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-12">
            <form>
                <div class="input-group mb-3 d-flex">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="length">
                </div>
                <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="lettere">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Lettere</label>
                </div>
                <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="numeri">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Numeri</label>
                </div>
                <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="simboli">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Simboli</label>
                </div>
                <div class="input-group mb-3 d-flex">
                    <button class="btn btn-outline-primary col-6" type="submit" id="button-addon2"  >Genera</button>
                    <button class="btn btn-outline-secondary col-6" type="reset" id="button-addon2"  >Annulla</button>
                </div>


            </form>
        </div>
    </div>
</main>

</body>
</html>