
<h2 class="display-4">Buscar Atendimento</h2>
<form class="form-fluid" method="post">
    <!-- Primeira Linha -->
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
					<input type="text" class="form-contro2" name="cod_paciente" placeholder="Número do protocolo" required=""> 
					<!-- Linha de botão -->
						<button type="button" class="btn btn-success btn-sm">Pesquisar</button>			
					<!-- Fim da linha de botão -->
            </div>
        </div>
    </div>
    <!-- Fim da Primeira Linha -->
</form>
<?php
// Usando a classe Crud para ter acesso aos métodos a partir deste arquivo
error_reporting(0);
ini_set(“display_errors”, 0 );
use Unopar\Core\Crud;


	if(isset($_POST['cod_paciente'])){

		$cod_paciente = $_POST['cod_paciente'];


		$resultado = Crud::consultar("SELECT * FROM agendamento WHERE agendamento.medico = '$medico' AND agendamento.data_ag = '$data' AND agendamento.hora_ag = '$hora'");
		if(empty($resultado)){
		$gravar = Crud::salvar("INSERT INTO agendamento (cod_paciente) VALUES ('$cod_paciente')");
			echo "lalala";
		} else{
			echo "lalal";
		}
	}
?>