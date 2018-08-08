<?php

declare()
public function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro( mensagem : 'O nome não pode ser vazio, ´por favor preencha o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
        {
            setarMensagemErro( mensagem :'O nome não pode conter menos de 3 caracteres');
            return false;
        }
    else if(strlen($nome) > 40)
        {
            setarMensagemErro( mensagem :'O nome não pode conter mais de 40 caracteres');
            return false;
        }
    return true;

public function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro( mensagem :'Informe um número para idade');
        return false;
    }
    return true;
}

public function validaImagem(array $imagem) : bool
{
    $extensoesValidas = ['jpg', 'png'];
    $extensaoArquivo = pathinfo(basename($imagem['name']), options: PATHINFO_EXTENSION);
    if( !in_array($extensaoArquivo, $extensoesValidas))
    {
        setarMensagemErro( mensagem:'Informar uma extensao valida');
        return false;
    }
    return true;
}