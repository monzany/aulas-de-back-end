var altura, sexo, alturaMulheres = 0, numHomens = 0, maiorAltura = 0, menorAltura = Infinity;

for (var i = 1; i <= 15; i++) {
  altura = parseFloat(prompt("Digite a altura da pessoa " + i));
  sexo = prompt("Digite o sexo da pessoa " + i + " (M ou F)").toUpperCase();

  if (sexo === "M") {
    numHomens++;
  } else {
    alturaMulheres += altura;
  }

  if (altura > maiorAltura) {
    maiorAltura = altura;
  }

  if (altura < menorAltura) {
    menorAltura = altura;
  }
}

var mediaAlturaMulheres = alturaMulheres / (15 - numHomens);

console.log("Maior altura do grupo: " + maiorAltura.toFixed(2));
console.log("Menor altura do grupo: " + menorAltura.toFixed(2));
console.log("Média de altura das mulheres: " + mediaAlturaMulheres.toFixed(2));
console.log("Número de homens: " + numHomens);
