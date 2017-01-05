<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8 with BOM">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Adicionar Curso</title>
        <script src="jquery/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/addCursoStyles.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<style>
  			.ui-resizable-se {
    			bottom: 17px;
  			}
  		</style>
	</head>
	<body>
		<center>
			<div>
				<h1>Adicionar Curso</h1>	
			</div>
		</center>
		<hr/>
		<a id="back" href="index1.php"><img src="imagens/back.jpg"></a>
		<a id="refresh" href="addCurso.php"><img src="imagens/refresh.png"></a>
		<div id="formPosition">
			<form id='formCurso' method="post" action="php/addCursoCode.php" enctype="multipart/form-data">
				<div>
					Nome do Curso:
				</div>
				<div >
					<textarea id="resizable" cols="55" ></textarea>
				</div>
				<p></p>
				<div>
					<input type="reset" value="Limpar">
					<input type="submit" name="submit" value="Adicionar">
				</div>
			</form>
		</div>
		<div id='showContent'>
			<center>
				<?php
					$db = mysql_connect('localhost','root','root');
					$bd = mysql_select_db('escola');
					$qr=mysql_query('SELECT * FROM cursos;');
					while ($row = mysql_fetch_assoc($qr)) {
						echo sprintf("<p>%s</p>",$row['Curso']);
					}
				?>
			</center>
		</div>
		<script>
			$( function() {
   				$( "#resizable" ).resizable({
      				handles: "se"
    			});
  			});
			$('form #formCurso').submit(function(){
				$.ajax({
				type: 'POST',
				url: 'php/addCursoCode.php',
				data:
				{
					curso: $('input[name=curso]').val()
				}
				}).done(function(e){
					$('#showContent').append(e);
					curso: $('input[name=curso]').val('');
				});
				return false;
			});
		</script>
	</body>
</html>