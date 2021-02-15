<html>
  <head>
     <meta charset="utf-8" />
     <title>Curso PHP</title>
  </head>


  <body>

        <?php 
            
            $texto = 'Curso Completo de PHP';

            //string to lower
            echo $texto . '<br/>';
            echo strtolower($texto);
            
            echo '<hr/>';
            //string to upper
            echo $texto . '<br/>';
            echo strtoupper($texto);
            
            echo '<hr/>';
            //upper case first
            echo $texto . '<br/>';
            echo ucfirst($texto);
            
            echo '<hr/>';
            //string lenght
            echo $texto . '<br/>';
            echo strlen($texto);
            
            
            echo '<hr/>';
            //strin replace
            echo $texto . '<br/>';
            echo str_replace('PHP','JS',$texto);
            
            
            echo '<hr/>';
            //
            echo $texto . '<br/>';
            echo substr($texto,1, 4);
        ?>

  </body>

<html>
