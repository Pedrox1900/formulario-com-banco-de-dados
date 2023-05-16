
<!--conectando o banco de dados -->
<?php
    $servidor="localhost";
    $usuario="id20762373_usuarios";
    $senha="@Pedrox19002";
    $dbname="id20762373_formulario";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }



?>