$( function()
{   
    Evaluacion.init();
	
    Evaluacion.control_select_accion( 'id_Pais', 'id_Estado', 'obtener_estados' );

	Evaluacion.control_select_accion( 'id_Estado', 'id_Municipio', 'obtener_municipios' );

    Evaluacion.control_select_accion_escuelas('id_Municipio','id_Escuela', 'obtener_escuelas');

    Evaluacion.control_select_accion( 'id_Escuela', 'id_Profesor', 'obtener_profesores' );

    Evaluacion.control_select_accion( 'id_Profesor', 'id_Grado', 'obtener_grados' );
});

var Evaluacion = function()
{
	function dropdown_accion( campo, hijo, funcion )
    {
        $('select[name="' + campo + '"]').change( function(){
            if( $.isNumeric( this.value ) && this.value != 0)
            {
            	Dropdown.generar_dropdown(campo, hijo, 'controllers/eActivacion/' + funcion);
            }
            else{

                // var label = $('select[name="' + campo + '"]').parent().siblings();

                Dropdown.generar_dropdown( campo, hijo, parseInt ( this.value ), funcion );

                //$('select[name="id_Escuela"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            }
        });
    }

    function dropdown_accion_escuela( campo, hijo, funcion )
    {
        $('select[name="' + campo + '"]').change( function(){
            if( $.isNumeric( this.value ) && this.value != 0){
                Dropdown.generar_dropdown_escuelas( hijo, 'controllers/eActivacion/' + funcion);
            }
            else{
                // var label = $('select[name="' + campo + '"]').parent().siblings();
                //Dropdown.generar_dropdown_escuelas( hijo, parseInt ( this.value ), funcion );
            }
        });
    }

    function buscar_alumnos()
    {
        $("#activacionbuscar").submit(function(event) {
            /* stop form from submitting normally */
            event.preventDefault();

            /* get some values from elements on the page: */
            var $form = $( this ),
                url = $form.attr( 'action' );

            $.ajax({
                url: url,
                type: 'post',
                dataType: 'html',
                data: $form.serialize(),
                beforeSend: function()
                {
                    $('#table_contenido').empty();
                },
                success: function ( respuesta )
                {
                    $('#table_contenido').html( respuesta );
                },
                error: function(event,xhr,options,exc){
                    $('#table_contenido').html(event.responseText);
                }
            });
        });
    }

    function uiGuardar()
    {
        $.ajax({
            url: BaseUrl + 'controllers/eActivacion/guardar',
            type: 'post',
            dataType: 'json',
            data: $("#respuestas").serialize() + '&indicador=' + $('select[name="id_Indicador"]').val() + '&momento=' + $('select[name="id_Momento"]').val(),
            cache: false,
            beforeSend: function( )
            {
                $('#message').empty().removeClass('alert alert-danger');
                $('#message').empty().removeClass('alert alert-success');
                $('#save').addClass('disabled').attr('disabled', true);
            },
            success: function( response )
            {
                if( response.bandera )
                {
                    $('#message').empty().html(response.mensaje).addClass('alert alert-success');

                    setTimeout( function(){
                        $('button[name="btn_buscar"]').click();
                    }, 1000);
                }
                else{
                    $('#message').empty().html(response.mensaje).addClass('alert alert-danger');
                    setTimeout( function(){
                        $('#message').empty()
                    }, 1000);
                }

                $('#save').removeClass('disabled').removeAttr('disabled', false);
            },
            error: function( event, xhr, options, exec){
                $('#message').empty().html( event.responseText ).addClass('alert alert-danger');
                setTimeout( function(){
                    $('#message').empty()
                }, 1000);
            }
        });

    }

	return {
        init: function () {
            buscar_alumnos();

            $('select[name="id_Pais"]').change( function()
            {
                $('select[name="id_Municipio"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Escuela"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Profesor"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Grado"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            });

            $('select[name="id_Estado"]').change( function()
            {
                $('select[name="id_Escuela"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Profesor"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Grado"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            });

            $('select[name="id_Municipio"]').change( function()
            {
                $('select[name="id_Escuela"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Profesor"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
                $('select[name="id_Grado"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            });

            $('select[name="id_Escuela"]').change( function()
            {
                $('select[name="id_Grado"]').empty().addClass('disabled').attr('disabled', true).empty().append( dropdown0 );
            });    
        },
        control_select_accion: function( control, hijito, metodo )
        {
            if( typeof metodo !== 'undefined')
            {
                dropdown_accion( control, hijito, metodo );
            }
        },
        control_select_accion_escuelas: function( control, hijito, metodo )
        {
            if( typeof metodo !== 'undefined')
            {
                dropdown_accion_escuela( control, hijito, metodo );
            }
        },
        guardar: function()
        {
            uiGuardar();
        }
    }
}();