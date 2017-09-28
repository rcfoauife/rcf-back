<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>{{ $title }}</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{{ url('/admin/dashboard') }}">Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Navigation</li>
                    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                        <a href="{{ url('admin/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('allUsers') ? 'active' : '' }}">
                        <a href="{{ url('admin/allUsers') }}"><span class="fa fa-desktop"></span> <span class="xn-text">All Users</span></a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('users') ? 'active' : '' }}">
                        <a href="{{ url('admin/users') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Administrators</span></a>
                    </li>     
                    <li class="{{ Route::currentRouteNamed('subGroup') ? 'active' : '' }}">
                        <a href="{{ url('admin/subGroup') }}"><span class="fa fa-desktop"></span> <span class="xn-text">My Sub-Group</span></a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('addPost') ? 'active' : '' }}">
                        <a href="{{ url('admin/addPost') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Post something</span></a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('addDownload') ? 'active' : '' }}">
                        <a href="{{ url('admin/addDownload') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Add download</span></a>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="http://localhost/pacesetter/public/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- PAGE CONTENT WRAPPER -->
                @yield('content')
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        
 
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('admin/ang-app/lib/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->

        <!-- END PAGE PLUGINS -->         
    <script type="text/javascript" src="{{ asset('admin/ang-app/lib/angular.min.js') }}"></script>
    <!-- AngularJS Application Scripts -->
    <script type="text/javascript" src="{{ asset('admin/ang-app/admin.js') }}"></script>

       
    <!-- END SCRIPTS -->         
    </body>
</html>






