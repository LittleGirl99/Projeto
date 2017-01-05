<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Adicionar Disciplina</title>
        <script src="jquery/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/addDisciplinasstyles.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
	<body>
		<center>
			<div>
				<h1>Adicionar Disciplina</h1>	
			</div>
		</center>
		<hr/>
		<a id="back" href="index1.php"><img src="imagens/back.jpg"></a>
		<a id="refresh" href="addDisciplina.php"><img src="imagens/refresh.png"></a>
		<div id="formPosition">
			<form id='formDisciplina' method="post" action="php/addDisciplinaCode.php" enctype="multipart/form-data">
				<div>
					<div>
						Nome da Disciplina:
					</div>
					<div>
						<input type="text" size="54" name="disciplina">
					</div>
				</div>
				<div>
					<div>
						Numero de Horas:
					</div>
					<div>
						<input type="text" size="54" name="horas">
					</div>
				</div>
				<div>
					<div>
						Nome do curso:
					</div>
					<div>
						<input type="text" size="54" name="nCurso">
					</div>
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
					$qr=mysql_query('SELECT Disciplina,Horas FROM disciplinas;');
					echo "<table>";
					echo "<tr><th>Disciplina</th><th>Horas</th></tr>";
					while ($row = mysql_fetch_assoc($qr)) {
						echo "<tr>";
						echo sprintf("<td>%s</td>",$row['Disciplina']);
						echo sprintf("<td>%s</td>",$row['Horas']);
						echo "</tr>";
					}
					echo "</table>";
				?>
			</center>
		</div>
		<script>
			$('form #formDisciplina').submit(function(){
				$.ajax({
				type: 'POST',
				url: 'php/addDisciplinaCode.php',
				data:
				{
					disciplina: $('input[name=disciplina]').val(),
					horas: $('input[name=horas]').val(),
					curso: $('input[name=nCurso]').val()
				}
				}).done(function(e){
					$('#showContent').append(e);
					disciplina: $('input[name=disciplina]').val(''),
					horas: $('input[name=horas]').val(''),
					curso: $('input[name=nCurso]').val('')
				});
				return false;
			});
		</script>
	</body>
</html>