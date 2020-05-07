
    <h2 style="text-align:center">Registro de Empréstimo</h2>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="pessoa_id">Usuário</label>
                <select name="pessoa_id" class="form-control" id="exampleFormControlSelect1">
                @foreach($pessoa as $pessoa)
                <option value="{{ $pessoa->id }}">{{$pessoa->titulo}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="livro_id">Livro</label>
                <select name="livro_id" class="form-control" id="exampleFormControlSelect1">
                @foreach($livros as $livro)
                <option value="{{ $livro->id }}">{{$livro->titulo}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            Data de Retirada: <input name="inicio">
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            Data de Devolução: <input name="fim">
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <textarea name="observacao"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="text-left">
                <a id="BtnSairCad" href="http://127.0.0.1:8000/">Menu</a>
            </div>
        </div>
        <div class="col-sm">
            <div class="text-right">
                <button id="cadastro" type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>