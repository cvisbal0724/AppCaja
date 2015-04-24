confControllers.run(function($rootScope, $templateCache,$location,SessionService, authUsuario,SessionSet,$route,$http, $state){

    //creamos un array con las rutas que queremos controlar
    
   var rutasPrivadas = ["/home"];
    /* var rutasParaPagos = ["",""];*/
    
    //al cambiar de rutas

    authUsuario.verificarLogueo();   
        
    //borra cache
     $rootScope.$on('$viewContentLoaded', function() {
        $templateCache.removeAll();
      });

    $rootScope.$on('$stateChangeStart', function(){
        
        //si en el array rutasPrivadas existe $location.path(), locationPath en el login
        //es /login, en la home /home etc, o el usuario no ha iniciado sesión, lo volvemos 
        //a dejar en el formulario de login

        if(in_array($location.path(),rutasPrivadas) && !authUsuario.estaLogueado()){
            $state.go("login");
        }

        //en el caso de que intente acceder al login y ya haya iniciado sesión lo mandamos a la home
        
        /*if($location.path() === '/login' && authUsuario.isLoggedIn()){
            $location.path("/login");
        }*/

       /* if(($location.path() === '/login') && !authUsuario.isLoggedIn()){
            $location.path("/login");
        }*/

               
    });

    function in_array(needle, haystack, argStrict){
	  var key = '',
	  strict = !! argStrict;
	 
	  if(strict){
	    for(key in haystack){
	      if(haystack[key] === needle){
	        return true;
	      }
	    }
	  }else{
	    for(key in haystack){
	      if(haystack[key] == needle){
	        return true;
	      }
	    }
	  }
	  return false;
	}

});