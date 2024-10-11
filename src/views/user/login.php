<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/PROJETO_LUAN/public/css/style.css">
<link rel="stylesheet" href="/PROJETO_LUAN/public/css/style.css">

    <title>login</title>
</head>

<body>
    <div class="container-login">

        <form action="/PROJETO_LUAN/login/validate" method="post">
<div class="container-logo"><img src="/PROJETO_LUAN/public/img/logo" alt="logo"></div>
            <div class="container-logo"></div>
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder=>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="container-action">
                
                <span>Não possui conta</span>
                <a href="/PROJETO_LUAN/register">Clique aqui</a>
            </div>
        </form>


    </div>
</body>

</html>