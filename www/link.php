<?php
$listDiretorio = array_diff(
    scandir('projetos/'),
    ['.', '..','.git','.vscode']
);
//echo var_dump($listDiretorio);
//Percorremos todos os itens da nossa lista
foreach($listDiretorio as $diretorio){
    $isDir = is_dir('projetos/' . $diretorio) ? 'Diretório' : 'Arquivo';
    
    echo "<li><a href='projetos/".$diretorio."'>".$diretorio."</a> - {$isDir}</li>";
}
?>