algoritmo "exercício11"
//14) A locadora de carros precisa da sua ajuda para cobrar seus serviços. Escreva
//um programa que pergunte a quantidade de Km percorridos por um carro alugado e a
//quantidade de dias pelos quais ele foi alugado. Calcule o preço total a pagar,
//sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.
var
qtdKm, qtdDias, total : real
inicio
escreval("Digite quantos Kms foi percorrido pelo carro alugado : ")
leia(qtdKm)
escreval("Digite quantos dias o carro foi alugado : ")
leia(qtdDias)

total <- (qtdKm * 0.20) + (qtdDias * 90)

escreval("A quantidade de Kms ",qtdKm," e a quantidade de dias ",qtdDias)
escreval("O valor total a pagar : R$ ",total)

fimalgoritmo

