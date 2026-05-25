<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            width: 0 auto;
            align-content: center;
            

        }
        .btnalinhado{
            color: blue;
            align-items: center;
            float: right;
            margin-top: -10%;
           
            

        }






    </style>


</head>
<body>
    <div class="container">
        <!-- Título da página -->
        <h1 class="mt-5">Operações CRUD em PHP</h1>
        
        <!-- Divisão para os botões de operações -->
        <div class="mt-4">
            <!-- Botão para Inserir Post -->
            <a href="insert.php" class="btn btn-primary mb-2">Inserir Post</a>
            
            <!-- Botão para Selecionar Posts -->
            <a href="select.php" class="btn btn-secondary mb-2">Selecionar Posts</a>
            
            <!-- Botão para Atualizar Post -->
            <a href="update.php" class="btn btn-success mb-2">Atualizar Post</a>
            
            <!-- Botão para Deletar Post -->
            <a href="delete.php" class="btnalinhado btn btn-danger mb-2">Deletar Post</a>
        </div>
    </div>
    
    <!-- Inclusão dos scripts do jQuery e Bootstrap JS para funcionalidades interativas -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
