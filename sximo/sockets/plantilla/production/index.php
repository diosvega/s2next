<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal IoT Test Websocket</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/responsivevoice.js"></script>
	




	
	
	
  </head>
  

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!--div class="navbar nav_title" style="border: 0;">
			            <form action="https://cloudmqtt-mgmt.herokuapp.com/sso" class="form-inline" id="form" method="post" style="display: inline-block">
              <input name="name" value="kssuwkrp" type="hidden">
              <input name="password" value="m-SPdLPNshMO" type="hidden">
              <input name="hostname" value="m10.cloudmqtt.com" type="hidden">
              <input name="port" value="12372" type="hidden">
              <input name="token" value="d1b7c9dc1fc494eabbe04538e48f31f38642af8e" type="hidden">
              <input name="timestamp" value="1500416879" type="hidden">
            </form>
			<script src="ws%20Archivos/mqttws31.js" type="text/javascript"></script>
              <a href="index.html" class="site_title"><span>Universal IoT Test Websocket</span></a>
            </div-->
			
			<div class="navbar nav_title" style="border: 0;">
			            <form action="https://cloudmqtt-mgmt.herokuapp.com/sso" class="form-inline" id="form" method="post" style="display: inline-block">
              <input name="name" value="kssuwkrp" type="hidden">
              <input name="password" value="m-SPdLPNshMO" type="hidden">
              <input name="hostname" value="ec2-54-164-72-142.compute-1.amazonaws.com" type="hidden">
              <input name="port" value="7578" type="hidden">
              <input name="token" value="d1b7c9dc1fc494eabbe04538e48f31f38642af8e" type="hidden">
              <input name="timestamp" value="1500416879" type="hidden">
            </form>
			<script src="ws%20Archivos/mqttws31.js" type="text/javascript"></script>
              <a href="index.html" class="site_title"><span>Universal IoT Test Websocket</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!--img src="images/img.jpg" alt="..." class="img-circle profile_img"-->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <!--li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li-->
                    </ul>
                  </li>
                  <!--li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li-->
                </ul>
              </div>
              <!--div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div-->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!--img src="images/img.jpg" alt=""-->Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alerts</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          New Reports
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          

		  
		  
		  <!--div class="row tile_count">

		  	  <form id="send">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-REVISION" class="btn btn-block" data-id='{"op":"APP-REVISION","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-REVISION</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-POWER-OFF" class="btn btn-block" data-id='{"op":"APP-POWER-OFF","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-POWER-OFF</button></div>

            </div>
			
			
			
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI05-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI05-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI05-ACTIVE</button></div>
			  <button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI05-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI05-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI05-DEACTIVATE</button>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI06-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI06-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI06-ACTIVE</button></div>
			  <button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI06-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI06-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI06-DEACTIVATE</button>

			  
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI07-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI07-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI07-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI07-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI07-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI07-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI08-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI08-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI08-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI08-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI08-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI08-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI020-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI020-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI020-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI020-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI020-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI020-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI021-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI021-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI021-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI021-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI021-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI021-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI022-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI022-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI022-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI022-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI022-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI022-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI023-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI023-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI023-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI023-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI023-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI023-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-SENSORTEMPERATURE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>TEMPERATURE-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORTEMPERATURE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>TEMPERATURE-DEACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORDISTANCE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSORDISTANCE-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORDISTANCE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSORDISTANCE-DEACTIVE</button></div>
            </div>
          </div-->
          <!-- /top tiles -->
		  

<!-- Inicia Received Message -->
		  
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Received messages</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="contentmessage" style="height: 150px; overflow: scroll;">

<!-- Inicia content Received menssages -->				  

        <div class="span9">
          <!--h3>Received messages</h3-->
          <table class="table">
            <thead>
              <tr>
                <th>Topic</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody id="msgs"></tbody>

          </table>
		<span id="final"></span>
        </div>				  

		
<!-- Finaliza content Received menssages -->				  
				  

                  </div>
                </div>
              </div>
            </div>
		  

