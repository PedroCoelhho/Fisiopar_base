<h2 class="display-4">Cadastro de Pacientes</h2>
<form class="form" method="post" action="">
    <!--Primeira Linha -->
    <div class="row form-group">
        <!--Nome -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nome" name="nome">
            </div>
        </div>
        <!--Data de Nascimento -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Data de nasc." id="data_nasc" name="data_nasc">
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
                <select name="sexo" id="" class="form-control">
                    <option>Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
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
                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="">
            </div>
        </div>
        <!--RG -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>RG</strong></span>
                </div>
                <input type="text" class="form-control" name="rg" placeholder="">
            </div>
        </div>
        <!--Estado Civil -->
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>E.Civil</strong></span>
                </div>
                <select id="inputState" class="form-control" name="est_civ">
                    <option selected>Selecione</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Viuvo(a)">Viuvo(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
					<option value="Separado(a)">Separado(a)</option>
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
                <select class="form-control" id="" name="etnia">
                    <option>Selecione</option>
                    <option value="Branca">Branco</option>
                    <option value="Parda">Pardo</option>
                    <option value="Negra">Negro</option>
                    <option value="Amarela">Amarelo</option>
                    <option value="Indigena">Indigena</option>
                </select>
            </div>
        </div>
    </div>

    <!--Sexta Linha -->
    <div class="row form-group">
        <!--Nome do Responsavel -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Responsável</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="nome_resp">
            </div>
        </div>
        <!--Nome da Mãe -->
        <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Mãe</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" name="nome_mae">
            </div>
        </div>
    </div>
    <!--Fim da Sexta Linha -->
    <!--Fim da Segunda Linha -->
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="tel_prim" placeholder="Telefone" name="tel_prim"/>
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-mobile fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" id="tel_sec" placeholder="Celular" name="tel_sec"/>
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
                <input type="text" class="form-control" placeholder="CEP" name="cep" id="CEP">
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
        <div class="col-md-2">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><strong>Estado</strong></span>
                </div>
                <input type="text" name="estado" id="estado" class="form-control">
            </div>
        </div>
		<!--
        <div class="col-md-4 md-offset-1">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cidade</strong></span>
                </div>
                <input type="text" class="form-control" name="cidade" placeholder="" id="cidade">
            </div>
        </div>
		-->
		<div class="col-md-4 md-offset-1">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cidade</strong></span>
                </div>
                <select class="form-control" id="cidade" name="cidade">
                </select>
            </div>
        </div>
        <div class="col-md-6">
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
                <input type="text" class="form-control" name="convenio" value="SUS">
            </div>
        </div>
        <!--Cartão SUS -->
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cartão do SUS</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" id= "cns" name="cns">
            </div>
        </div>
        <!--Validade da Carteira -->
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Validade do Cartão</strong></span>
                </div>
                <input type="text" class="form-control" placeholder="" id="valid_cart" name="valid_cart">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar fa-fw"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--Fim da Quinta Linha -->

    <!--Sétima Linha -->
    <div class="row form-group">
        <!--Observações -->
        <div class="col-md-12">
            <label for="comment"><strong>Observações:</strong></label>
            <textarea class="form-control" rows="5" id="comment" name="observacoes"></textarea>
        </div>
    </div>
	
	<div class="col-md-7">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Cadastro Municipal</strong></span>
                </div>
                <input type="text" class="form-control" name="convenio" value="código de usuario">
            </div>
        </div><br>
    <!--Fim da Sétima Linha -->

    <!--Linha de botões-->
    <div class="row form-group">
        <!--Botões para Salvar e para Limpar -->
        <div class="col-md-3">
            <input type="submit" class="btn btn-success btn-sm" value="Salvar">
            <button type="reset" class="btn btn-warning btn-sm" value="">Limpar</button>
        </div>
    </div>
    <!--Fim da linha de botões-->
</form>
<script type="text/javascript">
  jQuery(function($){
		$('#cpf').mask('000.000.000-00', {reverse: true});
		$('#tel_prim').mask('(00)0000-0000');
		$('#tel_sec').mask('(00)00000-0000');
		$('#cns').mask('000.0000.0000.0000');
		$('#CEP').mask('00000-000');
		$('#data_nasc').mask("00/00/0000", {placeholder: "__/__/____"});
		$('#valid_cart').mask("00/00/0000", {placeholder: "__/__/____"});

    $("#CEP").change(function(){
        var cep_code = $(this).val();
        if( cep_code.length <= 0 ) return;
        $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
            function(result){
                if( result.status!=1 ){
                  alert(result.message || "Houve um erro desconhecido");
                  return;
                }
                $("input#CEP").val( result.code );
                $("input#estado").val( result.state );
                $("input#cidade").val( result.city );
                $("input#bairro").val( result.district );
                $("input#logradouro").val( result.address );
            });
    });
    $("#cidade").focus(function(){
			
			$.ajax({
				url:"consultacidade.php",
				method:"POST",
				dataType: "json",
				data:{estado:$("input#estado").val()},
				success:function(resposta)
				{
					console.log(resposta);
                    
					$.each(resposta, function(i, item) {
                        
						$('#cidade').append('<option value="' + i + '">' + item + '</option>');
						
						//$('#lista').append('<li>' + item + '</li>');
                        //console.log(i)
					});
				}
			})
		});
		$("#CEP").focus(function(){
			$('#cidade').empty();
            $('#estado').empty();
			$(this).empty();
			console.clear();
		})
		/*
		$.get('index.php', function (data) {
			let dados = JSON.parse(data);
			console.log(dados);
			console.log(dados[0]);
		})
		*/
});
    
