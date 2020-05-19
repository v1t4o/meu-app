
    <h3 style="text-align:center">Cadastro de Livro</h3>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o título do livro" value="{{old('titulo', $livro->titulo)}}">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" name="autor" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome do autor" value="{{old('autor', $livro->autor)}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input maxlength=13 name="isbn" type="text" class="form-control isbn" id="exampleFormControlInput1" placeholder="Escreva o ISBN do livro" value="{{old('isbn', $livro->isbn)}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="procedencia">Procedência</label>
                <select name="procedencia" class="form-control" id="exampleFormControlSelect1">
                <option value="" selected="">- Selecione -</option>
                @foreach ($livro->procedencias() as $option)

                    {{-- 1. Situação em que não houve tentativa de submissão e é uma edição --}}
                    @if (old('procedencia') == '' and isset($livro->procedencia))
                    <option value="{{$option}}" {{ ( $livro->procedencia == $option) ? 'selected' : ''}}>
                        {{$option}}
                    </option>
                    {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                    @else
                    <option value="{{$option}}" {{ ( old('procedencia') == $option) ? 'selected' : ''}}>
                        {{$option}}
                    </option>
                    @endif
                    
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="text-right">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </div>