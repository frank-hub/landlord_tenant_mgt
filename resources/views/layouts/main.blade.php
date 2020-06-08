 <!-- 
 =========================================================
 Light Bootstrap Dashboard PRO - v2.0.1
 =========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

 <!DOCTYPE html>
 <html lang="en">
 
 
 <!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 13:04:07 GMT -->
 <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.html">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>My Kodi</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
     <!--     Fonts and icons     -->
     <link href="http://fonts.googleapis.com/css1a80.css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{asset('assets/css/light-bootstrap-dashboard790f.css?v=2.0.1')}}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
 
     </head>
 
     <body>
     <div class="wrapper">
         <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-5.jpg">
             <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
 
         Tip 2: you can also add an image using data-image tag
     -->
             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a href="../../../www.creative-tim.com/index.html" class="simple-text logo-mini">
                         Ct
                     </a>
                     <a href="../../../www.creative-tim.com/index.html" class="simple-text logo-normal">
                         Creative Tim
                     </a>
                 </div>
                 <div class="user">
                     <div class="photo">
                         <img src="{{asset('assets/img/default-avatar.png')}}" />
                     </div>
                     <div class="info ">
                         <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                             <span>{{Auth::user()->name}}}
                                 <b class="caret"></b>
                             </span>
                         </a>
                         <div class="collapse" id="collapseExample">
                             <ul class="nav">
                                 <li>
                                     <a class="profile-dropdown" href="#pablo">
                                         <span class="sidebar-mini">MP</span>
                                         <span class="sidebar-normal">My Profile</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <ul class="nav">
                     <li class="nav-item ">
                         <a class="nav-link" href="{{url('dashboard/index')}}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                             <i class="nc-icon nc-single-02"></i>
                             <p>
                                 Tenants
                                 <b class="caret"></b>
                             </p>
                         </a>
                         <div class="collapse " id="componentsExamples">
                             <ul class="nav">
                                 <li class="nav-item ">
                                     <a class="nav-link" href="{{url('tenants/create')}}">
                                         <span class="sidebar-mini">R</span>
                                         <span class="sidebar-normal">Register New</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="{{url('tenants/assign')}}">
                                         <span class="sidebar-mini">AH</span>
                                         <span class="sidebar-normal">Assign Home</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="{{url('tenants/all')}}">
                                         <span class="sidebar-mini">LA</span>
                                         <span class="sidebar-normal">List All</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                             <i class="nc-icon nc-istanbul"></i>
                             <p>
                                 Houses
                                 <b class="caret"></b>
                             </p>
                         </a>
                         <div class="collapse " id="formsExamples">
                             <ul class="nav">
                                 <li class="nav-item ">
                                     <a class="nav-link" href="forms/regular.html">
                                         <span class="sidebar-mini">RN</span>
                                         <span class="sidebar-normal">Register New</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="forms/extended.html">
                                         <span class="sidebar-mini">LA</span>
                                         <span class="sidebar-normal">List All</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="forms/validation.html">
                                         <span class="sidebar-mini">LV</span>
                                         <span class="sidebar-normal">List Vacant</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="forms/wizard.html">
                                         <span class="sidebar-mini">LO</span>
                                         <span class="sidebar-normal">List Occupied</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                             <i class="nc-icon nc-paper-2"></i>
                             <p>
                                 Tables
                                 <b class="caret"></b>
                             </p>
                         </a>
                         <div class="collapse " id="tablesExamples">
                             <ul class="nav">
                                 <li class="nav-item ">
                                     <a class="nav-link" href="tables/regular.html">
                                         <span class="sidebar-mini">RT</span>
                                         <span class="sidebar-normal">Regular Tables</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="tables/extended.html">
                                         <span class="sidebar-mini">ET</span>
                                         <span class="sidebar-normal">Extended Tables</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="tables/bootstrap-table.html">
                                         <span class="sidebar-mini">BT</span>
                                         <span class="sidebar-normal">Bootstrap Table</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="tables/datatables.net.html">
                                         <span class="sidebar-mini">DT</span>
                                         <span class="sidebar-normal">DataTables.net</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                             <i class="nc-icon nc-pin-3"></i>
                             <p>
                                 Maps
                                 <b class="caret"></b>
                             </p>
                         </a>
                         <div class="collapse " id="mapsExamples">
                             <ul class="nav">
                                 <li class="nav-item ">
                                     <a class="nav-link" href="maps/google.html">
                                         <span class="sidebar-mini">GM</span>
                                         <span class="sidebar-normal">Google Maps</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="maps/vector.html">
                                         <span class="sidebar-mini">VM</span>
                                         <span class="sidebar-normal">Vector maps</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="maps/fullscreen.html">
                                         <span class="sidebar-mini">FSM</span>
                                         <span class="sidebar-normal">Full Screen Map</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="charts.html">
                             <i class="nc-icon nc-chart-bar-32"></i>
                             <p>Charts</p>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="calendar.html">
                             <i class="nc-icon nc-single-copy-04"></i>
                             <p>Calendar</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                             <i class="nc-icon nc-puzzle-10"></i>
                             <p>
                                 Pages
                                 <b class="caret"></b>
                             </p>
                         </a>
                         <div class="collapse " id="pagesExamples">
                             <ul class="nav">
                                 <li class="nav-item ">
                                     <a class="nav-link" href="pages/login.html">
                                         <span class="sidebar-mini">LP</span>
                                         <span class="sidebar-normal">Login Page</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="pages/register.html">
                                         <span class="sidebar-mini">RP</span>
                                         <span class="sidebar-normal">Register Page</span>
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a class="nav-link" href="pages/lock.html">
                                         <span class="sidebar-mini">LSP</span>
                                         <span class="sidebar-normal">Lock Screen Page</span>
                                     </a>
                                 </li>
                                 <li class="nav-item  ">
                                     <a class="nav-link" href="pages/user.html">
                                         <span class="sidebar-mini">UP</span>
                                         <span class="sidebar-normal">User Page</span>
                                     </a>
                                 </li>
                                 <li class="nav-item  ">
                                     <a class="nav-link" href="#lbd">
                                         <span class="sidebar-mini">MCS</span>
                                         <span class="sidebar-normal">More coming soon...</span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="main-panel">
                  <!-- Navbar -->
     <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo"> Dashboard PRO </a>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="nav navbar-nav mr-auto">
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <i class="nc-icon nc-zoom-split"></i>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </ul>
                <ul class="navbar-nav">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-planet"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">Create New Post</a>
                            <a class="dropdown-item" href="#">Manage Something</a>
                            <a class="dropdown-item" href="#">Do Nothing</a>
                            <a class="dropdown-item" href="#">Submit to live</a>
                            <li class="divider"></li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-bell-55"></i>
                            <span class="notification">5</span>
                            <span class="d-lg-none">Notification</span>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">Notification 1</a>
                            <a class="dropdown-item" href="#">Notification 2</a>
                            <a class="dropdown-item" href="#">Notification 3</a>
                            <a class="dropdown-item" href="#">Notification 4</a>
                            <a class="dropdown-item" href="#">Notification 5</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../../../example.com/index.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-bullet-list-67"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <i class="nc-icon nc-email-85"></i> Messages
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="nc-icon nc-umbrella-13"></i> Help Center
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="nc-icon nc-settings-90"></i> Settings
                            </a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                            </a>
                            <a href="#" class="dropdown-item text-danger">
                                <i class="nc-icon nc-button-power"></i> Log out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
            @yield('main')
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Style</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Background Image</p>
                        <label class="switch-image">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <label class="switch-mini">
                            <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Fixed Navbar</p>
                        <label class="switch-nav">
                            <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Filters</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange active" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/img/sidebar-1.jpg')}}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('assets/img/sidebar-3.jpg')}}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/img/sidebar-4.jpg')}}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/img/sidebar-5.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="button-container">
                    <div>
                        <a href="../../../www.creative-tim.com/product/light-bootstrap-dashboard.html" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                    </div>
                </li>
                <li class="button-container">
                    <div>
                        <a href="../../../www.creative-tim.com/product/light-bootstrap-dashboard-pro.html" target="_blank" class="btn btn-warning btn-block">Buy now!</a>
                    </div>
                </li>
                <li class="button-container">
                    <div>
                        <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>
                    </div>
                </li>
                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
                </li>
            </ul>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="../../../maps.googleapis.com/maps/api/jsa54a?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!--  Share Plugin -->
