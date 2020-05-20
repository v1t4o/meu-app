
<div class="card">
    <div class="card-header">Registro de Empréstimo</div>
    <div class="card-body">
        <form method="POST" action="/emprestimos">
            @csrf
            <div class="row">
                <div class="col-sm form-group">
                    <label for="pessoa_id"><b>Usuário</b></label>
                    <select name="pessoa_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach($pessoas as $pessoa)
                        <option value="{{ $pessoa->id }}">{{$pessoa->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm form-group">
                    <label for="livro_id"><b>Livro</b></label>
                    <select name="livro_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach($livros as $livro)
                        <option value="{{ $livro->id }}">{{$livro->titulo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <b>Data de Retirada: </b></br><input name="inicio" class="datepicker" value="{{old('inicio')}}" autocomplete="off">
                </div>
                <div class="col-sm">
                    <b>Data de Devolução:</b></br><input name="fim" class="datepicker" value="{{old('fim')}}" autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <b>Observação:</b></br>
                    <b><textarea name="observacao"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-right">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>