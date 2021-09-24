<?php

$conexao = new mysqli("127.0.0.1","contabilidade","jSd7Yv+Rbb3Q@_D","contabilidade") 
    or die("Erro na conexão com banco de dados");
    
    $subcodigoCNPJ = $_POST['subcodigoCNPJ'];  
    $conta = $_POST['conta'];
    $descricao = $_POST['descricao'];
    $indicadorTributacao = $_POST['indicadorTributacao'];
    $codigoLeiComplementar = $_POST['codigoLeiComplementar'];


//Acima ele recebe todas as variaveis como string
//Aqui ele converte todas as para os respectivos tipos e exibe na tela para testes
settype($subcodigoCNPJ, 'integer');

settype($codigoLeiComplementar, 'float');

//$sql = "DELETE FROM `plano_geral` WHERE `plano_geral`.`subcodigoCNPJ`";

$string_sql = "INSERT INTO plano_geral (subcodigoCNPJ, conta, descricao, indicadorTributacao, codigoLeiComplementar) 
VALUES ('{$subcodigoCNPJ}','{$conta}','{$descricao}','{$indicadorTributacao}','{$codigoLeiComplementar}')"; 

    mysqli_query($conexao, $string_sql);

if(mysqli_affected_rows($conexao) == 1){ 
    echo "<p>Informações registradas no banco de dados.</p>";
   echo '<a href="plangeral.html">Voltar para formulário de cadastro clique abaixo.</a><br> <br> <br> '; 
} else {
    echo "Erro, não foi possível inserir no banco de dados. <br /><br /> ";
}
//nl2br($string_sql);

if ( !empty( $_POST ) ) {
	// Exibe o conteudo das variaveis
	echo 'Subcódigo do CNPJ: ' . $_POST['subcodigoCNPJ'] . '<br>';

	echo 'Conta: ' . $_POST['conta'] . '<br>';
	
	echo 'Descrição: ' . $_POST['descricao'] . '<br>';
	
    echo 'Indicador de tributação: ' . $_POST['indicadorTributacao'] . '<br>';
    
    echo 'Código de lei complementar: ' . $_POST['codigoLeiComplementar'] . '<br>';
}
//print_r($string_sql);
mysqli_close($conexao);
?>




