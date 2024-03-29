<!DOCTYPE html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TedFo Docs</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
                <a class="navbar-brand" href="./"><img src="{{asset('images/tedfo.png')}}" width="30" height="30" > <b> Tedfo Docs</b> </a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/tedfo.png')}}" width="30" height="30" ></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Profiles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-rocket"></i><a href="{{ url('shipper') }}">Shipper</a></li>
                            <li><i class="fa fa-shopping-cart"></i><a href="{{ url('buyer') }}">Buyer</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{ url('seller') }}">Seller</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ url('product') }}">Products</a></li>
                            <li><i class="fa fa-money"></i><a href="#">Banks</a>
                                <a href="{{ url('buyerBank') }}">Buyer Bank</a>
                                <a href="{{ url('sellerBank') }}">Seller Bank</a>
                            </li>
                            <li><i class="fa fa-share-square-o"></i><a href="{{ url('cnf') }}">CNF</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Doccuments </a>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Sales Doccument</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-rocket"></i><a href="ui-buttons.html">Proforma Invoice</a></li>
                            <li><i class="fa fa-shopping-cart"></i><a href="ui-badges.html">Quatation</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Purchase Order</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-badges.html">Order Confirmation</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Shipping Docs</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-rocket"></i><a href="ui-buttons.html">Commercial Invoice</a></li>
                            <li><i class="fa fa-shopping-cart"></i><a href="ui-badges.html">Packing List</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Certificate of Origin</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-badges.html">Byuer Packing List</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-badges.html">Seller Packing List</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Reports </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content">
            @yield('content')
        </div> <!-- .content -->


    <footer class="main-footer">
        .
    </footer>
        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    


    <script src="{{ asset('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>


    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script>

    <script src="{{ asset('assets/js/test.bundle.js') }}"></script>
</body>

</html>
