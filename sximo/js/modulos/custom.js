
var dropdown0 = '<option value="">- SELECCIONE -</option>';
Dropdown = function()
{
    function dropdown( padre, control, controller, data )
    {
        var label = $('select[name="' + control + '"]').parent();

        var response = '', bandera = false;

        if( jQuery.type (controller) === 'string' ){
            $.ajax({
                url: BaseUrl + controller,
                type: 'post',
                dataType: 'json',
                data: 'clave=' + $('select[name="' + padre + '"]').val(),
                cache: false,
                beforeSend: function()
                {
                    $('select[name="' + control + '"]').empty().html('Cargando información');
                },
                success: function( respuesta )
                {
                    if( respuesta.bandera && respuesta.mensaje.length > 0)
                    {
                        response = dropdown0;
                        for( datos in respuesta.mensaje )
                        {
                            response += '<option value="' + respuesta.mensaje[datos].id + '">' + respuesta.mensaje[datos].titulo + '</option>';
                        }
                        bandera = true;
                    }else{
                        response = respuesta.mensaje;
                    }
                },
                error: function( event, xhr, options, exec){
                    response = event.responseText
                },
                complete: function()
                {
                    if( bandera == false)
                    {
                    	/*
                        $( label ).removeClass('state-success ').addClass('state-error');

                        if( $('em[for=\''+ control +'\']').length > 0){
                            $('em[for="'+ control +'"]').empty().text( response ).removeAttr('style');
                        }
                        else{
                            $('<em for="' + control + '" class="invalid">' + response + '</em>').insertAfter( label );
                        }*/

                        $('select[name="' + control + '"]').addClass('disabled').attr('disabled', true).empty().append( dropdown0 );

                        return false;
                    }

                    $( label ).removeClass('state-error ');

                    $('select[name="' + control + '"]').append( response ).removeClass('disabled').removeAttr('disabled');

                    $('em[for="'+ control +'"]').text('');
                }
            });
        }
        else{
            $( label ).removeClass('state-error ');
            $('select[name="' + control + '"]').addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            $('em[for="'+ control +'"]').text('');
        }
    }

    function dropdown_escuelas( control, controller )
    {
        var label = $('select[name="' + control + '"]').parent();

        var response = '', bandera = false;

        if( jQuery.type (controller) === 'string' ){
            $.ajax({
                url: BaseUrl + controller,
                type: 'post',
                dataType: 'json',
                data: 'pais=' + $('select[name="id_Pais"]').val() + '&estado=' + $('select[name="id_Estado"]').val() + '&municipio=' + $('select[name="id_Municipio"]').val(),
                cache: false,
                beforeSend: function()
                {
                    $('select[name="' + control + '"]').empty().html('Cargando información');
                },
                success: function( respuesta )
                {
                    if( respuesta.bandera && respuesta.mensaje.length > 0)
                    {
                        response = dropdown0;
                        for( datos in respuesta.mensaje )
                        {
                            response += '<option value="' + respuesta.mensaje[datos].id + '">' + respuesta.mensaje[datos].titulo + '</option>';
                        }

                        bandera = true;
                    }else{
                        response = respuesta.mensaje;
                    }
                },
                error: function( event, xhr, options, exec){
                    response = event.responseText
                },
                complete: function()
                {
                    if( bandera == false)
                    {
                        /*
                        $( label ).removeClass('state-success ').addClass('state-error');

                        if( $('em[for=\''+ control +'\']').length > 0){
                            $('em[for="'+ control +'"]').empty().text( response ).removeAttr('style');
                        }
                        else{
                            $('<em for="' + control + '" class="invalid">' + response + '</em>').insertAfter( label );
                        }*/

                        $('select[name="' + control + '"]').addClass('disabled').attr('disabled', true).empty().append( dropdown0 );

                        return false;
                    }

                    $( label ).removeClass('state-error ');

                    $('select[name="' + control + '"]').append( response ).removeClass('disabled').removeAttr('disabled');

                    $('em[for="'+ control +'"]').text('');
                }
            });
        }
        else{
            $( label ).removeClass('state-error ');
            $('select[name="' + control + '"]').addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            $('em[for="'+ control +'"]').text('');
        }
    }

    return {
        generar_dropdown: function(padre, control, controlador)
        {
            dropdown( padre, control, controlador);
        },

        generar_dropdown_escuelas: function( control, controlador)
        {
            dropdown_escuelas( control, controlador );
        }
    }
}();