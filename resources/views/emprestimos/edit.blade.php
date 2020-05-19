@extends('layouts.master')
@section('content')
        <div class="row">
            <div class="col-sm">
                <h3 style="text-align:center">Registro de Empréstimo</h3>
                <form method="POST" action="/emprestimos/{{ $emprestimo->id }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="pessoa_id"><b>Usuário</b></label>
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
                                <label for="livro_id"><b>Livro</b></label>
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
                            <b>Data de Retirada:<b></br> <input name="inicio" class="datepicker" value="{{old('inicio', Carbon\Carbon::parse($emprestimo->inicio)->format('d/m/Y')) }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b>Data de Devolução:</b></br> <input name="fim" class="datepicker" value="{{old('fim', Carbon\Carbon::parse($emprestimo->fim)->format('d/m/Y'))}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b>Observação:</b></br><textarea name="observacao">{{ $emprestimo->observacao }}</textarea>
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
  @endsection