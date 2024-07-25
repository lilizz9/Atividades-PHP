<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprendendo PHP</h1>
    <?php
    // Esse é um comentário de uma linha 
    # Posso utilizar hashtag para comentário
    /**
     * Aqui é um bloco de comentário 
     * Posso escrever  em mais de uma linha
     */
  echo "Aqui aparece um texto na tela do usuário";
  // Podemos colocar tags HTML dentro do PHP 
  echo "<h1>Esse é um título<h1/>";
  echo "<p>Parágrafo do texto.</p>";
  
  //Comandos de saída
  //echo - imprimi uma string na tela 
  //echo - imprimi uma string na tela
  print "<p>Texto dentro do print</p>";
  
  //Variaáveis em PHP
  //Sempre iniciam com $ seguido do nome da variável 
  //Não é necessário identificar o tipo do dado
  //Para criar uma variável basta atribuir um valor a ela.
  $Nome = "Lílian";
  $idade = 17;
  $altura = 1.57;
  echo "$Nome tem $altura m e $idade anos de idade<br>";

  // Aritmética básica 
  echo "operadores Aritméticos.<br>";
  echo "a = 10 e b=5<br>.";
  $a = 10;
  $b = 5;
  $c = $a + $b;
  echo ! "A soma de $a e $b é $c<br>";
  $c= $a - $b;
  echo "A subtração de $a e $b é $c<br>"; 
  $c = $a * $b;
  echo "A multiplicação de $a e $b é $c<br>";
  $c = $a / $b;
  echo "A divisão de $a e $b é $c<br>";
  $c = $a ** $b;
  echo "A potência de $a e $b é $c<br>";
  ?>

</body>
</html>