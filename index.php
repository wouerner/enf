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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#antObstetricos">
                                Passo 02
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
                                Passo 03
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
                                Passo 04
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
                                Passo 05
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
                                Passo 06
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
        <form>
            <div class="form-group">
                <label>Diagnostico Enfermagem:</label>
                <input class="form-control" type="text" value="Integridade tissular prejudicada">
            </div>
            <div class="form-group">
                <label>Resultado Esperado:</label>
                <input class="form-control" type="text" value="">
            </div>
            <div class="form-group">
                <label>Status:</label>
                <input class="form-control" type="text" value="">
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Intervenções de enfermagem</label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">Avaliar presença de sinais hemorrágicos em região operatória.
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2">Manter região operatória limpa e evitar focos de infecção. 
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Monitorar SSVV e curva térmica
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Avaliar integridade da sutura em ferida operatória.
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Morientar higiene adequada no períneo.                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Realizar curativos de acordo com a necessidade.
                    </label>
                </div>
            </div>
        </form>
        <div id="resumo">
            Resumo
        </div>
    </body>
</html>
