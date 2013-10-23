<div id="resumo">
    Resumo
</div>
<script>
    jQuery("#gerar").click(function(event){
        event.preventDefault();
        var text = jQuery('input[name=estadoCivil]:checked').val();
        //console.log(jQuery('input'));
        //console.log(text);
        var texto='';
        jQuery('input').each(function(index){
            //console.log( index + ": " + $( this ).text() );
            //console.log(  this.type );
            //texto = texto +', '+ this.value;
            if(this.type == 'radio' && this.checked==true){
                console.log(  this.type );
                texto = texto +', '+ this.value;
            }else{
                if (this.type=='text' || this.type=='checkbox') {
                    texto = texto +', '+ this.value;
                }
            }
        });
        console.log(texto);
        jQuery("#resumo").append(texto);
    });
</script>
