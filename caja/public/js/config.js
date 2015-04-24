App.config(function($routeProvider) {
	$routeProvider.when('/inbox', {
    templateUrl: 'views/inicio/index.html',
    controller: 'ProductoProveedorController'
	}). 
	otherwise({
            redirectTo: '/inbox'
        });
});