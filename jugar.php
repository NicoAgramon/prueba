<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>OMS</title>
		<meta charset="utf-8"/>
		<link rel=StyleSheet href="hint.css" type="text/css">
		<style type="text/css">
			body {
				baround: linear-gradient(to right, yellow, orange, skyblue);
			}
			.fieldset {
				width: 35%;
				margin-left: auto;
				margin-right: auto;
			}
			.oms {
				float: right;
			}
			p {
				font-family: arial;
			}
		</style>
		<script type="text/javascript">
			window.onload = function (){
					juego_a_elegir();
					comprobar_nombre();
					comprobar_contraseña();
					/*comprobar_edad();*/
					document.getElementById('limitada').onclick = horas_de_espera;
					document.getElementById('ilimitada').onclick = no_horas_de_espera;
				}
				function juego_a_elegir(){
					var genero = document.getElementById('Genero').value;
					if (genero == "Acción") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='DS'>Modifico este texto para realizar una segunda prueba</option> <option value='OV'>Overwatch</option> </select>";
					}
					if (genero == "Rol") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='TESO'>The Elder Scrolls Online</option> <option value='GW2'>Guild Wars 2</option> </select>";
					}
					if (genero == "Lucha") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='SSB'>Super Smash Bros</option> <option value='SFV'>Street Fighter V</option> </select>";
					}
					if (genero == "Carreras") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='NFS'>Need for Speed</option> <option value='SMK'>Super Mario Kart</option> </select>";
					}
					if (genero == "Deportes") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='FIFA'>FIFA</option> <option value='NBA'>NBA</option> </select>";
					}
					if (genero == "Estrategia") {
						var juego = "<b>Juego</b> <select id='juego' required> <option value='AOE'>Age of Empires</option> <option value='BT'>Battle Tech</option> </select>";
					}
					document.getElementById('Juego').innerHTML = juego;
				}
				function horas_de_espera(){
					var horas_limitadas = "<b>Horas de espera</b> <select> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> <option value='10'>10</option> <option value='11'>11</option> <option value='12'>12</option> <option value='13'>13</option> <option value='14'>14</option> <option value='15'>15</option> <option value='16'>16</option> <option value='17'>17</option> <option value='18'>18</option> <option value='19'>19</option> <option value='20'>20</option> <option value='21'>21</option> <option value='22'>22</option> <option value='23'>23</option> <option value='24'>24</option>  </select>"
					document.getElementById('horas_espera').innerHTML = horas_limitadas;
				}
				function no_horas_de_espera(){
					var horas_limitadas = ""
					document.getElementById('horas_espera').innerHTML = horas_limitadas;
				}
				function comprobar_nombre(){
					var nombre = document.getElementById('nom_usu').value;
					if (nombre < 3 && nombre > 30) {
						document.getElementById('error_nombre').innerHTML = "Tamaño mínimo 3 caractéres y máximo 30. Solo se pueden usar letras y dígitos.";
					}
					else {
						document.getElementById('error_nombre').innerHTML = "";
					}
				}
				function comprobar_contraseña(){
					var contraseña = document.getElementById('contr').value;
					if (contraseña < 6 && contraseña > 20) {
						document.getElementById('error_contraseña').innerHTML = "Tamaño mínimo 6 caractéres y máximo 20. Debe incluir al menos una letra y un dígito.";
					}
					else {
						document.getElementById('error_contraseña').innerHTML = "";
					}
				}
				/*function comprobar_edad(){
					var fecha = document.getElementById('fecha_naci').value;
					var año = fecha.substring(6);
					if (año*1 <= 2001*1) {
						
					}
				}*/

		</script>
	</head>
	<body>
	<form action="jugar.php" method="post" enctype="multipart/form-data">
		<fieldset class="fieldset">
			<legend><h2>SOLICITUD DE PARTIDA</h2></legend>
			<img src="Imagenes/oms.png" class="oms">
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Este es el nombre de jugador que tendrás durante la partida">Nombre de usuario:</b> <input type="text" name="Nombre_Usuario" id="nom_usu" onkeyup="comprobar_nombre()" required> <p id="error_nombre"></p> </p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Este es la contraseña de esta partida">Contraseña:</b> <input type="password" name="Contraseña" id="contr" onkeyup="comprobar_contraseña()" required> <p id="error_contraseña" ></p> </p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Aquí deberás poner tu fecha de nacimiento">Fecha de nacimiento:</b> <input type="date" name="Fecha_Nacimiento" id="fecha_naci" onchange="comprobar_edad()" required> </p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Este es el género de juego al que quieres jugar">Género</b> <select id="Genero" onchange="juego_a_elegir()" required>
				<option value="Acción">Acción</option>
				<option value="Rol">Rol</option>
				<option value="Lucha">Lucha</option>
				<option value="Carreras">Carreras</option>
				<option value="Deportes">Deportes</option>
				<option value="Estrategia">Estrategia</option>
			</select> </p>
			<b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Este es el juego al que quieres jugar, variarán en función del género escogido"><p id="Juego">
			</p></b>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Aquí podrás seleccionar si estas dispuesta a esperar para jugar una partida, y cuantas horas estas dispuesto a esperar">Espera</b> <input type="radio" name="espera" value="Limitada" id="limitada" required>Limitada <input type="radio" name="espera" value="Ilimitada" id="ilimitada" required>Ilimitada </p>
			<p id="horas_espera"></p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Aquí podrás seleccionar si quieres jugar de forma anónima">Marque esta opción si desea jugar de forma anónima: </b><input type="checkbox" name="anónima"></p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Aquí podrás indicar cualquier observación que creas conveniente, sin exceder los 250 caracteres">Observaciones:</b><br/>
			<textarea rows="6" cols="60" placeholder="Especifique cualquier dato que considere necesario" maxlength="250"></textarea></p>
			<p><b class="hint--top hint--info hint--rounded hint--bounce hint--medium" data-hint="Esta es tu foto de perfil que utilizarás durante la partida">Imagen de perfil(debe ser .png, .gif o .jpg):</b><br/>
			<input type="file"></p>
			<p><input type="submit" value="JUGAR"> <input type="reset" value="CANCELAR"></p>
		</fieldset>
	</form>
	</body>
</html>
