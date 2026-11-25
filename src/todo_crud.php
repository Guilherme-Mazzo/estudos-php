<?php

    $host = "db";
    $usuario = "root";
    $senha = "root";
    $banco = "todo_list";

    $conn = new mysqli(hostname: $host, username: $usuario, password: $senha, database: $banco);

    if($conn->connect_error) {
        die("Fala na conexão com o banco. " . $conn->connect_error);
    }

    $tarefas = [];

    // criação da tarefa
    

    // exclusao


    // resgates tarefas
    $sqlselect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
    $result = $conn->query(query: $sqlselect);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tarefas[] = $row;
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
</head>
<body>

    <form action="todo_crud.php" method="POST">
        <h1>Todo List</h1>
        <input type="text" placeholder="Descrição da tarefa" name="descricao" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas tarefas</h2>
    
    <?php if(!empty($tarefas)):?>
        <h1>Exibir lista:</h1>
    <?php else: ?>
        <p>Não há tarefas.</p>
    <?php endif;  ?>
        

    
</body>
</html>