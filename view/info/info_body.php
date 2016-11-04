<section>
  <div class = "info_body">
    <div class = "all_users">
      <?php foreach($users as $user): ?>
        <?php
        if($user['sex'] == 'Female') {
            $sx = 'woman.png';
        }
        else{
            $sx = 'man.png';
        }
        ?>

        <div class = "users_right_block">
          <img src='../../assets/img/<?php echo $sx; ?>'>
          <span class = "span_name"> <?php echo $user['name'];?> - </span>
          <span class = "span_nickname"> <?php echo $user['nickname'];?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <div class = "all_info">
      <?php foreach($data as $list): ?>
          <?php
          if($list['sex'] == 'Female') {
              $sx = 'woman.png';
          }
          else{
              $sx = 'man.png';
          }
          ?>
          <div class = "info_block">
            <img src='../../assets/img/<?php echo $sx; ?>'>
            <span class = "span_nickname"> <?php echo $list['nickname'];?></span>
            <span class = "span_name_record"><img src='../../assets/img/title.png'> <?php echo $list['name_record'];?></span></br></br>
            <span class = "span_record"><?php echo $list['record'];?></span>
          </div>
          <hr>
      <?php endforeach; ?>
    </div>

  </div>
</section>
