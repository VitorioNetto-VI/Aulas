
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Cursos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para um arquivo CSS, se necessário -->
</head>
<body>
    <div class="container">
      
       <h1 style="text-align: center;">Sorteando...</h1>
       <hr />
        
    </div>
</body>
</html>
<?php
$Ordem = array("Primeiro", "Segundo", "Terceiro", "Quarto", "Quinto", "Sexto", "Sétimo");
$arquitetura = array("Monolitica", "Micro Serviço", "Monolitica Modular", "SOA");
$grupo = array("Grupo 01", "Grupo 02", "Grupo 03", "Grupo 04", "Grupo 05", "Grupo 06", "Grupo 07");
$controle = 1;
while ($controle <= 7) { // Gera 7 sorteios
    
    
    // Sorteia e remove um elemento de cada array
    $ordemIndex = array_rand($Ordem);
    $sorteioOrdem = $Ordem[$ordemIndex];
    array_splice($Ordem, $ordemIndex, 1);
    
    $grupoIndex = array_rand($grupo);
    $sorteioGrupo = $grupo[$grupoIndex];
    array_splice($grupo, $grupoIndex, 1);
    
    $conteudo = "Sorteio: " . $controle . " - Ordem: " . $sorteioOrdem . " - Arquitetura: " . $arquitetura [array_rand($arquitetura)] . " - Grupo: " . $sorteioGrupo;
    echo $conteudo . '<br />';
    $controle++;
    sleep(5); // Aguarda 5 segundos antes de gerar o próximo sorteio
    
}
?>