    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome completo" value="{{ old('nome', $pessoa->nome) }}">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o seu e-mail" value="{{ old('email', $pessoa->email) }}">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="text" name="idade" class="form-control" id="exampleFormControlInput1" placeholder="Escreva sua idade" value="{{ old('idade', $pessoa->idade) }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input maxlength=11 name="cpf" type="text" class="form-control cpf" id="exampleFormControlInput1" placeholder="Escreva o número do seu CPF" value="{{ old('cpf', $pessoa->cpf) }}">
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