<?php
//chmod ("c:/planogeral/planogeral.txt", 0766);
        //echo substr(sprintf('%o', fileperms('c:/planogeral/planogeral.txt')), -4);
       
$conexao = new mysqli("127.0.0.1","contabilidade","jSd7Yv+Rbb3Q@_D","contabilidade")
         or die("Erro na conexão com banco de dados");
         

$filename = 'c:/planogeral/';
if (file_exists($filename)) {
   // echo "O arquivo $filename existe <br><br>";
} else {
    echo "O arquivo $filename não existe";
    mkdir('c:/planogeral/', 0777, true);
}
            echo "Pasta e arquivos criados com sucesso em c:\planogeral\ <br><br>";
            echo '<a href="plangeral.html">Voltar para formulário de cadastro clique abaixo.</a><br> <br> <br> ';

       // Exporta as informações para o documento
$sql = "SELECT * FROM plano_geral INTO OUTFILE 'c:\\\\planogeral\\\\planogeral.txt'";
      // Consulta para inserir no arquivo
       mysqli_query($conexao, $sql);
mysqli_close($conexao)
?>