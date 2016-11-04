<section>
  <div class = "users_block">
    <form action="users_add.php" name="userForm" method = "POST" onsubmit="return validateForm()">
      <input type = "email" maxlength = "40" name = "email" placeholder=" e-mail"></br>
      <input type = "text" maxlength = "60" pattern = '^[a-zA-Z][a-zA-Z \.]{1,60}$' name = "name" placeholder=" name"></br>
      <input type = "text" maxlength = "40" name = "nick" placeholder=" Nickname"></br>
      <label for = "male">Male</label>
      <input id = "male" name = "sex" checked="true" value = "Male" type = "radio">
      <label for = "female">Female</label>
      <input id = "female" name = "sex" value = "Female" type = "radio"></br>
      <span>Birthday </span><input type = "date" name = "date"></br>
      <button type = "submit" name = "button" value = "true">Add</button></br></br>

    </form>
  </div>

</section>
