<html>
  <head>
    <meta charset="utf-8"/>
    <title>Curso PHP</title>
  </head>

  <body>
    <?php
      //arrays sequenciais (numericos)
      $lista_frutas = array('banana', 'maça', 'uva');
      $lista_frutas[] = 'melancia';
      var_dump($lista_frutas);

      echo '<hr />';

      //arrays associativos
      $lista_frutas2 = ['a' => 'banana', 'b' => 'abacaxi', '2' => 'uva'];

      print_r($lista_frutas2);

    ?>

  </body>
</html>
