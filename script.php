<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoUpload.php";

$nome = $_POST['nome']; 
$idade = $_POST['idade'];
$arquivoImagem = $_FILES['foto'];


defineCategoriaCompetidor($nome, $idade);
uploadImagem($arquivoImagem);

header(string 'location: index.php');
