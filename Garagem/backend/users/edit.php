<?php require '../config.php'; require '../auth.php';
$id=$_GET['id'];
$u=$pdo->query("SELECT * FROM users WHERE id=$id")->fetch();
if($_POST){
 if($_POST['password']){
  $hash=password_hash($_POST['password'], PASSWORD_DEFAULT);
  $stmt=$pdo->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?");
  $stmt->execute([$_POST['name'],$_POST['email'],$hash,$id]);
 } else {
  $stmt=$pdo->prepare("UPDATE users SET name=?,email=? WHERE id=?");
  $stmt->execute([$_POST['name'],$_POST['email'],$id]);
 }
 header("Location: ../admin.php");
}
?>
<form method="post">
<input name="name" value="<?=$u['name']?>">
<input name="email" value="<?=$u['email']?>">
<input type="password" name="password" placeholder="Senha">
<button>Salvar</button>
</form>
