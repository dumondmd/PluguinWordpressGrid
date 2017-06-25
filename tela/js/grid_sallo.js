$(document).ready(function() {
    
    $('.li_estados').bind('click', function() {
        

        $.ajax({
            url: '../wp-content/plugins/grid-sallo/db/buscar_info_uf.php',
            data: {
                uf: this.id
            },
            dataType: 'html',
            type: 'POST',
            beforeSend: function() {

                $('#html_resultado_uf').html('Aguarde...');
            },
            success: function(data, textStatus) {

                $('#html_resultado_uf').html(data);

            },
            complete: function() {

            },
            error: function(xhr, er) {

            }
        });

    });
    
           
    $('#endereco').keypress(function (e) {
        var code = null;
        code = (e.keyCode ? e.keyCode : e.which);                
        return (code == 13) ? false : true;
    });
  

    $('#endereco').keypress(function(){
        var valor = $('#endereco').val();
        $.ajax({
            url: '../wp-content/plugins/grid-sallo/db/buscar_info_pesquisa.php',
            data: { endereco : valor },
            dataType: 'html',
            type: 'POST',
            beforeSend: function() {

                $('#html_resultado_uf').html('Aguarde...');
            },
            success: function(data, textStatus) {

                $('#html_resultado_uf').html(data);

            },
            complete: function() {

            },
            error: function(xhr, er) {
                $('#html_resultado_uf').html('ERRO!');                
            }
        });

    });

});