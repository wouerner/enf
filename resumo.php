<div class="row jumbotron">
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
            if (this.type == 'radio' && this.checked==true) {
                texto = texto +', '+ this.value;
            } else {
                if ((this.type=='text' && this.value != '') || ((this.type=='checkbox') && 
                    jQuery(this).is(':checked') == true)
                    //this.checked==true
                    ) {
                    console.log(this.type);
                    texto = texto +', '+ this.value;
                }
            }
        });
        console.log(texto);
        jQuery("#resumo").append(texto);
    });
</script>
