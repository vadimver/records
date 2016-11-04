<section>
  <div class = "users_block">
    <form action="users_add.php" method = "POST">
      <input type = "email" name = "email" placeholder=" e-mail"></br>
      <input type = "text" name = "name" placeholder=" name"></br>
      <input type = "text" name = "nick" placeholder=" Nickname"></br>
      <label for = "male">Male</label>
      <input id = "male" name = "sex" value = "Male" type = "radio">
      <label for = "female">Female</label>
      <input id = "female" name = "sex" value = "Female" type = "radio"></br>
      <span>Birthday </span><input type = "date" name = "date"></br>
      <button type = "submit" name = "button" value = "true">Add</button>
    </form>
  </div>
</section>
