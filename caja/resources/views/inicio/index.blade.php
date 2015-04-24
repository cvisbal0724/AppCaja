
<html ng-app='App'>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="[[  csrf_token() ]]" />
<title>CAJA</title>




 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>


<script type="text/javascript" src="lib/angular/angular.min.js"></script>
<script type="text/javascript" src="lib/angular/angular-ui-router.min.js"></script>
<script type="text/javascript" src="lib/angular/angular-route.min.js"></script>
<script type="text/javascript" src="lib/angular/angular-sanitize.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="run.js"></script>

</head>
<body>

<ui-view></ui-view>


<!--Angular-->


<!--Controladores-->
<script type="text/javascript" src="controllers/Login.js"></script>
<script type="text/javascript" src="controllers/Home.js"></script>

</body>
</html>