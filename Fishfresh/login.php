<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="css2.css">
<script src="JS1.js" defer></script>

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
                <li class="navlist"><a href="#" class="menu">Supliyer</a></li>
            </ul>
        </div>
        <div>
            <ul class="menu_navbar">
                <li class="navlist"><a href="signup.php" class="singup1">Signup</a></li>
                <li class="navlist"><a href="" class="login1 menu2">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="div_boxlogin">
        <div class="div_logo">
            <img class="logo1" src="logo.svg" alt="">
        </div>
        <div class="login_container">
            <div class="wrapper">
                <div class="title-text">
                    <div class="title login">Login Pembeli</div>
                    <div class="title signup">Login Penjual</div>
                </div>
                <div class="form-container">
                    <div class="slide-controls">
                        <input type="radio" name="slide" id="login" checked>
                        <input type="radio" name="slide" id="signup">
                        <label for="login" class="slide login">Pembeli</label>
                        <label for="signup" class="slide signup">Penjual</label>
                        <div class="slider-tab"></div>
                    </div>
                    <div class="form-inner">
                        <form action="#" class="login">
                            <div class="field">
                                <input type="text" placeholder="Email Address" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div class="pass-link"><a href="#">Forgot password?</a></div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Login">
                            </div>
                            <div class="signup-link">Not a Accoun? <a href="signup.php">Signup now</a></div>
                        </form>
                        <form action="#" class="signup">
                            <div class="field">
                                <input type="text" placeholder="Email Address" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div class="pass-link"><a href="#">Forgot password?</a></div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Login">
                            </div>
                            <div class="signup-link">Not a Accoun? <a href="">Signup now</a></div>
                        </form>
                    </div>
                </div>
            </div>
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