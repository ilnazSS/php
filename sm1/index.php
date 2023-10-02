<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<form method="POST" name="reg">
        <input type="text" name="name" placeholder="имя"><br>
        <input type="text" name="email" placeholder="фамилия"><br>
        <?php if(isset($er_email)){ echo $er_email; } ?>
        <input type="number" name="phone" placeholder="номер"><br>
        <?php if(isset($er_phone)){ echo $er_phone; } ?>
        <input type="submit" name="reg">

    </form>
    <?php

    if(isset($_POST['reg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }
     function reg($name, $email, $phone){
        if(empty($name)){
            $er_name = 'Введите имя';
            return $er_name;
        }else{
            return $name;
        }
        if(empty($email)){
            return $er_email = 'Введите email';
        }else{
            return $email;
        }
        if(empty($phone)){
            return $er_phone = 'Введите номер телефона';
        }else{
            return $phone;
        }
        }
        echo reg();
         // function name($name){
    //     if(empty($name)){

    //     }
    // }
    ?>
</body>
</html>