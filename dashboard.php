<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlindZone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">

    <style>
        .fixed-bottom-row {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            /* Ajuste o valor de z-index conforme necessário */
        }


        .custom-link {
            text-decoration: none;
            color: white;
            font-size: 30px;
        }

        .custom-link p {
            font-size: 15px;
        }

        .custom-col {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="width: 100%;">
        <div class="row bg-dark" style="padding-top: 15px; padding-bottom: 15px">
            <div class="col-4 custom-col">
                <a href="#" class="btn custom-link imgfg" style="border-style: none;">
                    <i class="bi bi-person-circle"></i><br>
                    <p>Perfil</p>
                </a>
            </div>
            <div class="col-4 custom-col">
                <img src="img/out.png" alt="" width="100%">
            </div>
            <div class="col-4 custom-col">
                <a href="#" class="btn custom-link imgfg" style="border-style: none;">
                    <i class="bi bi-gear"></i><br>
                    <p>Configurações</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row " style="background-color: gray;">
            <center>
                <h1 style="font-family:monospace;color:whitesmoke;margin-top:10px;margin-bottom:10px">CADASTRAR COMANDO</h1>
            </center>
        </div>
        <br>
        <div class="row">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>NOME DO COMANDO:</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o nome do comando">
            </div>
        </div><br>
        <label for="exampleInputEmail1" class="form-label"><b>COMANDO:</b></label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecione o comando</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <br>
        <label for="exampleInputEmail1" class="form-label"><b>Áudio: </b></label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-mic"></i></span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Fale o comando desejado">
        </div>
        <br>
        <center><a href="#" class="btn btn-outline-success ">CADASTRAR</a></center>
        <center><a href="#" class="btn btn-outline-danger " style="margin-top: 160px;">SAIR</a></center>
    </div>
    <div class="fixed-bottom-row" style="padding-top: 15px; padding-bottom: 15px;background-color:dimgray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 custom-col">
                    <a href="#" class="btn custom-link" style="border-style: none;">
                        <i class="bi bi-fingerprint"></i><br>
                        <p>Digitais</p>
                    </a>
                </div>
                <div class="col-4 custom-col">
                    <a href="#" class="btn custom-link" style="border-style: none;">
                        <i class="bi bi-mic"></i><br>
                        <p>Comandos</p>
                    </a>
                </div>
                <div class="col-4 custom-col">
                    <a href="#" class="btn custom-link" style="border-style: none;">
                        <i class="bi bi-bell imgf"></i><br>
                        <p class="imgf">Notificações</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>