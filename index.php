<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Unopar\Core\ValidadorUrl;

$page = filter_input(INPUT_GET, 'page');

if (!ValidadorUrl::validar($page)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="Public/img/icon3.png" sizes="32x32" type="image/png">
        <link rel="stylesheet" type="text/css" href="Public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Public/css/font-awesome.css">
        <link rel="stylesheet" href="Public/css/estilo.css" />
        <link rel="stylesheet" href="Public/css/sweetalert.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
        <script src="Public/js/sweetalert.min.js"></script>
        <script src="Public/js/jquery.min.js"></script>
        <script src="Public/js/bootstrap.min.js"></script>
		<script src="Public/js/mask.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row"><!-- Inicio da linha -->
                <div class="col-md-2 sidebar"><!-- Inicio da sidebar -->
                    <div class="sidebar-desc">
                        <h1><img src="Public/img/profile.png" alt="" width="45px" height="45px"></h1>
                        <p class="titulo-side">ADMIN</p>
                    </div>
                    <div class="sidebar-menu"><!-- #### Menu #### -->
                        <ul>
                            <li>
                                <a href="Home">
                                <i class="fa fa-dashboard fa-fw"></i>
                                <span class="titulo">Inicio</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#menu_paciente" data-toggle="collapse">
                                <i class="fa fa-users fa-fw"></i>
                                <span class="titulo">Pacientes</span>
                                <span class="arrow"></span>
                                </a>

                                <ul id="menu_paciente" class="sidebar-sub-menu collapse">
                                <li><a href="CadastroPaciente">Novo<i class="fa fa-plus"></i></a></li>
                                <li><a href="ListagemPaciente">Listar<i class="fa fa-list"></i></a></li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#menu_medico" data-toggle="collapse">
                                <i class="fa fa-user-md fa-fw"></i>
                                <span class="titulo">Fisioterapeuta</span>
                                <span class="arrow fa-fw"></span>
                                </a>

                                <ul id="menu_medico" class="sidebar-sub-menu collapse">
                                <li><a href="CadastroMedico">Novo<i class="fa fa-plus"></i></a></li>
                                <li><a href="#">Listar<i class="fa fa-list"></i></a></li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#menu_aluno" data-toggle="collapse">
                                <i class="fa fa-user fa-fw"></i>
                                <span class="titulo">Estagiário</span>
                                <span class="arrow"></span>
                                </a>

                                <ul id="menu_aluno" class="sidebar-sub-menu collapse">
                                <li><a href="CadastroAluno">Novo<i class="fa fa-plus"></i></a></li>
                                <li><a href="#">Listar<i class="fa fa-list"></i></a></li>
                                </ul>
                            </li>                          

                            <li>
                                <a href="#menu_agenda" data-toggle="collapse">
                                <i class="fa fa-calendar fa-fw"></i>
                                <span class="titulo">Agenda</span>
                                <span class="arrow"></span>
                                </a>

                                <ul id="menu_agenda" class="sidebar-sub-menu collapse">
                                <li><a href="AgendamentoConsulta">Novo<i class="fa fa-plus"></i></a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#menu_servico" data-toggle="collapse">
                                <i class="fa fa-tasks fa-fw"></i>
                                <span class="titulo">Anamnese</span>
                                <span class="arrow"></span>
                                </a>

                                <ul id="menu_servico" class="sidebar-sub-menu collapse">
                                <li><a href="Prontuario">Novo</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#menu_cid10" data-toggle="collapse">
                                <i class="fa fa-tasks fa-fw"></i>
                                <span class="titulo">CID 10</span>
                                <span class="arrow"></span>
                                </a>

                                <ul id="menu_cid10" class="sidebar-sub-menu collapse">
                                <li><a href="ListagemCid10">Listar cid 10</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- #### Fim do Menu #### -->
                </div><!-- Fim da Sidebar -->
                <div class="col-md-10 offset-md-2"><!-- Inicio do conteúdo -->
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <!-- #### Os Formulários serão chamados aqui #### -->
                            <?php
                            require_once sprintf('App/Pages/%s.php', ucfirst($page));
                            ?>
                        <!-- #### Formulários #### -->
                        </div>
                    </div>
                </div><!-- Fim do conteúdo -->
            </div><!-- Fim da linha -->
        </div>
    </body>
</html>
