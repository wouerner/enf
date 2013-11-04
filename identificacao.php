<fieldset>
    <legend>Identificação</legend>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>nome:</label>
            <input class="form-control" name="nome" placeholder="" value="">
        </div>
        <div class="form-group col-lg-2">
            <label>Idade:</label>
            <input id="anos" class="form-control" name="anos" placeholder="20 anos">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-5">
            <label class="control-label">Est. Civil:</label>
            <label class="radio-inline">
                <input type="radio" value="Casada" name="estadoCivil" checked> Casada
            </label>
            <label class="checkbox-inline">
                <input type="radio" value="Solteira" name="estadoCivil"> Solteira
            </label>
            <label class="checkbox-inline">
                <input type="radio" value="Viúva" name="estadoCivil"> Viúva
            </label>
            <label class="checkbox-inline">
                <input type="radio" value="Estável" name="estadoCivil"> Estável
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Tipo de parto:</label>
            <input class="form-control" name="">
        </div>
        <div class="form-group col-lg-4">
            <label class="col-lg-2">Data:</label>
            <div class="col-lg-5">
                <input id="data" class="form-control" name="">
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label class="col-lg-2">Hora:</label>
            <div class="col-lg-4">
                <input id="hora" class="form-control" name="">
            </div>
        </div>
    </div>
    <div  class="row">
        <div class="form-group col-lg-4">
            <label class="control-label">Acompanhada do RN:</label>
            <label class="radio-inline">
                <input type="radio" value="Acompanhada do RN:Sim"> Sim
            </label>
            <label class="checkbox-inline">
                <input type="radio" value="Acompanhada do RN:Não"> Não
            </label>
        </div>
        <div class="form-group col-lg-8">
            <label class="col-lg-2">Motivo:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="motivo">
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Antecedentes Familiares</legend>
    <div class="form-group col-lg-8">
        <label class="checkbox-inline">
            <input type="checkbox" value="Hipertensão Arterial"> Hipertensão Arterial
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="Diabetes Mellitus"> Diabetes Mellitus
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="Nenhum"> Nenhum
        </label>
    </div>
    <div class="form-group col-lg-4">
        <label class=" col-lg-4 checkbox-inline">
            <input type="checkbox" value="Outros"> Outros
        </label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="">
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Antecedentes Pessoais e Ginecológicos</legend>
    <div class="form-group">
        <div class="row">
            <div class="control-group col-lg-12">
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="hipertensão arterial crônica"> hipertensão arterial crônica
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="diabetes mellitus"> diabetes mellitus
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="epilepsia"> epilepsia
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="portadora de infecção pelo HIV"> portadora de infecção pelo HIV
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="Nenhum"> Nenhum
                </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label class="checkbox-inline col-lg-3">
                    <input type="checkbox" value="Alergias"> Alergias
                </label>
                <div class="col-lg-6">
                    <input class="form-control" name="alergias">
                </div>
            </div>
            <div class="control-group col-lg-4">
                <label class="checkbox-inline col-lg-3">
                    <input type="checkbox" value="outros"> outros
                </label>
                <div class="col-lg-6">
                    <input class="form-control">
                </div>
            </div>
            <div class="control-group col-lg-4">
                <label class="checkbox-inline col-lg-3">
                    <input type="checkbox" value="DST"> DST
                </label>
                <div class="col-lg-6">
                    <input class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="control-group col-lg-4">
                <label class="checkbox-inline col-lg-4">
                    <input type="checkbox" value="Cirurgias Ginecológicas">Cirurgias Ginecológicas
                </label>
            </div>
            <div class="col-lg-6">
                <input class="form-control">
            </div>
        </div>
    </div>
</fieldset>
