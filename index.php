
<?php
//modelos de functions

//function anonima
/*$dizimo = function ($valor) {
    return $valor * 0.1;
};
echo $dizimo(100);*/

//arrow function 
/*$dizimo = fn($valor) => $valor * 0.1;
echo $dizimo(150);*/

//simples function de dividir 
/*function dividir ($numero) {
    $metade  = $numero / 2;
    echo $metade."<br/>";
};
dividir(50);*/

//function de dividir com um loop, function recursiva
/*function dividir (int $numero){
    $metade  = $numero / 2;
    echo $metade."<br/>";
    if($metade > 0){
        dividir($metade);
    };
};
dividir(100);*/

//functions nativas de MATEMATICA

/*retorna o numero absoluto
$n = -8.5;
echo abs($n);*/

/*retorna o PI
echo pi();*/

/*arredondar um numero sempre para BAIXO
$n = 2.7;
echo floor($n);*/

/*arredondar um numero sempre para CIMA
$n = 2.7;
echo ceil($n);*/

/*arredonda o numero para numero inteiro, conforme o numero depois da virgula 
$n = 2.7;
echo round($n);*/

//arredondar um numero mas deixando um numero de casas decimais 
//$n = 12.53694;
//echo round($n, 2);

//gerando um numero aleatório
//$aleatorio = rand(1, 10);
//echo $aleatorio ;

//para saber o numero maior de uma lista e o menor
//$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//echo max($lista);
//echo '<br/>';
//echo min($lista);

//function nativas de string 
//function que retira os espaços de umas string
//$n = '   willian   ';
//echo trim($n);

//function que retorna o numero de caracteres de uma string
//$nome = 'willian';
//echo "o nome WILLIAN tem  ".strlen($nome) ." letras";

//function que transforma sua string em lowerCased e UpCassed
//$nome = 'Willian Madruga';
//echo strtolower($nome);
//echo '<br/>';
//echo strtoupper($nome);

// function que altera qualquer palavra ou letra numa variavel
//$nome = 'willian madruga';
//$nomeAltered = str_replace('madruga','donel',$nome);
//echo $nomeAltered;

//function que pega o numero exato de caracteres de uma string
///$nome = 'willian Madruga';
///$nCaracteros =substr($nome, 0,5);
///echo $nCaracteros;

//function que diz a posição que aparece determinada palavra ou letra numa variavel
//$nome = 'willian madruga';
//$posicao = strpos($nome, 'n');
//echo $posicao;

//$nome = 'willian madruga';
//$posicao = strpos($nome, 'z');
//if($posicao>-1){
//    echo 'Achou e esta na posição '. $posicao;
//}else{
//    echo 'Não achou';
//}

//faz um filtro e retorna somente os nomes dos que foram reprovadros
//$lista = ['willian', 'madruga', 'donel', 'maria', 'gabriela'];
//$aprovados = ['willian','donel', 'maria'];
//
//$reprovados = array_diff($lista, $aprovados);
//
//print_r($reprovados);

//filtrando o array para aparecer somente os itens que eu escolher
//$n = [10,20,35,15,81,28];
//$filtrados = array_filter($n, function($item){
//    //isso vai dizer como vai funcionar função
//    if($item < 30){
//        return true;
//    }else{
//        return false;
//    }
//});
//print_r($filtrados);

// funcrion que faz um map em todos os itens de um array e faz a função que você quiser
//$n = [10,20,35,15,81,28];
//$dobrados = array_map(function($item){
//    return $item * 2;
//},$n);
//print_r($dobrados);

//function no array que retorna se existe ou não o item que você procura
//$n = [10,20,35,15,81,28];
//if(in_array(35,$n)){
//    echo 'EXISTE';
//}else{
//    echo 'NÃO EXISTE';
//};

//function que retorna a posição do item em um array
//$n = [10,20,35,15,81,28];
//$pos = array_search(35, $n);
//echo $pos;

//exercicio complicado de fazer aparecer o dia da semana
//date_default_timezone_set('America/Sao_Paulo');
//echo date('d-m-Y');
//echo "<br/>";
//echo strftime("%A");
//
//echo '<strong>Exercício Dia da Semana</strong></br>';
//echo '<hr>';
//
//function diaSemana ($data) {
// 
//  $dia = date('D',strtotime($data));
// 
//  switch ($dia) {
//    case 'Mon':
//      echo 'Segunda';
//      break;
//   
//    case 'Tue':
//      echo 'Terça';
//      break;
//   
//    case 'Wed':
//      echo 'Quarta';
//      break;
//   
//    case 'Thu':
//      echo 'Quinta';
//      break;
//   
//    case 'Fri':
//      echo 'Sexta';
//      break;
//   
//    case 'Sat':
//      echo 'Sábado';
//      break;
//   
//    case 'Sun':
//      echo 'Domingo';
//      break;
//    default:
//      echo 'Dia Inexiste';
//      break;
//  }
// 
//};
//
//echo diaSemana('14-11-2023');