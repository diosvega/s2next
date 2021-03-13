var myCodeMirror = null;

var $js = {};

$js.js_id = null;

$( 
 function() {

//   myCodeMirror = CodeMirror.fromTextArea(document.getElementById('js_code'), {
   myCodeMirror = CodeMirror(document.getElementById('js_code'), {
    'lineNumbers': true,
     'indentUnit': 0,
          'theme': 'default',
    'smartIndent': false,
      'enterMode': "flat",
'styleActiveLine': true,
      'autofocus': true
  });

//,           'mode': "xapplication/x-ejs"

//'change': function() { alert(8)},

//alert(myCodeMirror.changeGeneration());

  $('.CodeMirror').addClass('beauty-input');
// js_code width, height:
//  myCodeMirror.setSize('50%','100%');



// Is user logged in ?
  var auth_cookie_value = getCookie(auth_cookie_name);

  if (auth_cookie_value) { // user is already logged in
    $('#login_show').hide('slow');

    var auth_url = 'https://inauth.insite.com.br/mod_perl/login.pl';

    POST({
      url: auth_url,
     data: {
               'action': 'get_user_info',
          'cookie_name': auth_cookie_name,
         'cookie_value': auth_cookie_value
     },
     'callback': function(res) {
                   if (res.user_username != null && res.user_username != '') { // user is logged in
                     $js.logged_user_username = res.user_username;
//console.log("USER IS LOGGED IN: set_and_show_user_info: set \$js.user_username="+$js.logged_user_username);

                     set_and_show_user_info(res);

                     if ($js.after_auth_callback_should_display_checkbox_autorun_for_user == res.user_username) { // User page is for this user.
                       $('.checkbox_autorun').css('display', '');
                     }


                   } else { // wrong cookie(?) or expired session
console.log("AUTH ERROR: expired session?");
                     $js.logged_user_username = '';
//err=Timeout (inatividade por mais de 12 horas).;
//dump(res);
logout();
                   }
                 }
     });

  }



  // Parse REQUEST_URI to find username and code id

  var url = window.location.pathname;

console.log(url);
//  var found_path = url.match(/([\w\-]+)(.*)/); // rsiqueira/escrever
  var found_path = url.match(/^\/([\w\-]+)(\/.*)?$/); // rsiqueira/escrever

console.log(found_path);

  if (found_path) { // is not home

    $js.js_username = found_path && found_path[1];

    var uri_after_username = found_path[2];

    if (typeof uri_after_username == 'string') {
      // http://js.do/rsiqueira/...?
      uri_after_username = uri_after_username.substr(1); // '/123' -> '123'
    } else {
      // http://js.do/rsiqueira
      uri_after_username = null;
    }


    if (uri_after_username == '') {
      uri_after_username = null;
    }

    if ($js.js_username == 'code') { // special username for anonymous code
      $js.js_username = null;
    }

    $js.js_permalink = uri_after_username;

  }

  if ($js.js_permalink == null && $js.js_username != null) { // will load user author page

    load_author_page($js.js_username);

  }

  if ($js.js_permalink != null) { // will load code

    load_code_and_run($js.js_username, $js.js_permalink);

  } else { // Load default code
    create_iframe_results();
//    load_sample_code();
// TODO: Load from database

    code = "<script>\n var text_1 = 'xHello';\n var text_2 = 'World';\n document.write(text_1 + text_2);\n<\/script>"+
"<p>\nYou can also edit <b>HTML</b> code\n</p>";

code = '<p style="line-height: 18px; font-size: 18px;  font-family: times;">\nClick "<i>Load samples</i>" to view and edit more JS samples.<br>\n<br>\nLabyrinth generated with JavaScript:<br><br>\n<script>\nfor (var line=1; line<60; line++) {\n'+
'  for(var i=1;i<29;i++) {\n    var s = (Math.floor((Math.random()*2)%2)) ? "\u2571" : "\u2572";\n'+
'    document.write(s);\n  }\n  document.writeln("<br>");\n}\n</script>\n</p>\n';

    myCodeMirror.setValue(code);
    myCodeMirror.markClean(); // is saved and not edited
    run_code(); // auto-run default code

  }


 }

);


