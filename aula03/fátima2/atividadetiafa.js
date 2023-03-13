function ex1(){	
	var maioralt = 0;
	var menoralt = 0;
	var mulher = 0;
	var homem = 0;
	var media = 0;
	var conta = 0;
	var contahomem = 0;

        for(var i = 1 ;i <= 4; i++) {        
            var altura = parseFloat(prompt("Informe sua altura["+i+"]:"));
            var sexo = prompt("Sexo: M ou F:");

                if(i == 1) {
                    menoralt = altura;
                } if(altura > maioralt) { 
                    maioralt = altura;
					msexo = sexo;
                } if(altura < menoralt) { 
                    menoralt = altura;
                } if(sexo == 'F' || sexo == 'f') {
                    mulher += altura;
                    conta++;
                } else if(sexo == 'M' || sexo == 'm') {
                    homem += altura;
                    contahomem++;
                }
            }
            media = mulher/conta;
            document.write("A maior altura é: "+maioralt+"<BR>"); 
            document.write("A menor altura é: "+menoralt+"<BR>");
			document.write("A maior altura é de um(a): "+msexo+"<BR>");
            document.write("A média das alturas das mulheres é: "+media +"<BR>");
            document.write("O número de homens é: "+contahomem+"<BR>");
}