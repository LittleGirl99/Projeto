<?php
	if(count($_POST)>0)
	{
		$db = mysql_connect('localhost','root','root');
		$bd = mysql_select_db('escola');
		//echo $_POST['curso'];
		$curso = $_POST["nCurso"];

		$sql = "SELECT idCurso FROM cursos WHERE Curso ='".$curso."'";
		$res = mysql_query($sql);
		$r= mysql_fetch_assoc($res);
		$qr2 = 'INSERT INTO disciplinas (Disciplina,Horas,idCurso) VALUES("'.$_POST["disciplina"].'","'.$_POST["horas"].'",'.$r['idCurso'].')';
		//echo $qr2;
		mysql_query($qr2);
		header("location:../addDisciplina.php");
		
		/*$qr = mysql_query('SELECT * FROM disciplinas ORDER BY idDisciplina DESC LIMIT 1');


		echo "<table>";
		echo "<tr><th>Disciplina</th><th>Horas</th></tr>";
		while ($row = mysql_fetch_assoc($qr)) {
			echo "<tr>";
			echo sprintf("<td>%s</td>",$row['Disciplina']);
			echo sprintf("<td>%s</td>",$row['Horas']);
			echo "</tr>";
		}
		echo "</table>";*/
	}
	
?>