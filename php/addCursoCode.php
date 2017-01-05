<?php
	if(count($_POST)>0)
	{
		$db = mysql_connect('localhost','root','root');
		$bd = mysql_select_db('escola');
		//echo $_POST['curso'];
		$qr2 = 'INSERT INTO cursos (Curso) VALUES("'.$_POST["curso"].'")';
		//echo $qr2;
		mysql_query($qr2);

		
		$qr = mysql_query('SELECT * FROM cursos ORDER BY idCurso DESC LIMIT 1');


		while ($row = mysql_fetch_assoc($qr)){
			echo sprintf("<p>%s</p>",$row['Curso']);
		}
		header("location:../addCurso.php");
	}
	
?>