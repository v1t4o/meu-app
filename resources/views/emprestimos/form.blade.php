
<div class="card">
    <div class="card-header">Registro de Empréstimo</div>
    <div class="card-body">
        <form method="POST" action="/emprestimos">
            @csrf
            <div class="row">
                <div class="col-sm form-group">
                    <label for="pessoa_id"><b>Usuário</b></label>
                    @if ($emprestimo == NULL)
                        <select name="pessoa_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($pessoas as $pessoa)
                            <option value="{{ $pessoa->id }}">{{$pessoa->nome}}</option>
                            @endforeach
                        </select>
                    @else
                        @foreach ($emprestimo->pessoa->usuariosid() as $option)
                            @if ($emprestimo->pessoa_id == $option->id)
                            <input name="pessoa_id" value="{{$option->id}}" type="hidden">
                            {{$option->nome}}
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="col-sm form-group">
                    <label for="livro_id"><b>Livro</b></label>
                    @if ($emprestimo == NULL)
                        <select name="livro_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($livros as $livro)
                            <option value="{{ $livro->id }}">{{$livro->titulo}}</option>
                            @endforeach
                        </select>
                    @else
                        @foreach ($emprestimo->livro->livrosid() as $option)
                            @if ($emprestimo->livro_id == $option->id)
                            <input name="livro_id" value="{{$option->id}}" type="hidden">
                            {{$option->titulo}}
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    @if ($emprestimo == NULL)
                        <b>Data de Retirada: </b></br><input name="inicio" class="datepicker" value="{{old('inicio')}}" autocomplete="off">
                    @else
                        <b>Data de Retirada: </b></br><input name="inicio" class="datepicker" value="{{old('inicio', Carbon\Carbon::parse($emprestimo->inicio)->format('d/m/Y')) }}" autocomplete="off">
                    @endif
                </div>
                <div class="col-sm">
                    @if ($emprestimo == NULL)
                        <b>Data de Devolução: </b></br><input name="fim" class="datepicker" value="{{old('fim')}}" autocomplete="off">
                    @else
                        <b>Data de Devolução: </b></br><input name="fim" class="datepicker" value="{{old('fim', Carbon\Carbon::parse($emprestimo->fim)->format('d/m/Y')) }}" autocomplete="off">
                    @endif                
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <b>Observação:</b></br>
                    <b><textarea name="observacao">@if ($emprestimo != NULL){{ $emprestimo->observacao }}@endif</textarea>
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