# testes de logica
### Testes de Lógica para a empresa SIIMP SISTEMAS

# Descrição de cada exercicio

## Exercicio 1 
### Foi criado um array aonde foi armazenado as vogais existentes, posteriormente utilizei a função nativa do PHP str_replace para substituir as vogais apagando-as 

## Exercicio 2
### Iniciei pegando a frase escrita pelo usuario transformando ela em um array com a função explode() com o separador ' ' espaços em branco pra pegar cada palavra, após isso percorri o mesmo array com foreach, sempre checando se a proxima palavra é maior ou igual a anterior, se for maior reinicia a lista com a maior se igual adiciona a palavra em um array. 

## Exercicio 3
###  Infelizmente nao consegui pensar numa boa logica para este exercicio.

## Exercicio 4
### Primeiro verifico se o numero inserido é maior que 0, dai percorro o numero num for, o utilizando como tamanho maximo para o percorrer até o fim, depois faço as validações utlizando o operador Módulo % pra ver se o mesmo é divisivel por 3 ou 5 ou ambos

## Exercicio 5
### Inicialmente transoformei todos os caracteres em minusculos com a função strtolower que eu peguei do formulario e ao mesmo tempo limpei os espaços em branco das frases
### Por fim para verificar se é um polindromo eu utilizei outra função do php strrev para fazer com que a string se inverta e assim comparo se é identico com o operador === com a string original dai printo o resultado se sim ou não 

## Exercicio 6
### Copiei a logica do exercicio 5 e adicionei outra limpeza que foi limpar dos acentos da string total
### Se caso não for identificado como palindro existe um loop aonde ele retira a ultima letra da direita pra esqueda sempre comparando se é um palindromo ou não com essa nova string sem a ultima letra da direita e o loop se encerra apenas se for verdadeiro a verificação do palindromo  ou acabar os char da string.

## Exercicio 7
### Primeira Validação usando if Se os números forem iguais retornar qualquer um dos dois numeros
### Segunda  Validação usando elseif se o segundo numero for menor que o primeiro retorno 0
### Terceira Validação no else crio um loop for para somar de num1 até num2, somando cada número usado para calcular a soma de todos os inteiros dentro do intervalo especificado

## Pasta com os desafios:
[Exercico 1](/Exercicio_1)
[Exercico 2](/Exercicio_2)
[Exercico 3](/Exercicio_3)
[Exercico 4](/Exercicio_4)
[Exercico 5](/Exercicio_5)
[Exercico 6](/Exercicio_6)
[Exercico 7](/Exercicio_7)
