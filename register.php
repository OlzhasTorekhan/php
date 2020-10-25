
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
     <?php
     require('connect.php');

     if(isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $phone_number = $_POST['phone_number'];
        $city = $_POST['city'];
        $branch = $_POST['branch'];

        $query = "INSERT INTO users(name, surname, email, password, phone_number, city, branch) 
        VALUES ('$name', '$surname', '$email', '$password', '$phone_number', '$city', '$branch')";
        $result = mysqli_query($connection, $query);

        if($result){
            $smsg = "Регистрация прошла успешно";
            header('Location: login.php'); 
        }
        else{
            $fmsg = "Произошла ошибка";
        }
     }
     ?>
<div class="container-fluid text-center">
    <form class="form-signin" method="POST">
          <div class="h3 mb-3">Регистрационная форма</div>
    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php } ?>
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?> </div><?php } ?>
        <div class="form-group">
          <div class="col-xs-12">Имя</div>
                <div class="col-xs-12">
                <input type="name" class="form-control" placeholder="Ваше имя" name="name"required>
                </div>
            </div>
            <div class="form-group">
            <div class="col-xs-12">Фамилия</div>
                <div class="col-xs-12">
                <input type="surname" class="form-control" placeholder="Ваша фамилия" name="surname"required>

                </div>
            </div>
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
            <div class="form-group">
            <div class="col-xs-12">Телефон</div>
                <div class="col-xs-12">
                <input type="phone_number" class="form-control" placeholder="Ваш номер телефона" name="phone_number"required>
                </div>
            </div>
            <div class="form-group">
            <div class="col-xs-12">Город</div>
                <div class="col-xs-12">
                <input type="city" class="form-control" placeholder="Ваш город" name="city"required>
                </div>
            </div>
            <div class="form-group">
            <div class="col-xs-12">Отрасль</div>
                <div class="col-xs-12">
                <input type="text" class="form-control" placeholder="Ваша отрасль" name="branch"required>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Отправить">Регистрация</button>
    </form>
    </div>
</body>
</html>