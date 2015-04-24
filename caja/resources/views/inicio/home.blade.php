<style type="text/css">
body{
	background-color: white !important;
}

.slide {
    -webkit-transition: -webkit-transform .7s ease-in-out;
    -moz-transition: -moz-transform .7s ease-in-out;
    -o-transition: -o-transform .7s ease-in-out;
    transition: transform .7s ease-in-out;
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.slide.ng-enter {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}

.slide.ng-enter.ng-enter-active, .slide.ng-leave {
    position: absolute;
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.slide.ng-leave.ng-leave-active {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}

</style>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/plugins/morris.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <div id="wrapper">

 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ui-sref="home">Caja</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>-->
                        <li>
                            <a href='' ng-click='desloguear()'><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" ng-init='consultarmenu()'>
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a ui-sref="home"><i class="fa fa-home"></i> Inicio</a>
                    </li>
                    <li ng-repeat='item in listaMenu'>
                        <a ui-sref='{{item.destino}}'><i class="{{item.imagen}}"></i> {{item.etiqueta}}</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
			<div class="container-fluid">

				 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Legalizaciones <small>Movimientos de caja</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--Aqui angular nos va a renderizar las vitas deseamos ver-->
                <ui-view class='slide' ></ui-view>

			  </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->