<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $conect = mysqli_connect ("localhost","root") or print mysqli_error();
    $banco = mysqli_select_db ($conect,"login") or print mysqli_error();
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sql = "select * from usuario where nome = '$nome' and senha = '$senha'";
    $resp = mysqli_query($conect,$sql) or print mysqli_error();
    $cont = 0;
echo"$sql";
    while (list($nome, $senha)=mysqli_fetch_row($resp))
    {$cont=$cont+1;
    }

    if ($cont>0){
                        header ("location:resultado.html");
                        }else{
    echo "<html><body>";
    echo "<p align=\"center\"> Nome ou senha nao conferem em nossa base de dados.</p>";
    echo "<a href=\"index.html\">Voltar</a></p>";
    echo "</body></html>";
    }
?>