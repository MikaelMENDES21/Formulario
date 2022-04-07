<?php

 //variaveis globais

//$nome = $_GET['nome'];

//$sexo = $_GET['sexo'];

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];



// echo "<p><strong> Nome: ".$nome."</strong></p>";
// echo "<p><strong> Sexo: ".$sexo." ?</strong></p>";
// echo "<p><strong> Senha: ".$senha." </strong></p>";
// echo "<p><strong> Sexo: ".$_REQUEST['nome']." ?</strong></p>";

//echo (int)empty($nome);
echo "<br>";
//echo strlen($nome);

if (strlen($nome)==0){
    echo "campo obrigatório!!!";
    header ("location:formulario.php?erro=nome");
}

if (strlen($senha)<=3){
    echo"caompo obrigatório";

}

?>