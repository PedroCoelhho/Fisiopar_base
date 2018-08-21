<?php
use Unopar\Core\Crud;
$result = Crud::select("SELECT * FROM paciente", []);
?>

<h2 class="display-4">Listagem de Pacientes</h2>
<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col" class="text-center">DATA NASCIMENTO</th>
        <th scope="col"class="text-center">CONVÊNIO</th>
        <th scope="colspan" class="text-center">INFO</th>
        <th scope="colspan" colspan="5" class="text-center">SELECIONE</th>
    </thead>
    <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
            <td id="idPaciente"><?php echo $row['id'];?></td>
            <td id="nomePaciente"><?php echo $row['nome'];?></td>
            <td align="center"><?php echo $row['data_nasc'];?></td>
            <td align="center" style='text-transform:uppercase'><?php echo $row['convenio'];?></td>
            <td align="center"><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></button></td>
            <td align="center"><input type="checkbox"></td>
            </tr>
            
            <div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header"> <!-- HEADER -->
                        <h5 class="modal-title" id="exampleModalLabel">Informações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <span><strong>Nome: </strong><?php echo $row['nome']; ?></span><br>
                                        <span><strong>Data de Nascimento: </strong><?php echo $row['data_nasc']; ?></span><br>
                                        <span><strong>Convênio: </strong><?php echo $row['convenio']; ?></span><br>
                                        <span><strong>Cartão do SUS: </strong><?php echo $row['cns'] ?></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="col-md-3">
    <button id="botao" class="btn btn-primary btn-sm">Alterar</button>
    <button id="bo" class="btn btn-danger btn-sm">Excluir</button>
</div>
<script> // Javascript
    let linha = document.querySelectorAll("table tr td:last-child"); // Seleciona os últimos td's
    for (let x = 0; x < linha.length; x++) {
        linha[x].addEventListener('click', function() {
            let row = linha[x].parentNode; // Seleciona o pai do elemento
            // Operador ternário
            linha[x].querySelector("input[type=checkbox]").checked == true ? // Condição
            // Se a condição for verdadeira adiciona a classe .selected
            row.classList.add("selected") :
            // Senão remove a classe .selected
            row.classList.remove("selected");
            }, false);
    }
    let botao = document.getElementById("bo");
    // Dispara o evento apenas se o botão for clicado
    botao.addEventListener('click', function(event) {
        event.preventDefault();
        let tabela = document.querySelectorAll("table tr td:last-child");
        let cont = 0;
        for (let x = 0; x < tabela.length; x++) {
            // Verifica se a row está selecionada
            if (tabela[x].querySelector('input[type=checkbox]').checked == true) {
                cont++;
            }
        }
        // Conta quantas linhas foram selecionadas
        if (cont) {
            alert(cont == 1 ? "selecionado " + cont + " registro" : "Selecionado " + cont + " registros");
            
            let msg = confirm("Deseja excluir?"); // Retorna true ou false
            if (msg) {
                for (let x = 0; x < tabela.length; x++) {
                    if (tabela[x].querySelector('input[type=checkbox]').checked == true) {
                        let linha = tabela[x].parentNode; // Seleciona a row
                        linha.parentNode.removeChild(linha); // Remove a row
                    }
                }
            } else {
                for (let x = 0; x < tabela.length; x++) {
                    tabela[x].querySelector('input[type=checkbox]').checked = false;
                    tabela[x].parentNode.classList.remove("selected");
                }
            }
        }
    });
</script>