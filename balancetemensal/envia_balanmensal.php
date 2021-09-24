<?php

$conexao = new mysqli("127.0.0.1","contabilidade","jSd7Yv+Rbb3Q@_D","contabilidade") 
    or die("Erro na conexão com banco de dados");
    
    $conta_balMensal = $_POST['conta_balMensal'];  
    $saldoInicial = $_POST['saldoInicial'];
    $saldoInicial = str_replace('.' , ',' , $_POST['saldoInicial']);
    $saldoFinal = $_POST['saldoFinal'];
    $saldoFinal = str_replace('.' , ',' , $_POST['saldoFinal']);
    $credito = $_POST['credito'];
    $credito = str_replace('.' , ',' , $_POST['credito']);
    $debito = $_POST['debito'];
    $debito = str_replace('.' , ',' , $_POST['debito']);
    $dataatual = $_POST['dataatual'];
    //$dataatual = date_format($_POST['dataatual'], 'yyyy-MM-dd');
    //$dataatual = str_replace('/' , '/' , $_POST['debito']);

settype($conta_balMensal, 'integer');
settype($saldoInicial, 'float');
settype($saldoFinal, 'float');
settype($credito, 'float');
settype($debito, 'float');
settype($dataatual, 'string');

$string_sql = "INSERT INTO balancete_mensal (conta_balMensal, saldoInicial, saldoFinal, credito, debito, dataatual) 
VALUES ('{$conta_balMensal}','{$saldoInicial}','{$saldoFinal}','{$credito}','{$debito}','{$dataatual}')"; 

    mysqli_query($conexao, $string_sql);

if(mysqli_affected_rows($conexao) == 1){ 
    echo "<p>Informações registradas no banco de dados.</p>";
   echo '<a href="balanmensal.html">Voltar para formulário de cadastro clique abaixo.</a><br> <br> <br> '; 
} else {
    echo "<br /><br /> Erro, não foi possível inserir no banco de dados. <br /><br /> ";
}
//$sql_date = "SELECT DATE_FORMAT(\"01-02-2020\", \"%d %c %Y\")";

if ( !empty( $_POST ) ) {
	// Exibe o conteudo das variaveis
	echo 'Subcódigo do CNPJ: ' . $_POST['conta_balMensal'] . '<br>';

	echo 'saldoInicial: ' . $_POST['saldoInicial'] . '<br>';
	
	echo 'saldoFinal: ' . $_POST['saldoFinal'] . '<br>';
	
    echo 'Crédito: ' . $_POST['credito'] . '<br>';
    
    echo 'Debito: ' . $_POST['debito'] . '<br>';

    echo 'Data: ' . $_POST['dataatual'] . '<br>';
}
//print_r($conexao);
//print_r($string_sql);
mysqli_close($conexao);
?>




