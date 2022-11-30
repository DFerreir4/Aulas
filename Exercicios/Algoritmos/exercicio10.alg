algoritmo "exercício10"
//10) Faça um algoritmo que leia a largura e altura de uma parede, calcule e
//mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
//sabendo que cada litro de tinta pinta uma área de 2metros quadrados.
var

largura, altura, area , tinta: real

inicio
escreval("Digite largura da área : ")
leia(largura)
escreval("Digite altura da área : ")
leia(altura)

area <- largura * altura
tinta <- area / 2

escreval("A área a ser pintada ",area,"m² e vai precisar de ",tinta," Litro(s) de tinta")











fimalgoritmo
