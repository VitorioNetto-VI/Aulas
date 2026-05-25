<form action="index.php?action=saveRatings" method="POST">
    <input type="hidden" name="user_id" value="<?= $_GET['user_id'] ?>">
    <?php foreach ($hoobs as $hoob): ?>
        <p><?= $hoob->name ?></p>
        <input type="range" name="ratings[<?= $hoob->id ?>]" min="0" max="5" step="1">
    <?php endforeach; ?>
    <button type="submit">Enviar</button>
</form>