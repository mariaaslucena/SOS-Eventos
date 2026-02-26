<!DOCTYPE html>

<html lang= "pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Solicitação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id= "formulario">
<h2>Nova Solicitação de Evento</h2>

<form action="salvar_solicitacao.php" method="POST">

    <label>Nome do Cliente:</label><br>
    <input type="text" name="nome_cliente" required><br><br>

    <label>Data do Evento:</label><br>
    <input type="date" name="data_evento" required><br><br>

    <label>Descrição do Evento:</label><br>
    <textarea name="descricao_evento" required></textarea><br><br>

    <label>ID do Fotográfo:</label><br>
    <input type="number" name="id_fotografo" required><br><br>

    <button type="submit">Salvar</button>
</form>
</div>

<script src="script.js"></script>

</body> 

</html>