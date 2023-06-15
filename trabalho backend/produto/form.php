<?php require_once "consultar_por_id.php" ?>


    <h1>Cadastro de Estudante</h1>
    <hr>

    <form 
    action="<?php echo isset($estudante) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="nome">Nome</label><br>
       <input type="text" name="nome" id="nome" value="<?php echo $estudante['nome'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $estudante['idestudante'] ?? ""; ?>"><br>

       <label for="idade">Idade</label><br>
       <textarea  name="idade" id="idade"><?php echo $estudante['idade'] ?? ""; ?></textarea><br>

       <label for="curso">Curso</label><br>
       <input type="number" step="0.01" name="curso" id="curso" value="<?php echo $estudante['curso'] ?? "0.00"; ?>"><br>

       <label for="universidade">Universidade</label><br>
       <input type="file" name="universidade" id="universidade"><br>

       <br>
       <button type="submit">Cadastrar</button>

    </form>

    