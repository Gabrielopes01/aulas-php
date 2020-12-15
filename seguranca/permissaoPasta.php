<?php

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);  //AS PERMISSOES VAO DE 0 A 7 (0 - Nada, 1 - Execução, 2 = Gravação, 3 = Gravação e Execução, 4 = Leitura, 5 = Leitura e Execução, 6 = Leitura e Gravação, 7 = Permisssao Total - Leitura, Execucao e Gravaçao)
echo "Diretorio Criado";

?>