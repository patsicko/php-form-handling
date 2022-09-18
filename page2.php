



  <div class="form  container-sm  pt-8" >
  <form action="index.php" method="POST">
      <?php
      include("components/log.php");
      ?>

    <form-group><label for="">name</label><input class="form-control" type="text" name="name" id=""></form-group> <br>
    <form-group><label for="">email</label><input class="form-control" type="text" name="email" id=""></form-group> <br>
    <form-group><label for="">password</label><input class="form-control" type="password" name="password" id=""></form-group> <br>
    <form-group><label for="">repeat password</label><input class="form-control" type="password" name="confirm" id=""></form-group> <br>

<?php 
require("components/btn/btn.php");
?>

</form>
  </div>  

