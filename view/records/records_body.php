<section>
  <div class = "users_block">
    <form action="record_add.php" name="recordForm" method = "POST" onsubmit="return validateFormRecords()">
      <select name = "id_user">
        <?php foreach($data as $users):?>
        <option value = "<?php echo $users['id'];?>">
            <?php echo $users['name'];?>
        </option>
        <?php endforeach; ?>
      </select></br>
      <input type = "text" maxlength = "40" name = "name_record" placeholder="Title record"></br>
      <textarea name = "record" maxlength = "200" placeholder="Record"></textarea></br>
      <button type = "submit">Add</button>
    </form>
  </div>
</section>