$('#js_code').focus(function() {
  $('#label_javascript').css('opacity','0.25');
});

$('#js_code').blur(function() {
  $('#label_javascript').css('opacity','0.5');
// TODO: Nao funciona
//  reposition_label_on_scroll('js_code', 'label_javascript');
});

/*
function alert_message(alert_type, msg) { // alert_type = block, error, success, info

  var msg = '<a class="close" href="javascript:;" onClick="$(\'#alert_message\').hide()">&times;</a>'+ msg;
  $('#alert_message').empty()
                     .removeClass('alert-success').removeClass('alert-error').removeClass('alert-info').removeClass('alert-block')
                     .addClass('alert-'+alert_type)
                     .hide().fadeIn(50);
  $('#alert_message')[0].innerHTML=msg; // better than .html(msg) because malformed html was causing error

}
*/

function add_framework(framework_url) {
  if (framework_url == '') {
    return false;
  }
  var code = myCodeMirror.getValue();
  var include_framework;

  if (framework_url.indexOf('<') != -1) { // Framework already include script tags
    include_framework = framework_url;
  } else {
    include_framework = '<script src="' + framework_url + '"><'+'/script>';
  }

  if (code.indexOf(include_framework) != -1) { // Framework already included
//    alert_message('success', 'This framework is already included in your code.');
  } else {
    code = include_framework + '\n' + code;
    myCodeMirror.setValue(code);
  }
}


function contains_scrollbar(id) {

  var area = document.getElementById(id);

  if (area.nodeName == 'IFRAME') {
    area = area.contentDocument.body;
  }

  return ( area.scrollHeight > area.clientHeight );
}


// TODO: Remover dead code
// TODO: Nao funciona para o myCodeMirror
function reposition_label_on_scroll(area_id, label_id) {
  if (contains_scrollbar(area_id)) {
    $('#'+label_id).css('right','-22px');
  } else {
    $('#'+label_id).css('right','0px');
  }
}

var html_code_on = false;

// save new or save update
function save_code(param) {

  $js.is_update = false; // default is save as new

  if (param == 'new') { // Save as a new js
    $js.is_update = false;
    var js_permalink = $('#js_permalink').val();
    if (js_permalink.match(/^\d+/)) { // is 'js_id' from previous code. Clear.
      $('#js_permalink').val(''); // will use the new js_id as js_permalink
    }

  } else if (param == 'update') {
    $js.is_update = true;
  } else {
//    alert("save_code error");
    return false;
  }

  var js_code = myCodeMirror.getValue();

//  if ($js.js_id != null) {
//    $js.is_update = true;
//  }

  POST({
         'url': '/mod_perl/js.pl',
        'data': {
                'action': 'save_code',
               'js_code': js_code,
              'js_title': $('#js_title').val(),
          'js_permalink': $('#js_permalink').val(),
                 'js_id': $js.js_id,
             'is_update': $js.is_update
               },
    'callback':
      function(res) {

        $js.js_id = res.js_id;

        var js_url_link = show_this_code_info_from_server(res);

        var msg;
        if ($js.is_update == true) {
          msg = "Your code has been updated. Address: ";
          if (res.js_permalink != res.previous_js_permalink)  {
            if (typeof history.pushState === "function") { // IE 9 does not support
              window.history.pushState({}, $js.js_id, $js.js_url_REQUEST_URI);
            } else { // not supported
              document.location.href = $js.js_url_REQUEST_URI;
            }
          }
        } else { // is new
          msg = "Your code has been stored in this new address: ";
          if (typeof history.pushState === "function") { // IE 9 does not support
            window.history.pushState({}, $js.js_id, $js.js_url_REQUEST_URI);
          } else { // not supported
            document.location.href = $js.js_url_REQUEST_URI;
          }
        }

        msg = msg + js_url_link;

//        alert_message('success', msg);

        myCodeMirror.markClean(); // is saved and not edited

        if ($js.is_update != true) { // first save
          $('#save_button').hide();
          $('#save_update_buttons').show();
        }

        $js.changes_already_saved = true;

        // User is owner of this code
        $('#delete_code_button').show();

        if (res.user_not_logged_in) {
          login_show();
        }

      }
  });

}

