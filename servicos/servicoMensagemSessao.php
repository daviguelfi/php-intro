<?php

session_start();

public function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'][] = $mensagem;
}

public function obterMensagemErro() : ?array
{
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    
    return null;        
}

public function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

public function obterMensagemSucesso() : ?string
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];
    
    return null;        
}

function removerMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}