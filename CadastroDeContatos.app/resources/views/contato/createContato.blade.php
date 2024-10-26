@extends('layouts.listLayout')

@section('title' , 'Contatos')

@section('content')

<div class="container-layout">
    <div class=" layout-contato ">
        <div class="col-md-8">
            <div class="form-container form-list">
                <h2 class="form-header text-center">Cadastro de Contato</h2>
                <form action="{{ route('contato.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="contato@gmail.com">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date">Data Nascimento</label>
                            <input type="text" class="form-control" name="date" id="date" placeholder="00-00-0000">
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(XX) XXXXX-XXXX">
                        </div>
                    <div class="form-group col-md-4">
                            <label for="numero">Numero</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero Casa">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua Exemplo">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputComplemento">Complemento</label>
                            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Apt, casa...">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCep">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep" placeholder="XXXXX-XXX">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>São Paulo - SP</option>
                                <option>Rio de Janeiro - RJ</option>
                                <option>Minas Gerais - MG</option>
                                <option>Espirito Santo - ES</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Cadastrar Contato</button>
                </form>
        
            </div>
        </div>
    </div>
</div>

@endsection