window.onbeforeunload = function() {
 if (myCodeMirror.isClean() == false) {
// TODO: Not showing this. It displays: "Do you want to reload/leave this site? Changes you made may not be saved."
   return "This code has not been saved yet.";
 } else {
   return null;
 }
}


function get_code_url_link(user_username, js_permalink) {
  var domain = "http://js.do";
  if (user_username == '') {
    user_username = 'code';
  }
  $js.js_url_REQUEST_URI = '/'+user_username+'/' + js_permalink;
  var js_code_url = domain + $js.js_url_REQUEST_URI;
  var js_code_url_link = '<a href="'+js_code_url+'">'+js_code_url+'</a>';

  return js_code_url_link;
}

function get_author_url_link(js_username) {
  var js_author_url = '/' + js_username;
  var js_author_url_link = '<a href="'+js_author_url+'">'+js_username+'</a>';
  return js_author_url_link;
}

function show_this_code_info_from_server(js_info) {

  $('#js_title').val(js_info.js_title);         // Show code title
  $('#js_permalink').val(js_info.js_permalink); // Show permalink info


  var js_url_link = get_code_url_link(js_info.user_username, js_info.js_permalink);


  var user_uri = js_info.user_username;
  if (!user_uri) {
    user_uri = 'code';
  }
  $('#js_username_uri').html(user_uri); // url link base: http://js.do/user_uri/[_____]


  $('#info_url_div').hide().show('fast');
  $('#js_url_link').html(js_url_link);

  var js_author_link = get_author_url_link(js_info.user_username);

  $('#js_username').html(js_author_link);

  $('#js_insert_date').html(js_info.js_insert_date);

  return js_url_link;

}

function load_sample_code_list() {
//  var msg = $('#sample_code').html();
//  alert_message('block', msg);
  $('#js_board').hide('fast');
  $('#sample_code').show('fast');
}

function show_user_code_list() {
  $('#js_board').hide('fast');
  $('#user_code_list').show('fast');
}









function create_iframe_results() {

  $('#result').remove(); // remove previous iframe (may contain dead javascript functions)
  var i = document.createElement('IFRAME');
  i.id = 'result';
  i.className = 'beauty-input';
  i.style.height = '100%';
//  i.style.width = '97%';
  i.style.width = '100%';
//  i.style.float = 'right';
  var parent = document.getElementById('results_area');
  parent.appendChild(i);
// TODO:
//onFocus="$('#label_result').css('opacity','0.25');" onBlur="$('#label_result').css('opacity','0.5');"
}

function delete_code(js_id) {

  var ok = confirm("Are you sure you want to permanently delete this code ?");

  if (ok == true) {
    POST({
      url: '/mod_perl/js.pl',
      data: {
                'action': 'delete_code',
                 'js_id': js_id
      },
      'callback': function(res) {
//        alert_message('error', res.msg);
//zxc
      }
    });
  }

}


