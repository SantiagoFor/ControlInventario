<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
<div class="container">
    <div class="row">
        <div class="card offset-md-2 col-md-4" >
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form action="#"  method="post">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo">
                    </div>
                    <div class="mb-3">
                        <label for="clave" class="form-label">Password</label>
                        <input type="password" class="form-control" id="clave" name="clave">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('plantilla/footer.html');
?>