<html>
    <head>
        <meta charset="utf-8">
        <style>
            @import "assets/bootstrap/dist/css/bootstrap.css";
            @import "assets/css/style.css";
        </style>
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/jquery/jquery.maskedinput.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    </head>
    <body class="container">
        <h1>Historico de Enfermagem da Puérpera</h1>
        <form>
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
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
            <fieldset>
                <legend>Intervenções de enfermagem</legend>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Avaliar presença de sinais hemorrágicos em região operatória.">Avaliar presença de sinais hemorrágicos em região operatória.
                        </label>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Manter região operatória limpa e evitar focos de infecção.">Manter região operatória limpa e evitar focos de infecção.
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" value=" Monitorar SSVV e curva térmica"> Monitorar SSVV e curva térmica
                        </label>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox"  value="Avaliar integridade da sutura em ferida operatória."> Avaliar integridade da sutura em ferida operatória.
                        </label>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox"  value="Morientar higiene adequada no períneo."> Morientar higiene adequada no períneo.                    </label>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="checkbox-inline">
                            <input type="checkbox"  value="Realizar curativos de acordo com a necessidade."> Realizar curativos de acordo com a necessidade.
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row">
                <div class="col-lg-12">
                    <button id="gerar" type="button" class="btn btn-primary">Gerar</button>
                </div>
            </div>
        </form>
        <?php include('resumo.php'); ?>
    </body>
</html>
