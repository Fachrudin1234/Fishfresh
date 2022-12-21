<?php

@include 'config.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['user']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['konfirmasi']);

$select = " SELECT * FROM accoun WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

    $error[] = 'user already exist!';

}else{

    if($pass != $cpass){
        $error[] = 'password not matched!';
    }else{
        $insert = "INSERT INTO accoun (user, email, password) VALUES('$name','$email','$pass')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }
}

};
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="signup.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <img src="logonav.png" alt="" class="logonav">
        <div class="logtexs">FishFresh</div>
        <div>
            <ul class="menu_navbar">
                <li class="navlist"><a class="active menu" href="#">Home</a></li>
                <li class="navlist"><a href="#" class="menu">Flash Sale</a></li>
                <li class="navlist"><a href="#" class="menu">Suplier</a></li>
            </ul>
        </div>
        <div>
            <ul class="menu_navbar">
                <li class="navlist"><a href="" class="singup1">Sign Up</a></li>
                <li class="navlist"><a href="login.php" class="login1 menu2">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="emr1">
    <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    </div>
    <div class="div_boxsignup">
        <div class="card_sigup">
            <form action="" method="post">
                <label class="reg_teks">Pembeli</label><br>
                <input class="inp_reg inp_reg2" name="user" type="text" required placeholder="User Name"><br>
                <input class="inp_reg" name="email" type="email" required placeholder="Email"><br>
                <input class="inp_reg" name="password" type="password" required placeholder="Password"><br>
                <input class="inp_reg" name="konfirmasi" type="password" required placeholder="Konfirmasi"><br>
                <input class="btn_submid" name="submit" type="submit" value="SIGN UP">
            </form>
        </div>
    </div>
    <div class="narbar_bawah">
        <ul>
            <li class="lnb"><a href="#">About US</a></li>
            <li class="lnb"><a href="#">Contact</a></li>
        </ul>
    </div>
</body>



</html>