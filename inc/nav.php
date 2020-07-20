<script type="text/javascript">
  function DropDown(){
      this.dd = el;
      this.iniEvents();
  }
  DropDown.prototype = {
      iniEvents : function() {
          var obj = this;

          obj.dd.on ('click', function(event){
              $(this).toggleClass('active');
              event.stopPropagation();
          })
      }
  }
</script>
<nav>
    <div>
        <a href="/">
            <img src="img/.webp" alt="" class='logo_img'>
        </a>
    </div>

    <div>
        <input type="search" name="" id="">
        <input type="submit" value="sub">
    </div>

    <div class='some_buttons'>
        <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
            <div id="some_buttons">
                <a href="post_creating.php"><i class="far fa-edit"></i></a>
            </div>
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn"><?php echo $_SESSION['username'] ?></a>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="logout.php" class="logout_class">Log Out</a>
                    </div>
                </li>
            </ul>
        <?php } else{ ?>
            <a href="login.php" class="login_class">Log In</a>
            <a href="reg.php" class="signup_class">Sign Up</a>
        <?php } ?>
    </div>
</nav>
