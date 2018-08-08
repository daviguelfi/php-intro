<?php
session_start ();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
<head>
<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETEDIDORES</p>

    <form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome"/></p>
        <p>Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit" value="Enviar dados do competidor"/></p>
    </form>

</body>
</html>    