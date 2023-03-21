let alunos = [];

while (true) {
  let nome = prompt("Digite o nome do aluno:");
  if (!nome) {
    break;
  }
  
  let disciplinas = [];
  
  while (true) {
    let disciplina = prompt("Digite o nome da disciplina:");
    if (!disciplina) {
      break;
    }
    
    let nota = prompt("Digite a nota de " + disciplina + ":");
    disciplinas.push({
      disciplina: disciplina,
      nota: parseFloat(nota)
    });
  }
  
  alunos.push({
    nome: nome,
    disciplinas: disciplinas
  });
}

console.log(alunos);