@extends('layouts.main')

@section('title' , 'Contatos')

@section('content')

<main role="main">
    <div class="p-5 m-2">
        <div class="jumbotron text-white text-center banner-img">
                <h1 class="display-4">Bem-vindo!</h1>
                    <p class="lead">Gerencie seus contatos de forma inteligente. Nossa plataforma oferece um sistema intuitivo para armazenar e organizar seus contatos, categorizando-os por tipo, prioridade e mais. Com funcionalidades de busca avançada e organização de grupos, você pode encontrar rapidamente o contato que precisa, quando precisa.</p>
        </div>
    </div>

    <!--- informações  --->
    <section class="features-icons page-section portfolio" id="portfolio">
        <div class="container mb-5">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Conecte, Organize e Cresça</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                     <div class="info-item mx-auto mx-auto">
                            <img class="img-fluid" src="{{asset('img/armazenamento.jpg')}}" alt="..." />
                            <h3>Armazenamento Centralizado</h3>
                            <p class="lead mb-0">Todos os seus contatos, organizados e protegidos em um só lugar.</p>
                    </div>
                </div>
                    
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="info-item mx-auto">
                            <img class="img-fluid" src="{{asset('img/filtro.jpg')}}" alt="..." />
                            <h3>Filtros Inteligentes</h3>
                            <p class="lead mb-0">Encontre contatos com base em filtros como empresa, cargo, cidade ou tags personalizadas.</p>
                    </div>
                </div>
                    
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="info-item mx-auto">
                            <img class="img-fluid" src="{{asset('img/seguranca.jpg')}}" alt="..." />
                            <h3>Segurança e Privacidade</h3>
                            <p class="lead mb-0">Seus contatos estão seguros com nosso sistema de proteção de dados, garantindo a confidencialidade.</p>
                    </div>
                </div>                    
            </div>
        </div>
    </section>
</main>

@endsection