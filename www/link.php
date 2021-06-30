<?php
$listDiretorio = array_diff(
    scandir('projetos/'),
    ['.', '..','.git','.vscode']
);
//echo var_dump($listDiretorio);
//Percorremos todos os itens da nossa lista
foreach($listDiretorio as $diretorio){
    $isDir = is_dir('projetos/' . $diretorio) ? 'Diretório' : 'Arquivo';
    
    echo "<a href='projetos/".$diretorio."' class='btn btn-primary link'> <i class='bi bi-folder-symlink'></i> ".$diretorio." - {$isDir}</a>";
}
?>