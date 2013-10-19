<html>
    <head>
        <meta charset="utf-8">
        <style>
            @import "assets/bootstrap/dist/css/bootstrap.css";
        </style>
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    </head>
    <body class="container">
        <h1>Historico de Enfermagem da Puérpera</h1>
        <form>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Passo 01
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('identificacao.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#antFamiliares">
                                Passo 02
                            </a>
                        </h4>
                    </div>
                    <div id="antFamiliares" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('antFamiliares.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#antPessoais">
                                Passo 03
                            </a>
                        </h4>
                    </div>
                    <div id="antPessoais" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('antPessoais.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#antObstetricos">
                                Passo 04
                            </a>
                        </h4>
                    </div>
                    <div id="antObstetricos" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('antObstetricos.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#gestacaoAtual">
                                Passo 05
                            </a>
                        </h4>
                    </div>
                    <div id="gestacaoAtual" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('gestacaoAtual.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#regulacaoImunlogica">
                                Passo 06
                            </a>
                        </h4>
                    </div>
                    <div id="regulacaoImunlogica" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('regulacaoImunologica.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#exameFisico">
                                Passo 07
                            </a>
                        </h4>
                    </div>
                    <div id="exameFisico" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('exameFisico.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#avaliacaoPuerperal">
                                Passo 08
                            </a>
                        </h4>
                    </div>
                    <div id="avaliacaoPuerperal" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php include('avaliacaoPuerperal.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
         </form>
    </body>
</html>
