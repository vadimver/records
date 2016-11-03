<section>
    <form action="records_add.php" method = "POST">
      <select name = "id_user">
        <?php foreach($data as $users):?>
        <option value = "<?php echo $users['id'];?>">
            <?php echo $users['name'];?>
        </option>
        <?php endforeach; ?>
      </select>
      <input type = "name_record" name = "name_record" placeholder="Title record">
      <textarea type = "text" name = "record" placeholder="Record"></textarea>
      <button type = "submit">go</button>
    </form>
</section>
