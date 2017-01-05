<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JQuery Attr 2</title>
        <script src="jquery/jquery-3.1.1.min.js"></script>
        <script src="js/attr.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<link rel="stylesheet" href="https://resources/demos/style.css">-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <div id="title" >
            <h1>Cursos Profissionais</h1>
        </div>
        <div>
            <a href="galeria.html" style="position:absolute;right:33%;top:5%;"><img src="imagens/galeria.png"></a>
        </div>
        <div>
            <a href="addCurso.php" style="position:absolute;right:5%;top:5%;"><img src="imagens/addCurso.JPG"></a>
        </div>
        <div>
            <a href="addDisciplina.php" style="position:absolute;right:18%;top:5%;"><img src="imagens/addDisciplina.JPG"></a>
        </div>
        <div id='accordion'>
            
            <?php
                $db = mysql_connect('localhost','root','root');
                $bd = mysql_select_db('escola');
                $sql="SELECT *FROM cursos;";
                $res=mysql_query($sql);
                $c=4;
                while ($r = mysql_fetch_assoc($res)){
                    echo "<h3>".$r['Curso']."</h3>";
                    $sql1="SELECT * FROM disciplinas WHERE disciplinas.idCurso = ".$r['idCurso']." ;";
                    $res1=mysql_query($sql1);
                    echo "<div>";
                    while ($r2 = mysql_fetch_assoc($res1)) {
                        
                        echo "<b>Disciplina:</b> ".$r2["Disciplina"]."</br><b>Numero de Horas:</b> ".$r2["Horas"]."</br></br>"; 
                    }                    
                    echo "</div>";                                     
                }
            ?>
        </div>
        <a id="refresh" href="index1.php"><img src="imagens/refresh.png"></a>
    </body>
</html>
