<!-- 
Exercício 6

Agora, crie uma página similar ao exercício 5, porém altere a lógica do exercício anterior para que ele verifique se a palavra e/ou frase inserida no campo de texto pode
se tornar um palíndromo se UMA letra da palavra e/ou frase for removida
 ● aibofobia - É um palíndromo
 ● omissíssimos - Pode se tornar um 
palíndromo
 ● Gustavo Fernandes - Não é um palíndromo
 ● Anotaram a data da maratona - É um 
palíndromo
 ● remviver - Pode se tornar um palíndromo
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
    function removeAcentos($str) {
        $acentos = [
            'á', 'ã', 'â', 'à', 'ä',
            'é', 'ê', 'è', 'ë',
            'í', 'î', 'ì', 'ï',
            'ó', 'õ', 'ô', 'ò', 'ö',
            'ú', 'û', 'ù', 'ü',
            'ç'
        ];

        $semAcentos = [
            'a', 'a', 'a', 'a', 'a',
            'e', 'e', 'e', 'e',
            'i', 'i', 'i', 'i',
            'o', 'o', 'o', 'o', 'o',
            'u', 'u', 'u', 'u',
            'c'
        ];

        return str_replace($acentos, $semAcentos, $str);

    }

    $string = $_POST['string'];
    // Remove espaços e transforma em minúsculas
    $stringLimpa =  removeAcentos(str_replace(' ', '', strtolower($string)));

    // Função para verificar se uma string é palíndroma
    function isPalindrome($str) {
        return $str === strrev($str);
    }

    // Verifica se é um palíndromo
    if (isPalindrome($stringLimpa)) {
        echo "<h4 class='is-palindrome'>" . $string . " é um palíndromo! </h4>";
    } else {
        // Verifica se pode se tornar um palíndromo removendo uma letra
        $canBePalindrome = false;
        $length = strlen($stringLimpa);

        for ($i = 0; $i < $length; $i++) {
            // Cria uma nova string sem a letra na posição $i
            $newString = substr($stringLimpa, 0, $i) . substr($stringLimpa, $i + 1);
            if (isPalindrome($newString)) {
                $canBePalindrome = true;
                break; // Encerra o loop se encontrar uma possibilidade
            }
        }

        // Exibindo o resultado
        if ($canBePalindrome) {
            echo "<h4 class='can-be-palindrome'>" . $string . " pode se tornar um palíndromo ao remover uma letra!</h4>";
        } else {
            echo "<h4 class='cannot-be-palindrome'>" . $string . " não é um palíndromo e não pode se tornar um removendo uma letra.</h4>";
        }
    }

}
?>

<?php include '../public/partials/footer.php'; ?>