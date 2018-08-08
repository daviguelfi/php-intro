<?php 

public function uploadImagem(array $imagem) : ?array
{
    if(validaImagem($imagem))
    {
        $diretorio = __DIR__."/../upload/imagem";
        $nomeCompletoArquivo = $diretorio.basename($imagem['name']);
        if(move_uploaded_file($imagem['tmp_name'], $nomeCompletoArquivo))
        {
            removerMensagemErro();
            setarMensagemSucesso( mensagem:'Upload da imagem realizado com sucesso');
            $imagem = lerArquivo();
            setarMensagemSucesso( mensagem:'<img src="../php-intro/imagem/'.$imagem.'" width="180" height="130">');
            return null;
        }
        else{
            removerMensagemSucesso();
            setarMensagemSucesso( mensagem:'Houve algum erro ao realizar o upload');
            return obterMensagemErro();
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}

public lerArquivo()
{
    $arquivosEncontrados = glob(pattern:__DIR__.'/../upload/imagem/*.*');   
    foreach($arquivosEncontrados as $arquivo)
    {
        return basename($arquivo);
    }
}