<?php

$conexao = new mysqli("127.0.0.1","contabilidade","jSd7Yv+Rbb3Q@_D","contabilidade")
         or die("Erro na conexão com banco de dados");



         $sql = "DELETE FROM `balancete_mensal` WHERE `balancete_mensal`.`subcodigoCNPJ`";

         echo '<a href="balanmensal.html">Voltar para formulário de cadastro clique abaixo.</a><br> <br> <br> ';
         
mysqli_query($conexao, $sql);
mysqli_close($conexao)
?>