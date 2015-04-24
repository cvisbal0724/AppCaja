
<link href="css/style.css" rel="stylesheet" type="text/css" />  

<div id="wrapper">

    <div class="user-icon"></div>
    <div class="pass-icon"></div>
   
<form name="login-form" class="login-form" action='usuario/loguear' method="post">
	
    <div class="header">
   
    <h2 align="center"> <img src="images/llave.png"/>INGRESO A CAJA</h2>
    <span></span>
    </div>
    
    <div class="content">
    
		 <input ng-model="loginData.usuario" type="text" class="input username" placeholder="Nombre de usuario"/>
		 <input ng-model="loginData.clave" type="password" class="input password" placeholder="Clave"/>
		 <!--<input type="hidden" name="_method" value="PUT">
  		<input type="hidden" name="_token" value="[[[csrf_token()]]]" />-->
    
    </div>
   
    <div class="footer">

     <input type="button" name="submit" value="Ingresar" class="button" ng-click='loginSubmit()'/>
    
    </div>
 
</form>
  
</div>
<div class="gradient"></div>

<script type="text/javascript">
$(document).ready(function() {
    $(".username").focus(function() {
        $(".user-icon").css("left","-48px");
    });
    $(".username").blur(function() {
        $(".user-icon").css("left","0px");
    });
    
    $(".password").focus(function() {
        $(".pass-icon").css("left","-48px");
    });
    $(".password").blur(function() {
        $(".pass-icon").css("left","0px");
    });
});
</script>