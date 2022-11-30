algoritmo "exercício11"
//16) [DESAFIO] Escreva um programa para calcular a redução do tempo de vida de um
//fumante. Pergunte a quantidade de cigarros fumados por dias e quantos anos ele
//já fumou. Considere que um fumante perde 10 min de vida a cada cigarro. Calcule
//quantos dias de vida um fumante perderá e exiba o total em dias.
var
qtdCigarros, qtdAnosFumou, qtdDeDias, reducaoMin, reducaoDias : real
inicio
escreval("Digite a quantidade de cigarros fumados por dia : ")
leia(qtdCigarros)
escreval("Digite quantos anos você já fumou : ")
leia(qtdAnosFumou)

reducaoMin <- qtdAnosFumou * 365 * qtdCigarros * 10
reducaoDias <- reducaoMin / (24*60)

escreval("Redução do tempo de vida em dias ", reducaoDias)





fimalgoritmo