<!-- Finzaliza Received Message -->		  
		  
		  

          <!--div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Sensor Activitie <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div-->
		  
		  
		  
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sensor Activitie <small>Graph</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					<div id="charts_div"></div> 
				  
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <br />
		  
<!-- Inicia Controls -->

		              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Controls</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
					<!-- Inicia el codigo del Drag multiple -->
					
							  <div class="row tile_count">

		  	  <form id="send">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-user"></i> Total Users</span-->
              <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-REVISION" class="btn btn-block" data-id='{"op":"APP-REVISION","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO APP REVISION","Spanish Latin American Female");'>APP-REVISION</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-POWER-OFF" class="btn btn-block" data-id='{"op":"APP-POWER-OFF","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO APP POWER OFF","Spanish Latin American Female");'>APP-POWER-OFF</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-ARDUINO-OFF" class="btn btn-block" data-id='{"op":"APP-ARDUINO-OFF","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO APP ARDUINO OFF","Spanish Latin American Female");'>APP-ARDUINO-OFF</button></div>
              <!--span class="count_bottom"><i class="green">4% </i> From last Week</span-->
            </div>
			
			
			
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"-->
			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI05-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI05-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI05","Spanish Latin American Female");'>APP-GPI05-ACTIVE</button></div>
			  <button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI05-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI05-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI05","Spanish Latin American Female");'>APP-GPI05-DEACTIVATE</button>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI06-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI06-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI06","Spanish Latin American Female");'>APP-GPI06-ACTIVE</button></div>
			  <button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI06-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI06-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI06","Spanish Latin American Female");'>APP-GPI06-DEACTIVATE</button>
			  <!--i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span-->
			  
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span-->
			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI07-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI07-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI07","Spanish Latin American Female");'>APP-GPI07-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI07-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI07-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI07","Spanish Latin American Female");'>APP-GPI07-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI08-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI08-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI08","Spanish Latin American Female");'>APP-GPI08-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI08-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI08-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI08","Spanish Latin American Female");'>APP-GPI08-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span-->
			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI020-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI020-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI020","Spanish Latin American Female");'>APP-GPI020-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI020-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI020-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI020","Spanish Latin American Female");'>APP-GPI020-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI021-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI021-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI021","Spanish Latin American Female");'>APP-GPI021-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI021-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI021-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI021","Spanish Latin American Female");'>APP-GPI021-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span-->
			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-GPI022-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI022-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI022","Spanish Latin American Female");'>APP-GPI022-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI022-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI022-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI022","Spanish Latin American Female");'>APP-GPI022-DEACTIVATE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI023-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI023-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR PUERTO GPI023","Spanish Latin American Female");'>APP-GPI023-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-GPI023-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI023-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR PUERTO GPI023","Spanish Latin American Female");'>APP-GPI023-DEACTIVATE</button></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <!--span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span-->
			  <div class="count"><button style="margin: 0px 10px 0px 0px; float: left;" id="APP-SENSORTEMPERATURE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR SENSOR DE TEMPERATURA","Spanish Latin American Female");'>TEMPERATURE-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORTEMPERATURE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR SENSOR DE TEMPERATURA","Spanish Latin American Female");'>TEMPERATURE-DEACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORDISTANCE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO ACTIVAR SENSOR DE DISTANCIA","Spanish Latin American Female");'>APP-SENSORDISTANCE-ACTIVE</button></div>
			  <div class="count"><button style="margin: 12px 10px 0px 0px; float: left;" id="APP-SENSORDISTANCE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}' onclick='responsiveVoice.speak("ENVIANDO COMANDO DESACTIVAR SENSOR DE DISTANCIA","Spanish Latin American Female");'>APP-SENSORDISTANCE-DEACTIVE</button></div>
            </div>
          </div>
					
					
					<!-- Finaliza el codigo del Drag multiple -->
					
					
					
					
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>

<!-- Finaliza Controls -->		  
		  
