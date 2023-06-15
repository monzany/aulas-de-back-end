
<?php require_once "consultar_todos.php"; ?>


  <div class="container">
        <h1>Estudantes</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir estudante
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Curso</th>
                <th scope="col">Universidade</th>
                <th scope="col width="25%"">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($estudantes as $estudante){ ?>
            <tr>
                <th scope="row"><?php echo $estudante['nome']; ?></th>
                <td><?php echo $estudante['curso']; ?></td>
                <td>
                  <img 
                      src="../uploads/<?php echo $estudante['universidade']; ?>" 
                      height="30px" alt="">
              </td>
                <td class="text-end">
                  <a href="excluir.php?id=<?php echo $estudante['idestudante']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $estudante['idestudante']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    

  