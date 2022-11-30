algoritmo "exercício08"
//8) Desenvolva um programa que leia uma distância em metros e mostre os valores
//relativos em outras medidas.
//Ex:
//Digite uma distância em metros: 185.72
//A distância de 85.7m corresponde a:
//0.18572Km
//1.8572Hm
//18.572Dam
//1857.2dm
//18572.0cm
//185720.0mm
var
n1 : real

inicio
escreva("Digite uma distância em metros : ")
leia(n1)
escreval("A distância de ",n1,"m corresponde a :")
escreval(n1/1000,"Km")
escreval(n1/100,"Hm")
escreval(n1/10,"Dam")
escreval(n1*10,"dm")
escreval(n1*100,"cm")
escreval(n1*1000,"mm")







fimalgoritmo
