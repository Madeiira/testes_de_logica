<!-- 
Exercício 5

Crie uma página em HTML e PHP ou JAVASCRIPT que receba um valor de uma string e verifique se ela é um palíndromo. 

Retornar a frase em vermelho caso a palavra e/ou frase não for um palíndromo.

Caso contrário, retornar a frase em azul

 ● aibofobia - É um palíndromo
 ● omissíssimos - Não é um palíndromo
 ● Gustavo Fernandes - Não é um palíndromo
 ● Anotaram a data da maratona - É um palíndromo
 ● remviver - Não é um palíndromo
-->

<?php include '../public/partials/header.php'; ?>
<link href="css/style.css" rel="stylesheet">

<div class="container mt-5">
        <h1 class="text-center">Verificador de Palíndromo</h1>
        <form method="post" class="mt-4">
            <div class="form-group">
                <input type="text" name="string" class="form-control" placeholder="Digite uma palavra ou frase" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Verificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $string = $_POST['string'];
            // Remove espaços e transforma em minúsculas
            $cleanString = str_replace(' ', '', strtolower($string));
            // Verifica se é um palíndromo strrev -> inverte string 
            // para ser um palindromo a palavra invertida deve ser igual a ela normal
            if ($cleanString === strrev($cleanString)) {
                echo '<h4 class="mt-4 palindrome">"' . htmlspecialchars($string) . '" é um palíndromo!</h4>';
            } else {
                echo '<h4 class="mt-4 not-palindrome">"' . htmlspecialchars($string) . '" não é um palíndromo.</h4>';
            }
        }
        ?>

<?php include '../public/partials/footer.php'; ?>