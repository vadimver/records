<section>
  <div class = "users_block">
    <form action="records_add.php" method = "POST">
      <select name = "id_user">
        <?php foreach($data as $users):?>
        <option value = "<?php echo $users['id'];?>">
            <?php echo $users['name'];?>
        </option>
        <?php endforeach; ?>
      </select></br>
      <input type = "text" name = "name_record" placeholder="Title record"></br>
      <textarea name = "record" placeholder="Record"></textarea></br>
      <button type = "submit">Add</button>
    </form>
  </div>
</section>
