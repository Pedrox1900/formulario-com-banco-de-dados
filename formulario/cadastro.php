

<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $senha2=$_POST['senha2'];
    $descricao=$_POST['descricao'];
    $sexo=$_POST['sexo'];
    $exp=$_POST['experiencias'];
  

    $sql = "INSERT INTO usuarios (nome, email, senha, senha2, descricao, sexo, skills) VALUES ('$nome', '$email', '$senha', '$senha2', '$descricao', '$sexo', '$exp')";

    if(mysqli_query($conexao, $sql)) {
        echo "Usuario cadastrado com sucesso";
        echo "<br>";
        echo "<button><a href='index.html'</a>Voltar</button>";
    }
    else {
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

?>