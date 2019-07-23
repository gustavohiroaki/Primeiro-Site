<?php
echo "ola mundo";
$nome = $_REQUEST['tNome'];
$senha = $_REQUEST['tSenha'];
$mail = $_REQUEST['tMail'];
$sexo = $_REQUEST['cSexo'];
$data = $_REQUEST['tData'];
$rua = $_REQUEST['tRua'];
$numero = $_REQUEST['tNum'];
$cidade = $_REQUEST['tCid'];
$urgencia = $_REQUEST['tUrg'];
$mensagem = $_REQUEST['tMsg'];

print_r($_REQUEST);

echo $nome."|".$senha."|".$mail."|".$sexo."|".$data."|".$rua."|".$numero."|".$cidade."|".$urgencia."|".$mensagem;

?>