function run_code(code_uri) {

  $('#js_board').show('fast');

  if (code_uri != null) { // Will load code sample
    var uri = code_uri.split('/'); // "samples/hello-world" (username/js_permalink)

    if (typeof history.pushState === "function") { // IE 9 does not support
      window.history.pushState({}, '/'+code_uri, '/'+code_uri);
    } else { // not supported
// commented (will keep url unchanged, it's faster than reloading page with new url)
//      document.location.href = $js.js_url_REQUEST_URI;
    }

    load_code_and_run(uri[0], uri[1]);
    return;
  }

//  var code = document.getElementById('js_code').value;
  var code = myCodeMirror.getValue();

  var code_normalized = code.toLowerCase();

  code_without_script_tag = false;

  if (code_normalized.indexOf('<script')==-1) {
    code_without_script_tag = true;
  }

  if (code_without_script_tag == true) {
    code = '<script>\n' + code + '\n</'+'script>\n';
//    document.getElementById('js_code').value = code; // update textarea
    myCodeMirror.setValue(code); // update textarea
  }

//  $('#alert_message').hide('fast');

  if (code_normalized.indexOf('onerror')==-1) { // code is without its own error handling, then add one
    code = '<script>\n'+
'window.onerror = function(message, url, linenumber) {'+
'  parent.alert_message("error", "<b>JavaScript error:</b> " + message + " on line " + linenumber);'+
'};\n</'+'script>\n' + code;

  }


  delete code_normalized;

// $('#result').contents().find('html').html(code);

  create_iframe_results();

  var doc = document.getElementById('result').contentDocument;
  doc.open();
  doc.write(code); // look mum, no eval
  doc.close();

  $('#results_area').fadeTo('fast', 0.4, function() { $('#results_area').fadeTo('fast', 1) });

//alert( $('#result').contents().find('html').html(code) );

// TODO: Nao funciona - remover
//  reposition_label_on_scroll('js_code', 'label_javascript');
//  reposition_label_on_scroll('result', 'label_result');
}

var results_is_on = true;

function toggle_results_area() {
  if (results_is_on == true) { // turn off results

    $('#results_area').hide('fast', function() {
       document.getElementById('js_area').style.width='98%';
    });

    results_is_on = false;
  } else {
    document.getElementById('js_area').style.width  ='48%';
    document.getElementById('results_area').style.width='48%';

 //   document.getElementById('js_code').style.width  ='100%';
//    document.getElementById('results_code').style.width='100%';
    $('#results_area').show('fast');

    results_is_on = true;
  }
}






function toggle_autorun(js_id, that) { // User can change option to auto-run code or not
  console.log(that.checked);
   var js_autorun = that.checked ? '1' : '0';
   GET({
       'url': '/cgi-bin/js.pl?action=update_autorun&js_id='+js_id+'&js_autorun='+js_autorun,
  'callback':
      function(res) {
//dump(res);
      }
   });
}




function load_author_page(user_username) {

    GET({
          'url': '/cgi-bin/js.pl?action=load_user_page&user_username='+user_username,
     'callback':
      function(res) {
          var results_length = res.results.length;

          var all_code = '';

// TODO: Template tmpl with code listing
          for (var i=0; i<results_length; i++) { // For each code found from this user

            var js_url_link = get_code_url_link(res.results[i].user_username, res.results[i].js_permalink);

            var js_code_start = res.results[i].js_code;
            var js_autorun = res.results[i].js_autorun;
            var js_id = res.results[i].js_id;

            if (js_code_start != null) {
              js_code_start = js_code_start.replace(/<\/?script.*?>/g, "");
              js_code_start = js_code_start.replace(/([\S\s]{255})[\S\s]*/, "$1...");
              js_code_start = js_code_start.replace(/</g, "&lt;");
            }

            var js_insert_date = res.results[i].js_insert_date;

            var js_title = res.results[i].js_title;
            var this_title = '';
            if (js_title) {
              this_title = '<b>'+js_title+'</b><br>\n';
            }

            var checked_str = js_autorun==1 ? 'checked' : '';

console.log('Info about js_id='+js_id+'; $js.logged_user_username='+$js.logged_user_username);

            // checkbox will "display: none" if not logged in, or user is viewing code from other user or if user auth ($js.logged_user_username) is not yet set (callback slow).
            var display_none = '';

            if (user_username == $js.logged_user_username) { // Will display autorun management checkbox!
               display_none = '';
            } else {
               display_none = 'display: none;';
               $js.after_auth_callback_should_display_checkbox_autorun_for_user = user_username; // not yet auth info ?
            }

            // Only shows for the logged in owner user
            var js_autorun_str = '<span class="checkbox_autorun" style="color: #c0c0c0; '+display_none+'">auto-run <input type=checkbox '+checked_str+' onClick="toggle_autorun('+js_id+', this)"><br></span>';

            all_code += this_title + js_url_link + '</b><br>'
                        + js_code_start + '<br>'
                        + js_autorun_str
                        + '<i style="font-size: 0.8em">' + js_insert_date + '</i><hr>';
          }

          if (results_length>0) {
            all_code = '<b>Code list by user:</b> ' + user_username + "<br><br>\n"+ all_code;
          } else {
// TODO: not working (seems to be called before verify who is logged in)
            if ($js.logged_user_username == user_username) {
              all_code = "You don't have any saved code yet.";
            } else {
              all_code = 'This user (' + user_username + ') does not have any saved code yet.';
            }
          }

//          $('#user_code_list').show().html(all_code);

all_code = '<a class="close" href="http://js.do/">&times;</a>'+all_code;

          $('#user_code_list').html(all_code);
show_user_code_list();

      }

    });


}