</script>

<?php
use Unopar\Core\Crud;

// Dados do endereço
$cep = str_replace('-', '', filter_input(INPUT_POST, 'cep'));
$logradouro = str_replace('-', ' ', filter_input(INPUT_POST, 'logradouro'));
$numCasa = filter_input(INPUT_POST, 'numCasa');
$bairro = filter_input(INPUT_POST, 'bairro');
//$estado = filter_input(INPUT_POST, 'estado');
$cidade = filter_input(INPUT_POST, 'cidade');
$complemento = filter_input(INPUT_POST, 'complemento');

if (isset($cep) && isset($logradouro) && isset($numCasa) && isset($bairro)) {

    $sqlEndereco = "INSERT INTO endereco(CEP, fk_cidade, Logradouro, Numero,
      Bairro, Complemento) VALUES(:cep, :cidade, :logradouro, :numCasa,
      :bairro, :complemento)";

    $enderecoBind = [
      ':cep'         => $cep,
      ':logradouro'  => $logradouro,
      ':numCasa'     => $numCasa,
      ':bairro'      => $bairro,
      //':estado'      => $estado,
      ':cidade'      => $cidade,
      ':complemento' => $complemento
    ];

    Crud::insert($sqlEndereco, $enderecoBind);

} elseif (false){
    echo 'Campos do endereço sem preencher!';
} else {
    echo "";
}

// Dados do Paciente
$nome = filter_input(INPUT_POST, 'nome');
$dataNasc = explode('/', filter_input(INPUT_POST, 'data_nasc'));

$sexo = filter_input(INPUT_POST, 'sexo');
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$estadoCivil = filter_input(INPUT_POST, 'est_civ');
$etnia = filter_input(INPUT_POST, 'etnia');
$nomeResponsavel = filter_input(INPUT_POST, 'nome_resp');
$nomeMae = filter_input(INPUT_POST, 'nome_mae');
$telefone1 = filter_input(INPUT_POST, 'tel_prim');
$telefone2 = filter_input(INPUT_POST, 'tel_sec');
$email = filter_input(INPUT_POST, 'email');
$convenio = filter_input(INPUT_POST, 'convenio');
$cns = filter_input(INPUT_POST, 'cns');
$valCarteira = explode('/', filter_input(INPUT_POST, 'valid_cart'));

$observacao = filter_input(INPUT_POST, 'observacoes');
$result = Crud::select("SELECT MAX(id) FROM endereco", []);
$fkEndereco = $result[0]["MAX(id)"];

if (isset($nome) && isset($dataNasc) && isset($sexo) && isset($etnia)
  && isset($cpf) && isset($rg) && isset($telefone1) && isset($telefone2)
  && isset($estadoCivil) && isset($cns) && isset($valCarteira) && isset($convenio)
  && isset($nomeResponsavel) && isset($nomeMae) && isset($email) && isset($observacao)
  && isset($fkEndereco)) {
    
    $dataFormat = $dataNasc[2] . $dataNasc[1] . $dataNasc[0];
    $valCarteiraFormat = $valCarteira[2] . $valCarteira[1] . $valCarteira[0];
    $sqlPaciente = "INSERT INTO paciente(nome, data_nasc, sexo, cpf, rg, est_civ,
      etnia, nome_resp, nome_mae, tel_prim, tel_sec, email, fk_endereco, convenio,
      cns, valid_cart, observacoes) VALUES(:nome, :dataNasc, :sexo,
      :cpf, :rg, :est_civ, :etnia, :nome_resp, :nome_mae, :tel_prim, :tel_sec,
      :email, :fk_endereco, :convenio, :cns, :valid_cart, :observacoes)";

    $pacienteBind = [
      ':nome'            => $nome,
      ':dataNasc'        => $dataFormat,
      ':sexo'            => $sexo,
      ':cpf'             => $cpf,
      ':rg'              => $rg,
      ':est_civ'         => $estadoCivil,
      ':etnia'           => $etnia,
      ':nome_resp'       => $nomeResponsavel,
      ':nome_mae'        => $nomeMae,
      ':tel_prim'        => $telefone1,
      ':tel_sec'         => $telefone2,
      ':email'           => $email,
      ':fk_endereco'     => $fkEndereco,
      ':convenio'        => $convenio,
      ':cns'             => $cns,
      ':valid_cart'      => $valCarteiraFormat,
      ':observacoes'     => $observacao
    ];

    Crud::insert($sqlPaciente, $pacienteBind);
    echo "<script>swal('Bom Trabalho!', 'Paciente cadastrado com sucesso!', 'success');</script>";

} elseif (false) {
  echo 'Campos do Paciente sem preencher!';
}
?>
