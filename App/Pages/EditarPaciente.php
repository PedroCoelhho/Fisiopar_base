<?php

use Unopar\Core\Crud;
$pessoa = $_GET['paciente'];
$resulta = Crud::select("SELECT nome FROM paciente WHERE id='".$pessoa."'", []);
?>
<h2 class="display-4">Alteração de Cadastro</h2>

<form class="form" method="post">
    <!--Primeira Linha -->
    <div class="row form-group">
        <!--Nome -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
                <input type="text" id="nome" class="form-control" placeholder="Nome" name="nome">
            </div>
        </div>
        <!--Data de Nascimento -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Data de nasc." name="dataNasc" disabled>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
        <!--Sexo -->
        <div class="col-md-3">
            <label for=""></label><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Sexo</strong></span>
                </div>
                <select name="" id="" class="form-control" disabled>
                    <option>Selecione</option>
                    <option value="masculino" name="sexo">Masculino</option>
                    <option value="feminino" name="sexo">Feminino</option>
                </select>
            </div>
        </div>
    </div>
    <!--Fim da Primeira Linha -->

    <!--Segunda Linha -->
    <div class="row form-group">
        <!--CPF -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>CPF</strong></span>
                </div>
                <input type="text" class="form-control" name="cpf" placeholder="" disabled>
            </div>
        </div>
        <!--RG -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>RG</strong></span>
                </div>
                <input type="text" class="form-control" name="rg" placeholder="" disabled>
            </div>
        </div>
        <!--Estado Civil -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Est. Civil</strong></span>
                </div>
                <select id="inputState" class="form-control" name="estadoCivil">
                    <option selected>Selecione</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="viuvo">Viuvo</option>
                    <option value="separado">Separado</option>
                </select>
            </div>
        </div>
        <!--Etnia -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Etnia</strong></span>
                </div>
                <select class="form-control" id="" name="etnia" disabled>
                    <option>Selecione</option>
                    <option value="branco">Branco</option>
                    <option value="pardo">Pardo</option>
                    <option value="negro">Negro</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="indigena">Indigena</option>
                </select>
            </div>
        </div>
    </div>
    <!--Fim da Segunda Linha -->
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="Telefone" name="telefone1"/>
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-mobile fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="Celular" name="telefone2">
            </div>
        </div>
        <!--E-mail -->
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-at fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="" placeholder="exemplo@exemplo.com" name="email">
            </div>
        </div>
        <!--CEP -->
        <div class="col-md-2">
            <label for=""></label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep">
            </div>
        </div>
    </div>
    <!--Terceira Linha -->
    <div class="row form-group">
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Logradouro</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="logradouro" id="logradouro">
            </div>
        </div>
        <div class="col-md-2">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Nº</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="numCasa">
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Bairro</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="bairro" id="bairro">
            </div>
        </div>
    </div>
    <!--Fim da Terceira Linha -->

    <!--Quarta Linha -->
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><strong>Estado</strong></span>
                </div>
                <input type="text" name="estado" id="estado" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cidade</strong></span>
                </div>
                <input type="text" class="form-control" name="cidade" placeholder="" id="cidade">
            </div>
        </div>
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Compl.</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="complemento">
            </div>
        </div>
    </div>
    <!--Fim da Quarta Linha -->

    <!--Quinta Linha -->
    <div class="row form-group">
        <!--Convênio -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Convênio</strong></span>
                </div>
                <select id="inputState" class="form-control" name="convenio">
                    <option selected value="sus">SUS</option>
                </select>
            </div>
        </div>
        <!--Cartão SUS -->
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cartão do SUS</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="cns">
            </div>
        </div>
        <!--Validade da Carteira -->
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Validade do Cartão</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="valCarteira">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar fa-fw"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--Fim da Quinta Linha -->

    <!--Sexta Linha -->
    <div class="row form-group">
        <!--Nome do Responsavel -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Responsável</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="nomeResponsavel">
            </div>
        </div>
        <!--Nome da Mãe -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Mãe</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="nomeMae" disabled>
            </div>
        </div>
    </div>
    <!--Fim da Sexta Linha -->

    <!--Sétima Linha -->
    <div class="row form-group">
        <!--Observações -->
        <div class="col-md-12">
            <label for="comment">Observações:</label>
            <textarea class="form-control" rows="5" id="comment" name="observacao"></textarea>
        </div>
    </div>
    <!--Fim da Sétima Linha -->
    <!--Linha de botões-->
    <div class="row form-group">
        <!--Botões para Salvar e para Limpar -->
        <div class="col-md-3">
            <input type="submit" id="botao" class="btn btn-success btn-sm" value="Alterar">
            <button type="reset" class="btn btn-warning btn-sm" value="">Cancelar</button>
        </div>
    </div>
    <!--Fim da linha de botões-->
</form>