function load_code_and_run(js_username, js_permalink) {

// TODO: zxc qwe nao funciona 404 com mod_perl ???
    GET({
          'url': '/cgi-bin/js.pl?action=load_code&user_username='+js_username+'&js_permalink='+js_permalink,
     'callback':
      function(res) {

        var js_id = res.js_id;
        if (js_id) { // code was found

          $js.js_id = res.js_id;
          $('#save_button').hide();
          $('#save_update_buttons').show();
          show_this_code_info_from_server(res);

          if (res.user_username == $js.logged_user_username) { // User is owner of this code
            $('#delete_code_button').show();
          } else {
            $('#delete_code_button').hide();
          }

          myCodeMirror.setValue(res.js_code);
          myCodeMirror.markClean(); // is saved and not edited
          if (res.js_autorun==1) {
            run_code(); // auto-run
          }

        }
      }
    });

}

function update_user_username_tmp_code() {
  // If user saved code while he was not logged in, update database to associate the correct username with previously anonymous stored code
  POST({
     'url': '/mod_perl/js.pl',
    'data': {
       'action': 'update_user_username_tmp_code'
     },
     'callback': function(res) {
        if (res.msg != null) { // May have msg about anonymous code updated to use this user_username
//          alert(res.msg);
        } else { // no anonymous code to update
        }
     }
  });
}

function getCookie(c_name) {
  var i,x,y,ARRcookies=document.cookie.split(";");
  for (i=0;i<ARRcookies.length;i++) {
    x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
    y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
    x=x.replace(/^\s+|\s+$/g,"");
    if (x==c_name) {
      return unescape(y);
    }
  }
}




// AUTH FUNCTIONS //

// TODO: Register/Unregister this function on open/close popup
$(document).keyup(function(e) {
  if (e.keyCode == 27) { $('#close_login_popup').click(); } // esc
//  if (e.keyCode == 13) { $('.enter').click(); }   // enter
});

var auth_cookie_name   = 'js.do-auth';
var auth_cookie_domain = '.js.do';

function logout() {
  $js.logged_user_username = '';
  document.cookie = auth_cookie_name+'=; DOMAIN='+auth_cookie_domain+'; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  hide_user_info();
//  alert_message('info', 'You\'re logged out. Please <a href="javascript:;" onClick="login_show()">login</a> again to edit and save your code.');
}


function chklogin() {

  var user_username = $('#login_user_username').val();
  var user_password = $('#login_user_password').val();
  var auth_url = 'http://inauth.insite.com.br/mod_perl/login.pl';

  POST({
    'url': auth_url,
    'data': {
        'user_username': user_username,
        'user_password': user_password,
                 'lang': 'en',
              'cookies': 'no',
               'app_id': 'js.do',
               'action': 'chklogin',
          'cookie_name': auth_cookie_name
     },
    'callback': function(res) {

       if (!res.user_username) {
// TODO: O que fazer quando nao tem username???!?!!!
// Devia pedir para cadastrar um username.
//alert('ERROR: No username. Please register again and choose a username.');
//         res.user_username = res.user_email;
       }

       var author_url_link = get_author_url_link(res.user_username);
       res.msg = 'You are now logged in as ' + author_url_link;

       set_login_cookie_and_info(res);

       // Load author code after login
       load_author_page(res.user_username);

       // Clear lightbox
       lightbox(0);

       // If user don't click "x" to hide alert "You are now logged in as (username)", will auto-hide after 5 seconds
//       setTimeout("$('#alert_message').hide('slow')", 4000);

    }

  });

}




