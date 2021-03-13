

//valida caracteres especiales y campos de comentarios

var chars_letras="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-0123456789 ";
var chars_comen="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzáéíóúÁÉÍÓÚÑñ-0123456789!#$%&/()=?¿¡.,;: -_ ";


    $(document).on("click", "#guardar_datos", function(e) {


        if ($("#register_entity").val() == "") {
            new Messages(2, "Debe Agregar entidad de registro");
            return false;
        }

        if ($("#observations").val() == "") {
            new Messages(2, "Debe Agregar Comentarios");
            return false;
        }





        });



$('#register_entity').keyup(function () {
  //this.value = this.value.replace(/([.*+?\"·#%&^$˜><ŒœŠšŸ†‡‰=-_º{}()|\[\]\/\\])/g,'');
    this.value = check_chars(this.value,chars_letras);
});


$('#observations').keyup(function () {
  //this.value = this.value.replace(/([.*+\"·#%&^$˜><ŒœŠšŸ†‡‰=-_º{}()|\[\]\/\\])/g,'');
  this.value = check_chars(this.value,chars_comen);
});

function check_chars(cadena, chars)
{
    var array=new Array();
    var s = "";
    var j = 0;
    for (i = 0; i < cadena.length; i++)
    {
        if (chars.indexOf(cadena.charAt(i)) != -1)
        {
          s = s + cadena.charAt(i);
        }
        else j++;
    }
    cadena = s; 
  return cadena;
}

//************************************************************





