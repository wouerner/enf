<fieldset>
    <legend>Antecedentes Obstétricos / Perinatais:</legend>
    <input type="hidden" value="<b>Antecedentes Obstétricos / Perinatais:</b>">
    <div class="row">
        <div class="input-group col-lg-2">
            <span class="input-group-addon">G</span>
            <input id="G" type="text" class="form-control">
        </div>
        <div class="input-group col-lg-2">
            <span class="input-group-addon">P</span>
            <input  id="P" class="form-control" type="text">
        </div>
        <div class="input-group col-lg-2">
            <span class="input-group-addon">C</span>
            <input  id="C" class="form-control" type="text">
        </div>
        <div class="input-group col-lg-2">
            <span class="input-group-addon">A</span>
            <input  id="A" class="form-control" type="text">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>Número de filhos vivos:</label>
            <input id="numFilhos" class="form-control">
        </div>
        <div class="form-group col-lg-3">
            <label>Última gestação:</label>
            <input id="ultimaGestacao" class="form-control">
        </div>
        <div class="form-group col-lg-6">
            <label>Isoimunização Rh:</label>
            <label class="checkbox-inline">
                <input name="Isoimunização" type="radio"  value="Isoimunização Rh:Sim"> Sim
            </label>
            <label class="checkbox-inline">
                <input  name="Isoimunização" type="radio"  value="Isoimunização Rh:Não"> Não
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-8">
            <label>História de RN pré-termo, pós-termo ou baixo peso:</label>
            <label class="radio-inline">
                <input name="termo" type="radio"  value="Não"> Não
            </label>
            <label class="radio-inline">
                <input name="termo" type="radio"  value="Sim"> Sim
            </label>
        </div>
        <div class="form-group col-lg-4">
            <input class="form-control" name="filhoDe">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>Mortes neonatais:</label>
            <label class="radio-inline">
                <input name="neonatais" type="radio"  value="Mortes neonatais: Sim"> Sim
            </label>
            <label class="radio-inline">
                <input name="neonatais" type="radio"  value="Mortes neonatais: Não"> Não
            </label>
        </div>
        <div class="form-group col-lg-6">
            <label>Natimortos:</label>
            <label class="radio-inline">
                <input name="natimortos" type="radio"  value="Natimortos: Sim"> Sim
            </label>
            <label class="radio-inline">
                <input name="natimortos" type="radio"  value="Natimortos: Não"> Não
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label>Recém-nascidos com:</label>
            <label class="checkbox-inline">
                <input type="radio"  value="icterícia"> icterícia
            </label>
            <label class="checkbox-inline">
                <input type="radio"  value="transfusão"> transfusão
            </label>
            <label class="checkbox-inline">
                <input type="radio"  value="hipoglicemia"> hipoglicemia
            </label>
            <label class="checkbox-inline">
                <input type="radio"  value="ex-sanguíneo-transfusões"> ex-sanguíneo-transfusões
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label>Intercorrências ou complicações em gestações anteriores:</label>
            <label class="checkbox-inline">
                <input name="complicacoes" type="checkbox"  value="<b>Intercorrências ou complicações em gestações anteriores:</b>Não."> Não
            </label>
        </div>
        <div class="form-group col-lg-12">
            <label class="col-lg-1">
                 Sim:
            </label>
            <div class="col-lg-10">
                <input id="interComplicacoes" class="form-control" type="text"  value="">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-lg-12">
            <label>Complicações nos puerpérios</label>
            <label class="radio-inline">
                <input name="compPuerperios" type="checkbox"  value="Complicações nos puerpério Não"> Não
            </label>
        </div>
        <div class="form-group col-lg-12">
            <label class="radio-inline col-lg-1">
                Sim
            </label>
            <div class="col-lg-10">
                <input class="form-control" type="text"  value="">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-lg-12">
            <label>Aleitamento de todos os filhos:</label>
            <input name="Aleitamento" type="hidden" value="Aleitamento de todos os filhos:">
            <label class="checkbox-inline">
                <input name="Aleitamento" type="checkbox" value=" Sim"> Sim
            </label>
        </div>
        <div class="form-group col-lg-12">
            <label class="col-lg-1">
                Não:
            </label>
            <div class="col-lg-8">
                <input class="form-control" type="text">
            </div>
        </div>
    </div>
</fieldset>