function hide_user_info(user_username) { // called on logout

  $js.user_username = null;
  $js.user_email    = null;
  $('#top_user_info').hide();
  $('#top_login_info').show('fast');
  $('#top_user_info_username').html('');

  if ($('#js_permalink').val()=='') {
    var  user_uri = 'code';
    $('#js_username_uri').html(user_uri); // url link base: http://js.do/code/
  }

}

function set_login_cookie_and_info(res) {
  if (res.auth_cookie_name != null) {
    document.cookie = res.auth_cookie_name+'='+res.auth_cookie_value+'; DOMAIN='+auth_cookie_domain+'; path=/';

//    alert_message('info', res.msg);
    set_and_show_user_info(res);

    $js.logged_user_username = res.user_username;
    update_user_username_tmp_code();

//    if ($('#js_permalink').val()=='') {
//      var user_uri = res.user_username;
//      if (!user_uri) {
//        user_uri = 'code';
//      }
//      $('#js_username_uri').html(user_uri); // url link base: http://js.do/user_uri/[_____]
//    }

    return 1;
  } else {
//    alert('error');
///dump(res);
    return null;
  }
}


function signup_show() {
  $('#login_or_register').show();
  $('#login_show').hide('fast');
  $('#signup_show').show('fast');
  $('#signup_user_username').focus();
  lightbox(1);
}

function login_show() {
  $('#login_or_register').show();
  $('#signup_show').hide('fast');
  $('#login_show').show('fast');
  $('#login_user_username').focus();
  lightbox(1);
}

function signup() {
  var user_username = $('#signup_user_username').val();
  var user_password = $('#signup_user_password').val();
  var user_password_confirm = $('#signup_user_password_confirm').val();
  var user_email    = $('#signup_user_email').val();

  var signup_url = 'http://inauth.insite.com.br/mod_perl/cadastro.pl';

  POST({
    url: signup_url,
    data: {
                'action': 'cadastro_ok',
                'app_id': 'js.do',
         'user_username': user_username,
         'user_password': user_password,
 'user_password_confirm': user_password_confirm,
            'user_email': user_email,
                  'lang': 'en',
               'cookies': 'no',
           'cookie_name': auth_cookie_name
    },
    'callback': function(res) {
      res.msg = res.user_username + ', you are now registered!';
      set_login_cookie_and_info(res);
    }
  });
}

function set_and_show_user_info(user) {

  $js.user_username = user.user_username;
  $js.user_email    = user.user_email;

  $('#login_or_register').hide();

  $('#signup_show').hide();
  $('#top_login_info').hide();
  $('#top_user_info').show('fast');
  var author_url_link = get_author_url_link(user.user_username);

  $('#top_user_info_username').html(author_url_link);

  if ($('#js_permalink').val()=='') {
    var user_uri = user.user_username;
    if (!user_uri) {
      user_uri = 'code';
    }
    $('#js_username_uri').html(user_uri); // url link base: http://js.do/user_uri/[_____]
  }


}



function lightbox(active) { // 1=activate(dark), 0=transparent

  var FadeIncrement = .03;
  var FadeSpeed  = 2;

  var el = document.getElementById('lightbox');
  if (el == null) {
    el = document.createElement('div');
    el.style.position = 'fixed';
    el.style.top = '0';
    el.style.left = '0';
    el.style.width = '100%';
    el.style.height = '100%';
    el.style.backgroundColor = 'black';
    el.style.zIndex = '9';
    el.id = 'lightbox';
    var body = document.getElementsByTagName('body')[0];
    body.insertBefore(el, body.firstChild);
  }

  if (active == 1) { // to dark
    fadeOut(el, 0.3, 0.55);
  } else {           // to transparent
    fadeOut(el, 0.55, 0.3);
  }

  // (el, 0, 1) = white to black
  function fadeOut(el, opacity_start, opacity_end, signal) {

    if (signal == undefined) {

      el.style.opacity = (opacity_start-opacity_end > 0) ? opacity_start + FadeIncrement : opacity_start - FadeIncrement;

      signal = (opacity_start-opacity_end < 0) ? 1 : -1; // 0..1

      el.style.opacity = opacity_start - signal * FadeIncrement;
      if (el.style.opacity>1) {
        el.style.opacity = 1;
      } else if (el.style.opacity<0) {
        el.style.opacity = 0;
      }
    }

    var new_opacity = parseInt(1000* (parseFloat(el.style.opacity) + signal * FadeIncrement))/1000;

    if (signal*new_opacity >= signal*opacity_end) {
      el.style.opacity=opacity_end;
      if (signal == -1) {
        el.parentNode.removeChild(el);
      }
      return;
    }

    el.style.opacity = new_opacity;

    setTimeout( function() {fadeOut(el, opacity_start, opacity_end, signal);}, FadeSpeed);

  }

}



