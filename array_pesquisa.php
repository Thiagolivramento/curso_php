<html>
 <head>
   <meta charset="utf-8"/>
   <title>Curso PHP</title>
 </head>

 <body>

   <?php
    //in_array() -> true ou false para o que está procurando (booleano)
    //array_search() -> retorna o indice do valor, caso ele exista


    $lista_frutas=['Banana', 'Maça','Morango','Uva'];
    
    /*
    echo'<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    
    //método de pesquisa in_array abaixo

    $existe = in_array('Maça', $lista_frutas);
    //true -> = 1
    //false -> = vazio
    if($existe){
        echo 'Sim, o valor pesquisado existe no array';
    }else {
        echo 'Não, o valor pesquisado não existe no array';
    }
    
    //método de pesquisa array_search abaixo
    echo'<pre>';
    $existe2 = array_search('Uva', $lista_frutas);
    //quando o valor não é encontrado o retorno é null
    
    if($existe2 != null){
        echo 'Sim, o valor pesquisado existe no array';
    }else {
        echo 'Não, o valor pesquisado não existe no array';
    }
    */
    
    //pesquisa com array multidimensional, sem trabalhar com loop. É preciso indicar o sub-array

    $lista_coisas = ['frutas' => $lista_frutas,
                    'pessoas' => ['João', 'Maria']
    ];

    echo'<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas'])
   ?>
 </body>
</html>
