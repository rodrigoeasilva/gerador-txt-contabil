<?php
//chmod ("c:/planogeral/planogeral.txt", 0766);
        //echo substr(sprintf('%o', fileperms('c:/planogeral/planogeral.txt')), -4);
       
$conexao = new mysqli("127.0.0.1","contabilidade","jSd7Yv+Rbb3Q@_D","contabilidade")
         or die("Erro na conexão com banco de dados");
         

$filename = 'c:/balancetemensal/';
if (file_exists($filename)) {
   // echo "O arquivo $filename existe <br><br>";
} else {
    echo "O arquivo $filename não existe <br/>";
    mkdir('c:/balancetemensal/', 0777, true);
}
            echo "Pasta e arquivos criados com sucesso em c:\balancetemensal\ <br><br>";
            echo '<a href="balanmensal.html">Voltar para formulário de cadastro clique abaixo.</a><br> <br> <br> ';

       // Exporta as informações para o documento
       $sql = "SELECT \n"

       . "  replace(saldoInicial,'.',',') as saldoInicial, \n"
   
       . "  replace(saldoFinal,'.',',') as saldoFinal,\n"
   
       . "  replace(credito,'.',',') as credito, \n"
   
       . "  replace(debito,'.',',') as debito,\n"
   
       . "  DATE_FORMAT(dataatual, '%d/%m/%Y') as dataatual\n"
   
       . "  INTO OUTFILE 'c:\\\\balancetemensal\\\\balancetemensal.txt'"
   
       . "FROM balancete_mensal"; 
       
       //$sql = "SELECT * FROM balancete_mensal INTO OUTFILE 'c:\\\\balancetemensal\\\\balancetemensal.txt'";
      
       mysqli_query($conexao, $sql);
      // print_r($conexao);
       //print_r($sql);
mysqli_close($conexao)
?>