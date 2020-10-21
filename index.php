<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading" align="center" >APP WEB VTP HONOR</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/b2b.jpg" height="180">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>
					<br>
					<span class="btn btn-primary btn-lg btn-block " id="entrarSistema" >Entrar</span>
					<p></p>
					
					<div class="panel panel-heading" align="center" >        </div>
					
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>
