<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlindZone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            <div class="col-4 custom-col" >
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
