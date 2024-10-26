<div class="modal fade" id="editModal-{{ $listContact->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/contato/update/{{ $listContact->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Atualização de Contatos </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $listContact->userContato->name}}" placeholder="Nome completo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $listContact->userContato->email}}" placeholder="contato@gmail.com">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="date">Data Nascimento</label>
                                <input type="text" class="form-control" name="date" id="date" value ="{{ \Carbon\Carbon::parse($listContact->userContato->data_nascimento)->format('d-m-Y') }}" placeholder="00-00-0000">
                            </div>
                        </div>
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $listContact->telefone}}" placeholder="(XX) XXXXX-XXXX">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numero">Numero</label>
                                <input type="text" class="form-control" name="numero" id="numero"  value="{{ $listContact->numero}}" placeholder="Numero Casa">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="endereco"  value="{{ $listContact->endereco}}" placeholder="Rua Exemplo">
                            </div>
                        </div>
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputComplemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $listContact->complemento}}" placeholder="Apt, casa...">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep" value="{{ $listContact->cep}}" placeholder="XXXXX-XXX">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="">Escolher...</option>
                                    <option value="São Paulo - SP" {{ $listContact->estado == 'São Paulo - SP' ? "selected='selected'"" : '' }}>São Paulo - SP </option>
                                    <option value=" Rio de Janeiro - RJ" {{ $listContact->estado == 'Rio de Janeiro - RJ' ? "selected='selected'"" : '' }}>Rio de Janeiro - RJ</option>
                                    <option value="Minas Gerais - MG" {{ $listContact->estado == 'Minas Gerais - MG' ? "selected='selected'"" : '' }}>Minas Gerais - MG</option>
                                    <option value="Espirito Santo - ES" {{ $listContact->estado == 'Espirito Santo - ES' ? "selected='selected'"" : '' }}>Espirito Santo - ES</option>
                                   
                                </select>
                            </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>



