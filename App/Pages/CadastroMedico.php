<h2 class="display-4">Cadastro de Fisioterapeuta</h2>
<form action="" class="form-fluid">
    <!-- Primeira Linha -->
    <div class="row form-group">
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user-md"></i></span>
                </div>
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>CPF</strong></span>
                </div>
                <input type="text" class="form-control" name="cpf" placeholder="Número" size="12" maxlength="11">
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>RG</strong></span>
                </div>
                <input type="text" class="form-control" name="rg" placeholder="Número">
            </div>
        </div>
    </div>
    <!-- Fim da Primeira Linha -->
    
    <!-- Segunda Linha -->
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="Telefone" required>
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-mobile fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="Celular" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-at fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="E-mail" required>
            </div>
        </div>
        <div class="col-md-2">
            <label for=""></label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="CEP">
            </div>
        </div>
    </div>
    <!-- Fim da Segunda Linha -->
    
    <!-- Terceira Linha -->
    <div class="row form-group">
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Logradouro</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="Rua, Avenida etc..">
            </div>
        </div>
        <div class="col-md-2">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Nº</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Bairro</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>
    </div>
    <!-- Fim da Terceira Linha -->
    
    <!-- Quarta Linha -->
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><strong>Estado</strong></span>
                </div>
                <select name="uf" id="" class="form-control">
                    <option value="">Selecione</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cidade</strong></span>
                </div>
                <input type="text" class="form-control" name="cidade" placeholder="">
            </div>
        </div>
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Compl.</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>
    </div>
    <!-- Fim da Quarta Linha -->
    
    <div class="row form-group">
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Especialidade</strong></span>
                </div>
                <select name="" id="" class="form-control">
                    <option value="">Selecione</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Crefito</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="Número" name="crefito"> 
            </div>
        </div>
    </div>
    <hr>
    <!-- Linha dos Botões -->
    <div class="row form-group">
        <div class="col-md-3">
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <button type="reset" class="btn btn-warning btn-sm">Limpar</button>
        </div>
    </div>
    <!-- Fim da linha dos Botões -->
</form>
<?php
use Unopar\Core\Crud;
if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['crm']) && isset($_POST['uf']) && isset($_POST['areaat']) && isset($_POST['email']) && isset($_POST['cep']) && isset($_POST['numero'])&& isset($_POST['rg'])&& isset($_POST['rua'])&& isset($_POST['cidade'])&& isset($_POST['tel']) )  {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $crm = $_POST['crm'];
    $uf = $_POST['uf'];
    $areaat = $_POST['areaat'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $tel = $_POST['tel'];

    $resultado = Crud::consultar("SELECT * FROM medico WHERE medico.cpf_med = '$cpf' AND medico.crm_med = '$crm'");
    if(empty($resultado)){
       $gravar = Crud::salvar("INSERT INTO medico (nome_med ,cpf_med, crm_med) VALUES ('$nome', '$cpf', '$crm')");
       echo "Cadastrado com Sucesso !";
   } else{
       echo "Não foi possivel cadastrar babaca";
   }
}
?>