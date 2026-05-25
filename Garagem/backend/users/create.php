<?php 
require '../config.php'; 
require '../auth.php';
if($_POST){
 $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
 $email = strtolower($_POST['email']); // Normalizar para minúsculas
 $stmt=$pdo->prepare("INSERT INTO users(name,email,password,role) VALUES (?,?,?,?)");
 $stmt->execute([$_POST['name'], $email, $hash, $_POST['role']]);
 audit($pdo,$_SESSION['user']['id'],'create user');
 header("Location: ../admin.php");
}
?>
<script src="https://cdn.tailwindcss.com"></script>
<form method="post" class="p-6">
<input name="name" class="border p-2 w-full mb-2" placeholder="Nome">
<input name="email" class="border p-2 w-full mb-2" placeholder="Email">
<input type="password" name="password" class="border p-2 w-full mb-2" placeholder="Senha">
<select name="role" class="border p-2 w-full mb-2">
<option value="admin">Admin</option>
<option value="editor">Editor</option>
</select>
<button class="bg-green-600 text-white px-4 py-2">Salvar</button>
</form>
