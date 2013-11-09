<div class="row jumbotron">
    <div class="col-lg-12">
        <div id="resumo">

<h3><b>Identificação:</b></h3>
<p>
 Darlene Rosa Souza, 27  anos,  Casada. Parto  normal, dia 12/08/2013, Hora: 01:56.
<br>Antecedentes Familiares: hipertensão arterial, diabetes mellitus.
Antecedentes Pessoais e Ginecológicos: enxaqueca,  cirurgia prévia cesárea. 
<br>Antecedentes Obstétricos / Perinatais: G: 02 ; P: 0 C: 01 ; A: 0; 
 Numero de filhos vivos: 01 Última gestação: 06/2010. Isoimunização Rh: não; 
<br>Intercorrências em gestações anteriores: Sofrimento fetal, infecção urinária. 
<br>Gestação Atual: DUM: 25/11/12; IG: 40 semanas DPP: 31/08/13; Peso: 72 Kg; Altura: 1,66cm; IMC:26 Pré-natal/ Consultas: 6. Tipo Sanguíneo: O; R h: +: Alterações de exames laboratoriais: Traço de anemia falciforme.  
<br>Medicamentos usados na gestação: Paracetamol e antibióticos;  Intercorrências na gestação: Infecção urinária e sangramento  1° trimestre; Regulação imunológica - Sorologias: Hepatite B e C:  imune rubéola: imune toxoplasmose: imune vdrl: não reagente hiv: não reagente.
</p>
<p>
<h3><b>Exame físico:</b></h3>
<p>Queixas: não. Acordada/lúcida, hidratada. Dieta zero. Olhos;  pupilas fotorreativas  Integridade cutânea- Pescoço: sem anormalidades. Integridade cutânea- Mamas: simétricas 
 Regulação termica: Temp 36, 7 °C FR: 22 irpm, 
Oxigenação: Tempo de enchimento capilar < 2seg, Saturação 98%.
Murmúrios vesiculares fisiológicos. 
Regulação Vascular: FC: 59 bpm; PA: 120x85 mmHg. ritmo cardíaco regular .
Integridade cutânea- Abdome:  Abdome normotenso, flácido à palpação. 
Integridade cutânea e mecânica corporal- Membros inferiores: Pulsos periféricos palpáveis, deambula. Edema ++/+4, triagem TVP negativa. 
Avaliação puerperal: Tempo de Puerpério: 1 dia. Tipo de Parto: normal. Episiotomia: não. Laceração de trajeto: Sim. Sinais flogisticos: Não Intercorrências no Parto: não. Retração Uterina: presente. Sangramento: moderada. Amamentação/Vínculo: iniciou na 1ª hora.
<br>Condutas: nenhuma
</p>
<h3><b>Diagnóstico de Enfermagem:</b></h3>
Integridade tissular prejudicada caracterizada por tecido destruído, relacionado á fatores mecânicos. 
<h3>Resultado esperado:</h3>
<h3>Paciente apresentará integridade tissular restaurada.</h3>
<h3><b>Status:</b> Inicial.</h3>
<h3><b>Intervenções de enfermagem:</b></h3>
<ul>
    <li>Avaliar presença de sinais hemorrágicos em região operatória.</li>
    <li>Manter região operatória limpa e evitar focos de infecção.</li>
    <li>Monitorar SSVV e curva térmica.</li>
    <li>Avaliar integridade da sutura em ferida operatória.</li>
    <li>Orientar higiene adequada no períneo.</li>
    <li>Realizar curativos de acordo com a necessidade.</li>
</p>
</div>
    </div>
</div>
<script>
    jQuery(function($){
//        $("#identificacao").mask("identificação: *****************************************");
        $("#anos").mask("99 anos");
        $("#data").mask("dia 99/99/9999");
        $("#hora").mask("Hora 99:99");
        $("#G").mask("G: *?**");
        $("#P").mask("P: *?**");
        $("#C").mask("C: *?**");
        $("#A").mask("A: *?**");
        $("#numFilhos").mask("Numero filhos vivos: **");
        $("#ultimaGestacao").mask("Última gestação: 99/9999");

    });

    jQuery("#gerar").click(function(event){
        event.preventDefault();
        var texto='';
        jQuery('input').each(function(index){
            if (this.type == 'radio' && this.checked==true) {
                texto = texto +' '+ this.value;
            } else {
                if ((this.type=='text' && this.value != '') || (this.type=='hidden') ||
                    ((this.type=='checkbox') && jQuery(this).is(':checked') == true) || 
                    jQuery(this).is('option:selected')==true) {
                    console.log(this.type);
                    texto = texto +' '+ this.value;
                }
            }
        });
        console.log(texto);
        jQuery("#resumo").empty().append(texto);
    });
</script>
