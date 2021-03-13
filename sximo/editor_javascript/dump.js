var dump_show_functions = 1;
var dump_print_results_on_page = 1;
var ignore_null = 0; // 1 to ignore keys with null value

var total_number_of_objects=0;
var number_of_skipped_nulls = 0;


function dump(obj, deep_level, this_key, level) {

//alert(obj);
//alert(obj.constructor.name);
//return;
  var type = typeof obj;

  var str = '';
  var array_of_objects = new Array();


  if (level==undefined) { level=0; }
  if (level==0) {
    str += "<hr size=1><input type=button value='close dump' onClick=\"document.getElementById(\'dump_content\').style.display=\'none\'\"><br><b>START OF DUMP: "+obj.constructor.name+"</b>\n\n";

    var caller_function = arguments.callee.caller;
    if (caller_function) {
      str += '<b>Caller function name:</b> '+caller_function.name+'\n\n';
    }

    if (type=='function') {
//      str += "<pre>"+obj+"</pre>";
      str += obj;
    }
  }

  if (deep_level==undefined) { deep_level=1; }
  if (this_key==undefined) { this_key=''; }
  if (type=='string' || type=='number' || type == 'boolean' || type == 'undefined') {
    str += "<b>Type:</b> " + type + "\n";
    str += "<b>Value:</b> "+ obj  + "\n";
  }



  if (type == 'object') {

    var i = 0;
    for (var key in obj) {
      array_of_objects[i] = key;
      i++;
    }

    total_number_of_objects += i;

    var array_length = array_of_objects.length;

    if (level==0) {
      str += "Number of keys in main object: " + array_length + "\n\n";
    }

    if (array_length==0) {
      str += "<b>(empty object)</b>\n";
    }

    array_of_objects = array_of_objects.sort();

    for (var i=0; i<array_length; i++) {

      var key = array_of_objects[i];
      var value = '';
      var is_function = 0;

      try {
        value = obj[key] + ''+''; // Bug? Regexp won't work without it? Stringify

        if (typeof obj[key] == 'function') {
          is_function=1;
        }

        if (value == 'null') {
          number_of_skipped_nulls++;
          continue; // next loop
        }

      } catch (e) { // Firefox bug when key=domConfig
        value = ' DUMP ERROR: key='+key+'; e='+e+"\n";
      }

      value = value.replace(/</g, "&lt;");

      if (is_function==0 || dump_show_functions == 1) {
        if (level>0) {
          if (level>1) {
            str += "&nbsp; &nbsp; &nbsp;"; // ident
          }
          str += "&nbsp; &nbsp; &nbsp;"+this_key+'.';
        }
        str += key + "=" + value + ";\n";
      }

      if (level<deep_level) { // max level recursive (change 1 to 2 or 3 to view larger reports)
        if (value.match(/^\[object/)) {
          var keystr = (this_key == '') ? key : this_key+'.'+key;
          try {
            str += dump(obj[key], deep_level, keystr, level+1);
          } catch(e) {
            str += " &nbsp; &nbsp; "+e+"\n";
          }
        }
      }

    } // next object

  }

  if (level==0) {

    if (number_of_skipped_nulls > 0) {
      str += "\nNumber of skipped nulls: "+number_of_skipped_nulls+"\n";
    }

    str += "\nTotal number of objects: "+total_number_of_objects+"\n\n<b>END OF DUMP</b>\n<hr size=1>\n";

    if (dump_print_results_on_page == 1) {
      var htmlNode = document.createElement('pre');
                     document.body.appendChild(htmlNode);

      htmlNode.id = 'dump_content';
      htmlNode.style.backgroundColor='#f8f8f0';
      htmlNode.style.position='relative'; // Overrides default 'position:static', so z-index will work over 'position:absolute' elements.
      htmlNode.style.zIndex='10001';

// TODO: Should have 'x' (exit) to close dump information
      htmlNode.innerHTML = str;
    }
    
  }

  return(str);

}

