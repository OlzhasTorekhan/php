
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
</head>
<body>

<div class="container-fluid text-center">
    <form class="form-signin" method="POST">
          <div class="h3 mb-3">Авторизация</div>
    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php } ?>
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fsmg; ?>Ошибка </div><?php } ?>
        <div class="form-group">
            <div class="form-group">
            <div class="col-xs-12">E-mail адрес</div>
                <div class="col-xs-12">
                <input type="email" class="form-control" placeholder="Ваш E-mail адрес" name="email"required>
                </div>
            </div>
            <div class="form-group">
            <div class="col-xs-12">Пароль</div>
                <div class="col-xs-12">
                <input type="password" class="form-control" placeholder="Ваш пароль" name="password"required>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Отправить">Войти</button>
    </form>
    </div>
    <?php
    session_start();
     require('connect.php');

     if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            $_SESSION['email'] = $email;

        } else{
            $fmsg = "Произошла ошибка"; 
            header('Location: template/qanda.php');
        }

     if(isset($_SESSION['$email'])) {
        $email = $_SESSION['$email'];        
        echo "Вы вошли";
        echo "<a href='qanda.php' class='btn btn-lg btn-primary' > Logout </a>";
    } 
}
     ?>
</body>
</html>