<!-- Inicia Message -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Send Message</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!--form action="form_upload.html" class="dropzone"></form-->
					
					
      <div class="row">
        <div class="span3">
          <h3>Send message</h3>
          
            <label>Topic</label>
            <!--input id="topic" name="topic" value="357044060024160/in"-->
			<input id="topic" name="topic" value="/oneM2M/req/<CSE-ID>/357044060024160/">
			<div style="margin:25px 0px 0px 0px;"></div>
            <label>Message</label>
            <!--textarea id="message" name="message">{"CommandType":"APP","Command":"APP-REVISION"}</textarea-->
			<textarea id="message" name="message">{"op":ATI,"fr":"\/\/xxxxx\/99","rqi":"A1234","ty":"AT","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}</textarea>
			<div style="margin:25px 0px 0px 0px;"></div>
            <button style="margin:0px 0px 0px 0px; width:65px;" id="enviar" class="btn btn-block">
              Send
            </button>
			
          </form>
        </div>
		
		
		

      </div>					
					
					
					
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>

<!-- Finaliza Message -->  
		  
		  

          <div class="row">

<!-- envio mensajes -->

<div class="alert alert-error" id="error" style="display: none"></div>


<!-- finaliza el envio de mensajes -->	  
		  
		  
		  
		  

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>App Usage across versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Activities <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-8 col-sm-8 col-xs-12">



              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Visitors location <small>geo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-4 hidden-small">
                          <h2 class="line_30">125.7k Views from 60 countries</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>United States</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                <td>Germany</td>
                                <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                <td>Spain</td>
                                <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                <td>Britain</td>
                                <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">


                <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small>Sample tasks</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
                
                <!-- start of weather widget -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Daily active users <small>Sessions</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="weather-text pull-right">
                          <h3 class="degrees">23</h3>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
	
      <script>
	  

	  
        var form = document.forms["send"];
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          message = new Paho.MQTT.Message(document.getElementById("message").value);
          message.destinationName = document.getElementById("topic").value;
          client.send(message);
        });	  

		document.getElementById('APP-REVISION').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-GPI05-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-GPI06-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
				
		document.getElementById('APP-GPI07-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
				
		document.getElementById('APP-GPI08-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		 //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
				
		document.getElementById('APP-GPI020-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
				
		document.getElementById('APP-GPI021-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
				
		document.getElementById('APP-GPI022-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
				
		document.getElementById('APP-GPI023-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-POWER-OFF').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-GPI05-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-GPI06-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
			
		document.getElementById('APP-GPI07-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
	
		document.getElementById('APP-GPI08-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
	

		document.getElementById('APP-GPI020-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
	

		document.getElementById('APP-GPI021-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
	

		document.getElementById('APP-GPI022-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
	

		document.getElementById('APP-GPI023-DEACTIVATE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
		document.getElementById('APP-SENSORTEMPERATURE-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });

		document.getElementById('APP-SENSORTEMPERATURE-DEACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });

		
		document.getElementById('APP-SENSORDISTANCE-ACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });

		document.getElementById('APP-SENSORDISTANCE-DEACTIVE').addEventListener('click', function (e) {
          e.preventDefault();
		message = new Paho.MQTT.Message($(this).attr("data-id"));
          //message.destinationName = document.getElementById("topic").value;
		  //message.destinationName = "357044060024160/in";
		  message.destinationName = "/oneM2M/req/<CSE-ID>/357044060024160/";
          client.send(message);
        });
		
        
        // called when the client connects
        function onConnect() {
          // Once a connection has been made, make a subscription and send a message.
          console.log("onConnect");
          client.subscribe("#");
        }
        
        // called when the client loses its connection
        function onConnectionLost(responseObject) {
          if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:", responseObject.errorMessage);
            setTimeout(function() { client.connect() }, 5000);
          }
        }
        
        // called when a message arrives
        function onMessageArrived(message) {
          var tdTopic = document.createElement("td");
          tdTopic.textContent = message.destinationName;
        
          var tdMsg = document.createElement("td");
          try {
            tdMsg.textContent = message.payloadString;
			
          } catch (e) {
            //tdMsg.textContent = "*** Binary data ***";
            var pre = document.createElement("pre");
            var base64 = btoa(String.fromCharCode.apply(null, message.payloadBytes));
            pre.textContent = base64.replace(/(.{72})/g, "$1\n");
            var note = document.createElement("em");
            note.textContent = "Binary data (base64 encoded)"
            tdMsg.appendChild(note);
            tdMsg.appendChild(pre)
          }
        
          var tr = document.createElement("tr");
          tr.appendChild(tdTopic);
          tr.appendChild(tdMsg);

			//document.getElementById('final').scrollIntoView(true);		  

			
          document.getElementById("msgs").appendChild(tr);
		  
		  
			var div = document.getElementById('contentmessage');
			div.scrollTop = '9999';


//			jsonmessage = '{"rsc":"APP-SENSORTEMPERATURE-ACTIVE","rqi":"13047","pc":{"m2m:sch":{"cnf":"message"}},"con":"saludos","rn":"cntTemperature","fr":"AE_123"}';


	
//	alert(message.payloadString);



	
//	{"rsc":"APP-SENSORTEMPERATURE-ACTIVE","val":"14.765625","rqi":"80024","pc":{"m2m:sch":{"cnf":"message"}},"con":"<obj><int name='data' val='14.765625'/><int name='unit' val='centigrados'/></obj>","rn":"cntTemperature","fr":"AE_123"}



//alert(barcode);

	

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
	
		var json = $.parseJSON(message.payloadString);
		var rsc='';
		var val='';
		var rqi='';
		var barcode='';
		var name='';
		var type='';
		
		$.each(json, function(index, element) {


		rsc = json['rsc'];
		val = parseFloat(json['val']);
		rqi = json['rqi'];
		name = json['name'];
		type = json['type'];
		
		});


//responsiveVoice.speak("Temperature " + val);
if(name != undefined){//inicia la validacion undefined de datos



responsiveVoice.speak(""+name+" " + val,"Spanish Latin American Female");
		




Htmlset='<div id="chart_div"></div>';

var resuldatos = document.getElementById('charts_div');
        resuldatos.innerHTML = Htmlset;


//alert(parseFloat(barcode));

 var data = google.visualization.arrayToDataTable([
         ['Element', ''+type+''],
         [''+name+'', val],
      ]);
/*	  
      data.addRows([
		
        [{v: [8, 0, 0], f: ''+val+' am'}, val],

      ]);
*/
      var options = {
        title: 'Sensor connected',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'View Report'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }


}//cierra la validacion undefined de datos



	
		  
        }
        
        function onFailure(invocationContext, errorCode, errorMessage) {
          var errDiv = document.getElementById("error");
          errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 32372";
          errDiv.style.display = "block";
        }
        
        var clientId = "ws" + Math.random();
        // Create a client instance
//        var client = new Paho.MQTT.Client("m10.cloudmqtt.com", 32372, clientId);
        var client = new Paho.MQTT.Client("172.31.22.69", 7578, clientId);
        
        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;
        
        // connect the client
        client.connect({
          useSSL: true,
          userName: "kssuwkrp",
          password: "m-SPdLPNshMO",
          onSuccess: onConnect,
          onFailure: onFailure
        });	  



//}	

	  
/*
        var form = document.forms["send"];
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          message = new Paho.MQTT.Message(document.getElementById("message").value);
          message.destinationName = document.getElementById("topic").value;
          client.send(message);
        });
        
        // called when the client connects
        function onConnect() {
          // Once a connection has been made, make a subscription and send a message.
          console.log("onConnect");
          client.subscribe("#");
        }
        
        // called when the client loses its connection
        function onConnectionLost(responseObject) {
          if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:", responseObject.errorMessage);
            setTimeout(function() { client.connect() }, 5000);
          }
        }
        
        // called when a message arrives
        function onMessageArrived(message) {
          var tdTopic = document.createElement("td");
          tdTopic.textContent = message.destinationName;
        
          var tdMsg = document.createElement("td");
          try {
            tdMsg.textContent = message.payloadString;
          } catch (e) {
            //tdMsg.textContent = "*** Binary data ***";
            var pre = document.createElement("pre");
            var base64 = btoa(String.fromCharCode.apply(null, message.payloadBytes));
            pre.textContent = base64.replace(/(.{72})/g, "$1\n");
            var note = document.createElement("em");
            note.textContent = "Binary data (base64 encoded)"
            tdMsg.appendChild(note);
            tdMsg.appendChild(pre)
          }
        
          var tr = document.createElement("tr");
          tr.appendChild(tdTopic);
          tr.appendChild(tdMsg);
        
          document.getElementById("msgs").appendChild(tr);
        }
        
        function onFailure(invocationContext, errorCode, errorMessage) {
          var errDiv = document.getElementById("error");
          errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 32372";
          errDiv.style.display = "block";
        }
        
        var clientId = "ws" + Math.random();
        // Create a client instance
        var client = new Paho.MQTT.Client("m10.cloudmqtt.com", 32372, clientId);
        
        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;
        
        // connect the client
        client.connect({
          useSSL: true,
          userName: "kssuwkrp",
          password: "m-SPdLPNshMO",
          onSuccess: onConnect,
          onFailure: onFailure
        });	  
*/	  

/*	  
  $(document).ready(eventoclick);
	  
        var form = document.forms["send"];
        form.addEventListener("click", function (e) {
          e.preventDefault();
          message = new Paho.MQTT.Message(document.getElementById("message").value);
          message.destinationName = document.getElementById("topic").value;
          client.send(message);
        });
        
        // called when the client connects
        function onConnect() {
          // Once a connection has been made, make a subscription and send a message.
          console.log("onConnect");
          client.subscribe("#");
        }
        
        // called when the client loses its connection
        function onConnectionLost(responseObject) {
          if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:", responseObject.errorMessage);
            setTimeout(function() { client.connect() }, 5000);
          }
        }
        
        // called when a message arrives
        function onMessageArrived(message) {
          var tdTopic = document.createElement("td");
          tdTopic.textContent = message.destinationName;
        
          var tdMsg = document.createElement("td");
          try {
            tdMsg.textContent = message.payloadString;
          } catch (e) {
            //tdMsg.textContent = "*** Binary data ***";
            var pre = document.createElement("pre");
            var base64 = btoa(String.fromCharCode.apply(null, message.payloadBytes));
            pre.textContent = base64.replace(/(.{72})/g, "$1\n");
            var note = document.createElement("em");
            note.textContent = "Binary data (base64 encoded)"
            tdMsg.appendChild(note);
            tdMsg.appendChild(pre)
          }
        
          var tr = document.createElement("tr");
          tr.appendChild(tdTopic);
          tr.appendChild(tdMsg);
        
          document.getElementById("msgs").appendChild(tr);
        }
        
        function onFailure(invocationContext, errorCode, errorMessage) {
          var errDiv = document.getElementById("error");
          errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 32372";
          errDiv.style.display = "block";
        }
        
        var clientId = "ws" + Math.random();
        // Create a client instance
        var client = new Paho.MQTT.Client("m10.cloudmqtt.com", 32372, clientId);
        
        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;
        
        // connect the client
        client.connect({
          useSSL: true,
          userName: "kssuwkrp",
          password: "m-SPdLPNshMO",
          onSuccess: onConnect,
          onFailure: onFailure
        });
	
	function eventoclick(){

setTimeout(function(){  //Beginning of code that should run AFTER the timeout
    
		document.getElementById("enviar").click();		
	
	
	
    //lots more code
},2222);
	
	



	}
*/	
		
      </script>	
	
	
	
	
  </body>
</html>
