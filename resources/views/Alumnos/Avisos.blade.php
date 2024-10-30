<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jidokwan Julietas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer, .navbar {
            background-color: #072146;
            padding: 1rem 0;
        }
        .navbar-custom {
            background-color: #072146;
        }
        .img-logoNav {
            width: 90px;
            height: 90px;
            margin-left: 30px;
        }
        .personajesNav {
            width: 170px;
            height: 100px;
        }
        #botomNav {
            color: red;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-customAvs {
            background-color: red;
            color: white;
            border: 2px solid #072146;
            padding: 1rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        #contenedorBotom {
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-customCon {
            background-color: #072146;
            color: white;
            border: 2px solid #072146;
            padding: 2rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-customCon:active {
            color:  #0E2A52;
            box-shadow: 0 0.2rem #dfd9d9;
            transform: translateY(0.2rem);
        }
        .btn-customCon:hover:not(:disabled) {
            background:  #0E2A52;
            color: white;
            text-shadow: 0 0.1rem #bcb4b4;
        }
        .btn-customAcc {
            background-color: #0E2A52;
            color: white;
            border: 2px solid #072146;
            padding: 2rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-customAcc:active {
            color: white;
            box-shadow: 0 0.2rem #dfd9d9;
            transform: translateY(0.2rem);
        }
        .btn-customAcc:hover:not(:disabled) {
            background: white;
            color: #072146;
            text-shadow: 0 0.1rem #bcb4b4;
        }
        .header-text {
            color: white;
            margin: 0 20px;
        }
        .footer-logo {
            width: 60px;
            height: 60px;
        }
        .footer-link {
            color: white;
        }
        .imgFace {
            width: 28px;
            height: 28px;
            margin-right: 5px;
        }
        .carousel-item {
            position: relative;
        }
        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 10px;
        }
        
        #container-fluid{
            background-color: #072146;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-4 d-flex align-items-center">
                    <img src="{{ asset('images/JDKJulietasLogoBlanco.png') }}" alt="" class="img-logoNav">
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <img src="{{ asset('images/MonosBlanco.png') }}" alt="" class="personajesNav">
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center" id="contenedorBotom">
                    <a href="#" class="btn-customCon">Conócenos</a>
                    <a href="#" class="btn-customAcc">Cuenta</a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col d-flex justify-content-center align-items-center" id="botomNav">
                    <a href="#" class="btn-customAvs">avisos</a>
                    <a href="#" class="btn-customAvs">grupos</a>
                    <a href="#" class="btn-customAvs">finanzas</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container bg-secondary">
        <div class="row">
            <table class="table table-bordered">
                <tr class="table-dark">
                    <th>Nombre</th>
                    <th>Mensaje</th>
                </tr>
            </table>
        </div>
    </div>

    <footer class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 d-flex flex-column align-items-center justify-content-center footer-link">
                    <p>📞 8717976623</p>
                    <p>📍<a href="https://maps.app.goo.gl/DCgQmxAuw8RjsNTo6" class="footer-link">Querétaro 120, La Merced, 27296 Torreón, Coah.</a></p>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/JDKJulietasLogoBlanco.png') }}" alt="" class="footer-logo">
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center footer-contact">
                    <p><img src="{{ asset('images/facebookIcon.png') }}" alt="" class="imgFace"> <a href="https://www.facebook.com/JidoKwanGymJulietas" class="footer-link">Jido Kwan Gym Julietas</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>