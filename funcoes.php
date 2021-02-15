<html>
  <head>
    <meta charset= "utf-8" />
    <title>Curso PHP </title>
  </head>


  <body>
  
    <?php

// com as funções não precisamos mais ficar reescrevendo várias vezes a mesma ação, basta chamar as funções.


      // abaixo uma função do tipo void, não apresenta um retorno.

      function exibirBoasVindas() {

        echo 'Bem vindos <br />';
      
      }



      exibirBoasVindas();

      //função com retorno

      function calcularAreaTerreno($largura, $comprimento) {

          $area = $largura * $comprimento;
          return $area;
      
      }
      

      echo calcularAreaTerreno(30, 50);

    ?>


  </body>

</html>


