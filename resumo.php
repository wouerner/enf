<div class="row">
    <div class="col-lg-12">
        <div id="resumo"></div>
    </div>
</div>
<script>
    jQuery(function($){
        $("#anos").mask("99 anos");
        $("#data").mask("99/99/9999");
        $("#hora").mask("99:99");
    });

    jQuery("#gerar").click(function(event){
        event.preventDefault();
        var texto='';
        jQuery('input').each(function(index){
            console.log(this.type);
            if (this.type == 'radio' && this.checked==true) {
                texto = texto +', '+ this.value;
            } else {
                if (this.type=='text' || (this.type=='checkbox') && this.checked==true) {
                    texto = texto +', '+ this.value;
                }
            }
        });
        console.log(texto);
        jQuery("#resumo").append(texto);
    });
</script>
