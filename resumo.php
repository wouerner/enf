<div class="row jumbotron">
    <div class="col-lg-12">
        <div id="resumo"></div>
    </div>
</div>
<script>
    jQuery(function($){
        $("#identificacao").mask("identificação: *****************************************");
        $("#anos").mask("99 anos");
        $("#data").mask("dia 99/99/9999");
        $("#hora").mask("Hora 99:99");
        $("#G").mask("G: *?**");
        $("#P").mask("P: *?**");
        $("#C").mask("C: *?**");
        $("#A").mask("A: *?**");
        $("#numFilhos").mask("Numero filhos vivos: **");
        $("#ultimaGestacao").mask("Última gestação: 99/9999");
        $("#interComplicacoes")
            .mask("Intercorrências ou complicações em gestações anteriores: ***************************************************************");
        $("#aleitamento").mask("Aleitamento de todos os filhos: *?**************************************************************");

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
