<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 03</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black; 
        }
        </style>
</head>
<body>

<?php
echo"<h1>Salada de Frutas>";


echo"<h1> Tabela de 1 a 10 em PHP </h1>";
echo"<table><tr>";
for($x=1; $x<=10; $x++){
echo "<td>$x</td>"; 
}

echo "</tr></table>";

?>
    
</body>
</html>