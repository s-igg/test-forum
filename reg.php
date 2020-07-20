<?php
include 'inc/header.php';

if(isset($_POST['reg_user'])){
    RegistrateUser();
    $taken = RegistrateUser();
}
if (isset($_SESSION['username'])) {
    header('Location:/____/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method='post'>
        <input type="text" name="username" id="" placeholder="Username" require>
        <input type="password" name="password" id="" placeholder="Password" require>
        <input type="submit" name='reg_user' value="Register">
    </form>
    <?php if(isset($taken)): ?>
    <div><?php echo $taken; ?></div>
<?php endif; ?>
</body>
</html>