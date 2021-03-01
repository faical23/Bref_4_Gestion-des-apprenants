<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body class="body_login">
    <header>
        <div class="container">
            <div class="navbar">
                    <div class="logo_navbar">
                        <h3 class="logo">You<span>code</span></h3>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PROFIL</a></li>
                            <li><a  href="#" class="active">LOGIN</a></li>
                            <li><a href="#">CONTACT US</a></li>
                        </ul>
                        <div id="burgger_menu_of" onclick="burger_click()">
                            <div id="lin_1_burger"></div>
                            <div id="lin_2_burger"></div>
                            <div id="lin_3_burger"></div>
                        </div>
                    </div>
            </div>
        </div>
    </header>
    <div id="navbar_zone">
        <div id="navbar_mobile">
                    <a  href="#">HOME</a>
                    <a  href="#">PROFIL</a>
                    <a  href="#">LOGIN</a>
                    <a  href="#">CONTACT US</a>

        </div>
    </div>
    <section class="login_hero">
        <div class="container">
            <div class="form_and_centent">
                <div class="content">
                    <h1>Feel free to connect
                        with you YOUCODE 
                        account
                        </h1>
                </div>
                <div class="zon_form">
                    <form action=""  method="POST">
                        <h3>Sign up</h3>
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <button class="" name="btn_login">Login</button>
                        <P>Forgot password?</P>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>