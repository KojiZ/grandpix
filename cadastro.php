<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlindZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url('./img/serio.gif');background-size: cover;">


    <div class="container">
        <div class="card" style="margin-top: 40%; background-color: rgba(0,0,0,0.5);border-color:white">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o seu email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Senha:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe a sua senha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Confirme sua senha:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe a sua igual a anterior">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">CPF:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe o seu CPF">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input text-white" id="exampleCheck1">
                        <label class="form-check-label text-white" for="exampleCheck1">Aceito os <a href="" style="color:gray">TERMOS DE USO</a></label>
                    </div>
                    <br>
                    <center><button type="submit" class="btn btn-outline-dark text-white">CADASTRAR</button>
                        <br>
                        <br>
                        <h8 class="text-white">Já possui uma conta ??<a href="cadastro.php" style="color:gray;text-decoration:none"> LOGAR</a></h8>
                    </center>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>