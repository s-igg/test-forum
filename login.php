<?php
include 'inc/header.php';

if(isset($_POST['login'])){
    LoginUser();
}
if (isset($_SESSION['username'])) {
    header('Location:/____/');
}
?>
<form action="login.php" method='post'>
        <input type="text" name="username" id="" placeholder="Username" require>
        <input type="password" name="password" id="" placeholder="Password" require>
        <input type="submit" name='login' value="Log In">
        <a href="reg.php">Registrate here!</a>
    </form>
</html>