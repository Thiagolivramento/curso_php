<html>
  <head>
    <meta charset="utf-8"/>
    <title>Curso PHP</title>
  </head>

  <body>
     <?php
        
       // $listaCoisas = array();
       $listaCoisas = [];

       //criando um array dentro de outro array.
       $listaCoisas['frutas'] = ['banana', 'maça','uva','morango'];

       echo '<pre>';
       print_r($listaCoisas);
       echo '<pre>';
       
       //criando um array dentro de outro array, com indices associativos.
       $listaCoisas['frutas'] = [1 => 'banana', 2 =>  'maça',3 => 'uva',4 => 'morango'];
       
       echo '<pre>';
       print_r($listaCoisas);
       echo '<pre>';

       $listaCoisas['pessoas'] = [1 => 'João',2 => 'José',3 => 'Maria'];
       
       echo '<pre>';
       print_r($listaCoisas);
       echo '<pre>';

       //localizando um elemento dentro do array.
       echo '<hr >';
       echo $listaCoisas['frutas'][3];

     

     ?>

  </body>
</html>
