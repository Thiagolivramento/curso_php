 
  <hmtl>
  
      <head>
          <meta charset='UTF-8' />
          <title> Curso PHP </title>
      </head>
      
      <body>
      
          <?php
             //gettype() = função que retorna o tipo da variável
      
             $valor = 10;

	     // para mudar o tipo de variavel, devo colocar o tipo antes da variável entre parêntese. Exemplo abaixo.

	     $valor2 = (float) $valor;
             $valor3 = (string)$valor;    
                 
	     echo gettype($valor);
	     echo '</br>';
	     echo gettype($valor2);
             echo '</br>';
             echo $valor3. ' '. gettype($valor3);
                  
          ?>
                  
                  
      <body>      
                
   </html>  
