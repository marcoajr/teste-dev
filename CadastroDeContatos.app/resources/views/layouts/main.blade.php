<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
          <a class="navbar-brand" href="/"><img src="{{asset('img/logo.jpg')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/createContato">Criar Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listContato">Meus Contatos</a>
                    </li>
                </ul>
            </div>
        </nav> 

        <main style="margin-top: 70px;"> 
            <div class=" container-fluid">
                @yield('content')
            </div>
        </main>

        <footer class="text-center text-lg-start text-white">
            <div class="container p-4 pb-0">
                <section>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contato&Contato</h6>
                            <p>Plataforma especializada em organização de seus contatos.</p>
                            <a class="btn btn-outline-light btn-floating m-1" role="button"><ion-icon name="logo-facebook"></ion-icon></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button"><ion-icon name="logo-twitter"></ion-icon></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button"><ion-icon name="logo-google"></ion-icon></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button"><ion-icon name="logo-instagram"></ion-icon></a>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contatos</h6>
                            <p><i class="fas fa-home mr-3"></i> Rio de Janeiro, Maricá 0097, Brasil</p>
                            <p><i class="fas fa-envelope mr-3"></i> Contato&Contato@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> (21)99999-9999</p>
                            <p><i class="fas fa-print mr-3"></i> (21)99999-9999</p>
                        </div>
                    </div>
                </section>

                <hr class="my-3">

                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                © 2024 Contato&Contato
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>

        <script src="/js/script.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
    </body>
</html>
