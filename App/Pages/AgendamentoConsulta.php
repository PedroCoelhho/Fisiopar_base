
<h2 class="display-4">Agendamento de Consulta</h2>
<form class="form-fluid" method="post">
    <!-- Primeira Linha -->
    <div class="row form-group">
        <div class="col-md-9">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" name="paciente" placeholder="Nome do Paciente" required="">
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" name="cod_paciente" placeholder="Cód. do Paciente" required="">
            </div>
        </div>
    </div>
    <!-- Fim da Primeira Linha -->
    
    <!-- Segunda Linha -->
    <div class="row form-group">
        <div class="col-md-5">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user-md fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" name="medico" placeholder="Médico" required="">
            </div>
        </div>
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Convênio</strong></span>
                </div>
                <input type="text" class="form-control" name="convenio" style='text-transform:uppercase' value="sus" >
            </div>
        </div>
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Data</strong></span>
                </div>
                <input type="text" class="form-control" name="" placeholder="Última Consulta" required="">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar fa-fw"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da Segunda Linha -->
    
    <!-- Terceira Linha -->
    <div class="row form-group">
        <div class="col-md-4">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Data</strong></span>
                </div>
                <input type="text" class="form-control" name="data" placeholder="" required="">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar fa-fw"></i></span>
                </div>
            </div>
        </div>
       
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
               <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Hora</strong></span>
                </div>
                <input type="time" id="hora" value="" class="form-control" placeholder="Hora" required="" name="hora" >
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-clock-o fa-fw"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da Terceira Linha -->
    
    <!-- Quarta Linha -->
    <div class="row form-group">
       <div class="col-md-6">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>Tipo da Consulta</strong></span>
                </div>
                <select name="tp_consulta" id="" class="form-control">
                    <option value="">Selecione</option>
                    <option value="">Ortopedia</option>
                    <option value="">Cardiologia</option>
                    <option value="">Pneumo</option>
                    <option value="">Ginecologia</option>
                    <option value="">Pediatria</option>
                    <option value="">Neurologia</option>
                </select>
            </div>
        </div>
        
        <div class="col-md-3">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><strong>UBS</strong></span>
                </div>
                <select class="form-control" width="100%" required="" name="convenio">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Fim da Quarta Linha -->
       
    <!-- Linha de botões -->
    <div class="row form-group">
        <div class="col-md-3">
            <button type="button" class="btn btn-success btn-sm">Salvar</button>
            <button type="button" class="btn btn-danger btn-sm">Cancelar</button>
        </div>
    </div>
    <!-- Fim da linha de botões -->
</form>
<?php
// Usando a classe Crud para ter acesso aos métodos a partir deste arquivo
error_reporting(0);
ini_set(“display_errors”, 0 );
use Unopar\Core\Crud;


	if(isset($_POST['paciente']) && isset($_POST['medico']) && isset($_POST['hora']) && isset($_POST['sala']) && isset($_POST['valor']) && isset($_POST['data']) && isset($_POST['cod_paciente']) && isset($_POST['data']) && isset($_POST['convenio']) && isset($_POST['dura_consulta']) && isset($_POST['tp_consulta']) && isset($_POST['obs_consulta']) ){

		$paciente = $_POST['paciente'];
		$medico = $_POST['medico'];
		$hora = $_POST['hora'];
		$sala = $_POST['sala'];
		$valor = $_POST['valor'];
		$data = $_POST['data'];
		$cod_paciente = $_POST['cod_paciente'];
		$convenio = $_POST['convenio'];
		$dura_consulta = $_POST['dura_consulta'];
		$tp_consulta = $_POST['tp_consulta'];
		$obs_consulta = $_POST['obs_consulta'];

		$resultado = Crud::consultar("SELECT * FROM agendamento WHERE agendamento.medico = '$medico' AND agendamento.data_ag = '$data' AND agendamento.hora_ag = '$hora'");
		if(empty($resultado)){
		$gravar = Crud::salvar("INSERT INTO agendamento (paciente, medico, data_ag, hora_ag, val_cst, sala_cst, cod_paciente, convenio, dura_consulta, tp_consulta, obs_consulta) VALUES ('$paciente', '$medico', '$data', '$hora', '$valor', '$sala', '$cod_paciente', '$convenio', '$dura_consulta', '$tp_consulta', '$obs_consulta')");
			echo "Cadastrado";
		} else{
			echo "Não cadastrado";
		}
	}
?>