<script src="{{asset('assets/js/plugins/jquery.sharrre.js')}}"></script>
<!--  jVector Map  -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{asset('assets/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{asset('assets/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/light-bootstrap-dashboard790f.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    var $table = $('#bootstrap-table');

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="View" class="btn btn-link btn-info table-action view" href="javascript:void(0)">',
            '<i class="fa fa-image"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="btn btn-link btn-warning table-action edit" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="btn btn-link btn-danger table-action remove" href="javascript:void(0)">',
            '<i class="fa fa-remove"></i>',
            '</a>'
        ].join('');
    }

    $().ready(function() {
        window.operateEvents = {
            'click .view': function(e, value, row, index) {
                info = JSON.stringify(row);

                swal('You click view icon, row: ', info);
                console.log(info);
            },
            'click .edit': function(e, value, row, index) {
                info = JSON.stringify(row);

                swal('You click edit icon, row: ', info);
                console.log(info);
            },
            'click .remove': function(e, value, row, index) {
                console.log(row);
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });
            }
        };

        $table.bootstrapTable({
            toolbar: ".toolbar",
            clickToSelect: true,
            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            searchAlign: 'left',
            pageSize: 8,
            clickToSelect: false,
            pageList: [8, 10, 25, 50, 100],

            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        //activate the tooltips after the data table is initialized
        $('[rel="tooltip"]').tooltip();

        $(window).resize(function() {
            $table.bootstrapTable('resetView');
        });


    });
</script>
<script type="text/javascript">
$(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

demo.showNotification();

demo.initVectorMap();

});
</script>
</html>
