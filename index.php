<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login | Hello PHP</title>
</head>
<body>
    <div class="container d-flex align-items-center min-vh-100 w-25">
        <form action="#" class="form-group justify-content-center">
        <div class="input-group mb-2">
            <input type="email" name="mail" aria-describedby="input1" placeholder="usuario" aria-label="usuario" class="form-control">
            <div class="input-group-prepend">
                <span class="input-group-text" id="input1">@mail.com</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="input2">Senha</span>
            </div>
            <input type="password" name="password" aria-describedby="input2" class="form-control">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Acessar</button>
        </div>
        </form>
    </div>
</body>
</html>