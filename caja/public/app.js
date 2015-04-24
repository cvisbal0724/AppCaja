'use strict';

var App = angular.module('App',  ['ui.router','ngRoute', 'confControllers']);
var confControllers = angular.module('confControllers', []);

App.config(function($urlRouterProvider, $stateProvider) {

    $urlRouterProvider.otherwise('/login');

    $stateProvider
    .state('login', {
      url: "/login",              
      templateUrl: "inicio/login", 
      controller: 'LoginController'
     })
    .state('home', {
      url: "/home",              
      templateUrl: "inicio/home", 
      controller: 'HomeController'
     })
    .state('home.legalizaciones', {
      url: "/legalizaciones",              
      template: "Legalizaciones", 
      //controller: 'HomeController'
     });
     
});

confControllers.factory("SessionService", function(){
    return {
        //obtenemos una sesión //getter
        get : function(key) {
            return sessionStorage.getItem(key)
        },
        //creamos una sesión //setter
        set : function(key, val) {
            return sessionStorage.setItem(key, val)
        },
        //limpiamos una sesión
        unset : function(key) {
            return sessionStorage.removeItem(key)
        }
    }
});

confControllers.factory("SessionSet", function($location,SessionService){
    return {
        //obtenemos una sesión 
        cacheSession : function(usuario){
        SessionService.set("auth", usuario.id > 0);
        SessionService.set("nombre", usuario.nombre);  
        SessionService.set("_token", usuario._token);       
        },
        unCacheSession : function(){
            SessionService.unset("auth");
            SessionService.unset("nombre");
            SessionService.unset("_token");
        }
    }
});

confControllers.factory('authUsuario',function($http,$location,SessionService,SessionSet,$state){

	return{
		loguear:function(credentials){
		var authUser = $http({method:'POST',url:'usuario/loguear',params:credentials});
		return authUser;
		},       
		  desloguear : function(){
            return $http({
                method:'GET',
                url : "usuario/desloguear"
            }).success(function(){
                //eliminamos la sesión de sessionStorage
                SessionSet.unCacheSession();
                $state.go("login");
                //$route.reload();
            });
        },        
		    verificarLogueo : function(){               
            var authUser = $http({method:'GET',url:'usuario/verificarlogueo'});
            authUser.success(function(response){

              if (response.id > 0) {
                  SessionSet.cacheSession(response);                 
                  return SessionService.get("auth");
              }

            });
            
        },
        estaLogueado:function(){
          return SessionService.get("auth");
        },
        token:function(){
          return SessionService.get("_token");
        }        
	}
});  


