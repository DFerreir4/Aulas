algoritmo "exercício11"
//12) Crie um programa que leia o preço de um produto, calcule e mostre o seu
//PREÇO PROMOCIONAL, com 5% de desconto.
var

valorProduto, desconto, total : real

inicio

escreval("Digite o valor do produto : ")
leia(valorProduto)
escreval("Digite a % de desconto no produto : ")
leia(desconto)

total <- valorProduto - (valorProduto * desconto) / 100

escreva("O valor do produto : ",valorProduto, " com o desconto de ",desconto," , PREÇO PROMOCIONAL : ", total)





fimalgoritmo
