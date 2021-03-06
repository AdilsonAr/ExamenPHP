<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    body{
        background-image: url(<?= constant('URL') ?>public/img/background_login.png);
    background-repeat: no-repeat;
    background-position: bottom;
    background-color: #1d494a;
    }
</style>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-4 col-md-4 col-sm-12 card">
                <div class="card-body">
                <img src="<?= constant('URL') ?>public/img/login.jpg" class="img-fluid d-block mx-auto">
                    <form action="<?= constant('URL') ?>Inicio/index" method="POST">
                        Usuario
                        <input type="text" class="form-control" name="txtUsuario">
                        Contraseña
                        <input type="password" class="form-control" name="txtContrasena">
                        <button class="btn btn-primary mt-2 btn-block btn-sm">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error",
            text: "Credenciales invalidas",
            icon: "error",
            button: "Ok",
        });
    </script>
</body>

</html>