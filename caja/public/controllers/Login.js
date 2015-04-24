confControllers.controller('LoginController', function ($scope,$location,authUsuario,SessionService,SessionSet,$state) {

		
		$scope.loginData={usuario:'', clave:''};

		$scope.loginSubmit = function(){

			var auth = authUsuario.loguear($scope.loginData);

			auth.success(function(response){
				
			if (response.id > 0) {
				SessionSet.cacheSession(response);
				$state.go("home");				
			}	
			});
		}

});