<section>
  <!-- Start info_body -->
  <div class = "info_body">
    <!-- Start all_users -->
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
        <!-- Start users_right_block -->
        <div class = "users_right_block">
          <img src='../../assets/img/<?php echo $sx; ?>'>
          <span class = "span_name"> <?php echo $user['name'];?> - </span>
          <span class = "span_nickname"> <?php echo $user['nickname'];?></span>
        </div>
        <!-- End users_right_block -->
      <?php endforeach; ?>
    </div>
    <!-- End all_users -->
    <!-- Start all_info -->
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
          <!-- Start all_info -->
          <div class = "info_block">
            <img src='../../assets/img/<?php echo $sx; ?>'>
            <span class = "span_nickname"> <?php echo $list['nickname'];?></span>
            <span class = "span_name_record"><img src='../../assets/img/title.png'> <?php echo $list['name_record'];?></span></br></br>
            <span class = "span_record"><?php echo $list['record'];?></span>
          </div>
          <!-- End info_block -->
          <hr>
      <?php endforeach; ?>
    </div>
    <!-- End all_info -->
  </div>
  <!-- End info_body -->
</section>
