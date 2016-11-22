<!DOCTYPE html>


<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />

    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />
    <script>
        !window.jQuery && document.write('<script src="/admin/fancy/jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="/fancy/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="/fancy/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="/fancy/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/admin_tmpl/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="/admin_tmpl/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->


    <link href="/admin_tmpl/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <link href="/admin_tmpl/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>

    <link href="/admin_tmpl/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

    <link href="/admin_tmpl/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="/admin_tmpl/favicon.ico" />

    <script type="text/javascript">
        var $ =jQuery.noConflict();
        jQuery(function($)  {
            $("a#example1").fancybox();
        });

        function deleteRow(id) {
            var id_t = "#"+id;
            $(id_t).remove();


            $.ajax({
                type: "POST",
                dataType: "text",
                url: 'delete',
                data:'id='+id,
                success:function(data){
                },

            });
        }
    </script>

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

<!-- BEGIN HEADER -->

<div class="header navbar navbar-inverse navbar-fixed-top">

    <!-- BEGIN TOP NAVIGATION BAR -->

    <div class="navbar-inner">

        <div class="container-fluid">

            <!-- BEGIN LOGO -->

            <a class="brand" href="index.html">

                <img src="/admin_tmpl/assets/img/logo.png" alt="logo" />

            </a>

            <!-- END LOGO -->

            <!-- BEGIN RESPONSIVE MENU TOGGLER -->

            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                <img src="/admin_tmpl/assets/img/menu-toggler.png" alt="" />

            </a>

            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- BEGIN TOP NAVIGATION MENU -->

            <ul class="nav pull-right">


                <li class="dropdown user">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                        <span class="username"></span>

                        <i class="icon-angle-down"></i>

                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="admin/logout"><i class="icon-key"></i> Log Out</a></li>

                    </ul>

                </li>

                <!-- END USER LOGIN DROPDOWN -->

                <!-- END USER LOGIN DROPDOWN -->

            </ul>

            <!-- END TOP NAVIGATION MENU -->

        </div>

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>

<!-- END HEADER -->

<!-- BEGIN CONTAINER -->

<div class="page-container">

    <!-- BEGIN SIDEBAR -->

    <div class="page-sidebar nav-collapse collapse">

        <!-- BEGIN SIDEBAR MENU -->

        <ul class="page-sidebar-menu">

            <li>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                <div class="sidebar-toggler hidden-phone"></div>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            </li>

            <li>

                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                <form class="sidebar-search">

                    <div class="input-box">

                        <a href="javascript:;" class="remove"></a>

                        <input type="text" placeholder="Search..." />

                        <input type="button" class="submit" value=" " />

                    </div>

                </form>

                <!-- END RESPONSIVE QUICK SEARCH FORM -->

            </li>

            <li>

                <a href="javascript:;">

                    <i class="icon-home"></i>

                    <span class="title">Pocetna strana</span>

                    <span class="arrow"></span>

                </a>
                <ul class="sub-menu">

                    <li >
                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Stavljanje nove slike u galeriju</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Pregled i edit slika u galeriji</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Edit text</a>

                    </li>
                </ul>

            </li>

            <li >

                <a href="javascript:;">

                    <i class="icon-cogs"></i>

                    <span class="title">Pocetni nivo</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Upload image to galery</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>View image in galery</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Edit text</a>

                    </li>

                </ul>

            </li>

            <li >

                <a href="javascript:;">

                    <i class="icon-cogs"></i>

                    <span class="title">Napredni nivo</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Upload image to galery</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>View image in galery</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Edit text</a>

                    </li>

                </ul>

            </li>

            <li>

                <a href="javascript:;">

                    <i class="icon-cogs"></i>

                    <span class="title">Profesori</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Add new profesor</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>View profesor</a>

                    </li>

                </ul>

            </li>


            <li >

                <a href="javascript:;">

                    <i class="icon-cogs"></i>

                    <span class="title">Vesti</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>Add new news</a>

                    </li>
                    <li >

                        <a href="">

                            <span class="badge badge-roundless badge-important"></span>View news</a>

                    </li>

                </ul>

            </li>


        </ul>

        <!-- END SIDEBAR MENU -->

    </div>

    <!-- END SIDEBAR -->