var css_before_fullscreen = [];

function fullscreen(flag) {

  var r = $('#results_area');

  if (flag==1) {

// TODO:
//track('fullscreen');

    css_before_fullscreen =  [ r.css("left"), r.css("width"),  r.css("top"), r.css("bottom"), r.css("z-index") ];
    // Set full screen css:
                              r.css({"left": "0px", "width": "100%", "top": "0px", "bottom": "0px", "z-index": "6"});

    $('#label_result').text("Exit from fullscreen");

  } else if (flag==0) { // resume from full screen

    $('#label_result').text("Results");
    r.css({"left": css_before_fullscreen[0],
          "width": css_before_fullscreen[1],
            "top": css_before_fullscreen[2],
         "bottom": css_before_fullscreen[3],
        "z-index": css_before_fullscreen[4]
           });

  }
}



function recalculate_windows_size() {
//console.log('Recalc win size');
 var h = document.getElementById('js_code').clientHeight;
 $('.CodeMirror').height(h);
}

window.onresize = function() {
  recalculate_windows_size();
}




window.onload = function() {
  recalculate_windows_size();
}






/// START CODE FROM in-framework/main.js ///

function POST(params) {
  params.type = 'POST';
  GET(params);
}


/*
function GET(params) {

  var url      = params.url;
  var data     = params.data;
  var callback = params.callback;
  var type     = params.type; // GET or POST

  if (!type) {
    type = 'GET';
  }

  document.body.style.cursor = "wait";

// RODS: headers added to be sure that crossDomain requests will keep the HTTP_X_REQUESTED_WITH

  $.ajax({
        type: type,
         url: url,
     headers: {'X-Requested-With': 'XMLHttpRequest'},         
        data: data,
  beforeSend: function() {
       //         $('#loading').html('<span class="loading_span"><img src="/images/loading.gif" alt="Loading..."></span>');
              },

       error:
         function(jqXHR, textStatus, errorThrown) { // eg: 500 Internal Server Error
           document.body.style.cursor = "default";
            var err = jqXHR.responseText;
            if (err == '') {
              if (jqXHR.status == 500) {
                err = 'Internal Server Error (error code 500)';
              } else {
                err = 'Connection error. Please try again later.';
                if (jqXHR.status!=0) {
                  err += ' (error code: '+jqXHR.status+')';
                }
              }
           }
// TODO: nao precisa mostrar esse error code se for erro comum nao informativo (ex: 'textStatus' eq 'error').
           var error_code = ' (error code: '+textStatus+'; '+errorThrown + ')';
           alert('ERROR: ' + err + error_code);
//           alert('status='+jqXHR.status+';statusText='+jqXHR.statusText+'; readyState='+jqXHR.readyState);
         },

     success:
       function(str_result) {
         document.body.style.cursor = "default";
// $('.loading_span').remove();
         if (str_result.error) {
// RODS: new in js.do:
           alert_message('error', str_result.error);
         } else {
           if (str_result.alert) {
             alert_message('block', str_result.alert);
           }

           if (typeof(callback)=='function') {
             callback(str_result);
           }
         }
       }
  });

}

*/

/// END OF in-framework CODE ///








