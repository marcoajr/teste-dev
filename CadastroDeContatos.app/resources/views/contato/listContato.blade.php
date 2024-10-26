@extends('layouts.listLayout')

@section('title' , 'Contatos')

@section('content')

 <!--- - Exibir uma lista de contatos com os seguintes campos:
    - Sequencial
    - Nome
    - Telefone
    - Idade --->

    <div class="container table-list  form-list">
        <h2>Lista de Contatos</h2>
                @if(session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                @endif
                <div class="container">
                    <form class="form-search" action="{{ route('contato.search') }}" method="GET">
                        <input type="text" name="search" id="search" class="form-control mb-4 col-2" placeholder="Pesquisar Contatos...">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
                </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sequencial</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $index => $listContact)
    <tr>
        <th scope="row">{{ ($contacts->currentPage() - 1) * $contacts->perPage() + $index + 1 }}</th>
        <td>{{ $listContact->userContato->name }}</td>
        <td>{{ $listContact->telefone }}</td>
        <td>{{ $listContact->idade }} anos</td>
        <td>
            <a href="/contato/edit/{{ $listContact->id }}" class="btn btn-success">
                <ion-icon name="create"></ion-icon>
            </a>
            
            <form action="/contato/{{ $listContact->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><ion-icon name="trash"></ion-icon></button>
            </form>
            
            <!-- Botão para abrir o modal -->
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#infoModal_{{ $listContact->id }}_{{ $loop->index }}">
                <ion-icon name="eye"></ion-icon>
            </button>
        </td>
    </tr>

    <!-- Modal de informação para cada contato -->
    <div class="modal fade" id="infoModal_{{ $listContact->id }}_{{ $loop->index }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"> Informações do Contato </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Email:</strong> {{ $listContact->userContato->email }}</p>
                    <p><strong>Endereço:</strong> {{ $listContact->endereco }}</p>
                    <p><strong>CEP:</strong> {{ $listContact->cep }}</p>
                    <p><strong>Complemento:</strong> {{ $listContact->complemento }}</p>
                    <p><strong>Estado:</strong> {{ $listContact->estado }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
                </tbody>
            </table>
            <nav class="pagination" aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $contacts->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $contacts->previousPageUrl() }}" tabindex="-1">Anterior</a>
                    </li>

                    @for ($i = 1; $i <= $contacts->lastPage(); $i++)
                        <li class="page-item {{ $i == $contacts->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $contacts->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $contacts->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $contacts->nextPageUrl() }}">Próximo</a>
                    </li>
                </ul>
            </nav>
           
            
    </div>
    
@endsection

                                
                             
      