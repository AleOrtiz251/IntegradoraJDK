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
        .container-fluid {
            background-color: #072146;
        }
        .img-logoNav {
            width: 90px;
            height: 90px;
            margin-left: 30px;
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
        .navbar-toggler {
            background-color: white;
        }
        .background-div {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .table {
           max-width: 80%;
           min-height: 80%;
           justify-content: end;
        }
        .inner-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 0.5rem;
            border-radius: 10px;
            width: 50vw;
            height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 18rem;
            height: 18rem;
            margin: 1rem;
        }
        .offcanvas{
            background-color: rgba(0, 0, 0, 0.5);
        }
        
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/JDKJulietasLogoBlanco.png') }}" alt="" class="img-logoNav"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: white">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color: white">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">Dropdown</a>
                            <ul class="dropdown-menu" >
                                <li><a class="dropdown-item" href="#"style="color: white">Action</a></li>
                                <li><a class="dropdown-item" href="#"style="color: white">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"style="color: white">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="background-div">
        <div class="table">
            <table class="table table-bordered">
                <tr class="table-dark">
                    <th class = "col-2">Profesor</th>
                    <th class = "col-8">Mensaje</th>
                    <th class = "col-2">Fecha</th>
                </tr>
            </table>
        </div>
    </div>
    <footer class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 d-flex flex-column align-items-center justify-content-center footer-link">
                    <p>8717976623</p>
                    <p><a href="https://maps.app.goo.gl/DCgQmxAuw8RjsNTo6" class="footer-link">Querétaro 120, La Merced, 27296 Torreón, Coah.</a></p>
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
