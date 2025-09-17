<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_animais";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Falha na conexão do Banco" . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["arquivo_musica"]) && $_FILES["arquivo_musica"]["error"] == 0){
        $nome_album =  $conn->real_escape_string($_POST['nome_album']);
        $nome_musica = $conn->real_escape_string($_POST['nome_musica']);
        $arquivo_temp = $_FILES['arquivo_musica']['tmp_name'];
        $nome_original = $_FILES["arquivo_musica"]['name'];

        $tipo_arquivo = pathinfo($nome_original, PATHINFO_EXTENSION);

        $novo_nome = uniqid() . "." . $tipo_arquivo;

        $caminho_arquivo = "./uploads/" .  $novo_nome;

        if(move_uploaded_file($arquivo_temp, $caminho_arquivo)){
            $sql = "INSERT INTO album_musica (nome_album, nome_musica, endereco_musica) VALUES ('$nome_album', '$novo_nome', '$caminho_arquivo')";

            if($conn->query($sql) == TRUE){
                echo "<h1> Música cadastrada com sucesso</h1>";
                echo "<p> Nome do Album: {$nome_album}</p>";
                echo "<p> Nome da Música: {$novo_nome}</p>";
                echo "<a href='index.php'>Cadastrar outra Música</a>";
            }
        }
    }
}