<?php
use Unopar\Core\Crud;

$descricao = filter_input(INPUT_POST, 'descricao');

$results = Crud::select("SELECT * FROM cid10 WHERE nome LIKE '%$descricao%'", []);
?>


<div id="demo"></div>
<h2 class="display-4">Listagem de Cid 10</h2>

<form method="post">
	<div class="col-md-6">
		<input type="text" class="form-control" placeholder="Digite o nome ou codigo" name="descricao" 
    		id="descricao"><br>	
	</div>

	<div class="col-md-3">
    	<button type="submit" id="pesquisar" class="btn btn-primary btn-sm">Pesquisar</button>
    	<button type="reset" id="limpar" class="btn btn-danger btn-sm">Limpar</button>
	</div>
	<br>
</form>

<table class="table table-hover">
    <thead>
        <th scope="col">DOENÇA</th>
    </thead>
    <tbody>
        <?php

        if ($descricao != "") {
        	if (isset($descricao)) {
        		foreach ($results as $row) {
        			echo "<tr>";
            		echo "<td>";
            		echo $row['nome'];
            		echo "</td>";
            		echo "</tr>";
        		}
        	}
        }

        ?>
    </tbody>
</table>