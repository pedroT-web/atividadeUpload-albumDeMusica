<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Albúm de músicas</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome_animal">Nome do Album:</label>
                <input type="text" id="nome_album" name="nome_album" required>
                <label for="nome_animal">Nome da  Música:</label>
                <input type="text" id="nome_musica" name="nome_musica" required>
            </div>
            <div class="form-group">
                <label for="foto_animal">Selecione a Música:</label>
                <input type="file" id="arquivo_musica" name="arquivo_musica" accept="audio/mp3" required>
            </div>
            <button type="submit">Cadastrar Foto</button>
        </form>
    </div>
</body>
</body>
</html>