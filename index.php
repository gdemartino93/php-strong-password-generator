<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Password generator</title>
    <?php
    $lunghezza = $_GET["length"] ?? 0;
    

    // funzione per generare random password:
    function generateRanPwd($length)
    {
    
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()-+={[}]:;@#|<,>.?/';
    $lunghezzaCharacters = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomPwd .= $characters[rand(0, $lunghezzaCharacters - 1)];
    }
    return $randomPwd;
}
;
    echo generateRanPwd($lunghezza);
    ?>
</head>
<body>
<main>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-3">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="length">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2"  >Genera</button>
                </div>
            </form>
        </div>
    </div>
</main>

</body>
</html>