@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/emprestimos/{{ $emprestimo->id }}">
                @csrf
                @method('patch')
                <h2 style="text-align:center">Registro de Empréstimo</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="pessoa_id">Usuário</label>
                            <select name="pessoa_id" class="form-control" id="exampleFormControlSelect1">
                            <option value="" selected="">- Selecione -</option>
                            @foreach ($emprestimo->pessoa->usuariosid() as $option)

                                {{-- 1. Situação em que não houve tentativa de submissão e é uma edição --}}
                                @if (old('pessoa_id') == '' and isset($emprestimo->pessoa->id))
                                <option value="{{$option->id}}" {{ ( $emprestimo->pessoa->id == $option->id) ? 'selected' : ''}}>
                                    {{$option->nome}}
                                </option>
                                {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                                @else
                                <option value="{{$option->id}}" {{ ( old('pessoa_id') == $option->id) ? 'selected' : ''}}>
                                    {{$option->nome}}
                                </option>
                                @endif
                                
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
                            <option value="" selected="">- Selecione -</option>
                            @foreach ($emprestimo->livro->livrosid() as $option)

                                {{-- 1. Situação em que não houve tentativa de submissão e é uma edição --}}
                                @if (old('livro_id') == '' and isset($emprestimo->livro->id))
                                <option value="{{$option->id}}" {{ ( $emprestimo->livro->id == $option->id) ? 'selected' : ''}}>
                                    {{$option->titulo}}
                                </option>
                                {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                                @else
                                <option value="{{$option->id}}" {{ ( old('livro_id') == $option->id) ? 'selected' : ''}}>
                                    {{$option->titulo}}
                                </option>
                                @endif
                                
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Data de Retirada: <input name="inicio" value="{{old('inicio', $emprestimo->inicio)}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Data de Devolução: <input name="fim" value="{{old('fim', $emprestimo->fim)}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <textarea name="observacao">{{ $emprestimo->observacao }}</textarea>
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
            </form>
        </div>
  @endsection