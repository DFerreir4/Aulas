algoritmo "exercício11"
//13) Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o
//seu novo salário, com 15% de aumento.
var
salario , aumentoPorcento , novoSalario : real
nome : caracter
inicio
escreval("Digite o nome do funcionário(a) : ")
leia(nome)
escreval("Digite o valor do salário atual de ",nome," :")
leia(salario)
escreval("Digite quantos % o funcionário ",nome," receberá o aumento : ")
leia(aumentoPorcento)

novoSalario <- salario + (salario * aumentoPorcento) / 100

escreval("O salário do funcionario ",nome," era R$ ", salario,"!")
escreval("teve um aumento de ",aumentoPorcento," %  e agora ele vai receber R$ ",novoSalario)



fimalgoritmo
