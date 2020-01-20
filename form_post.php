<?php
if($_FILES){
$arquivo = $_FILES['file'];
 

//$arquivo_recebido = file_get_contents("arquivo_recebido.txt", $arquivo);

$caminho = $_FILES['file']['tmp_name'];

$img_content = file_get_contents("$caminho");


file_put_contents('avatar.jpg',$img_content);

header("location: /brunof/aula_criptografia/form.php");
// echo('<pre>');
// print_r(file_get_contents($caminho));
// echo('</pre>');
}



?>