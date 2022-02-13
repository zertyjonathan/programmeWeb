<div id="" class="login">
  <?php if ($_GET['app'] || !$_GET['app']) { ?>
    <h1 class="title">Login User</h1>
    <form action="<?=_HTTP_PATH_BASE_.'/?app=login'?>" method="post">
    <div class="form-group">
      <label for="" class="login-label">
        identifiant
      </label><br>
      <input type="email" name="login" id="" placeholder="Your login">
    </div>
    <div class="form-group">
      <label for="">pwd</label><br>
      <input type="password" name="password" id="" placeholder="XXXXXXXXXXXXXXXXXX">      
    </div>
     <div class="form-submit">
       <a href="#">Forget pwd ?</a>
        <button type="submit" class="submit">Login</button>
     </div>      
    </form>
  <?php } else if ($_POST['app']) { ?>
    <p>*Hello Login</p>
  <?php } ?>
</div>