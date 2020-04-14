<html>

<head>
    <title>user login and sign up</title>
    <link rel="stylesheet" type="type/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
    body {
    margin: 0;
    padding: 0;
    background: #efefef;
    font-size: 16px;
    color: white;
    font-family: sans-serif;
    font-weight: 300;
}

#login-box {
    position: relative;
    margin: 5% auto;
    height: 400px;
    width: 600px;
    background: black;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}

.left-box {
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
}

h1 {
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
}

input[type="text"],
input[type="password"] {
    display: block;
    color: #000000;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

input[type="submit"] {
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
    background: #ff5722;
    transition: 0.2s ease;
}
.submit {
    padding: 10px 20px;
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
}
.submit:hover{
    background: #ff5722;
    transition: 0.2s ease;
    text-decoration: none;
}

.right-box {
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
    background-image: url(/images/bg.jpg);
    background-size: cover;
    background-position: center;
}

.or {
    position: absolute;
    top: 180px;
    left: 280px;
    width: 40px;
    height: 40px;
    color: black;
    background: #efefef;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    line-height: 40px;
    text-align: center;
}

.right-box .signinwith {
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}

button.social {
    margin-bottom: 20px;
    width: 220px;
    height: 36px;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
}

.facebook {
    background: #32508e;
}

.twitter {
    background: #55acee;
}

.google {
    background: #dd4b39;
}

#one.button {
    border-radius: 4px;
    background-color: red;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 20px;
    padding: 10px;
    width: 100px;
    margin: 5px;
}

.footer {
    position: bottom;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 400px;
    color: white;
}

.p {
    text-align: center;
    color: white;
}

.footer .footer-bottom {
    background-color: darkslategrey;
    height: 50px;
    text-align: center;
    position: relative;
    bottom: 0px;
    left: 0px;
    padding-top: 20px;
    width: 100%;
}

.navbar {
    background-color: #000000;
}

.jumbotron {
    background-size: 500%;
    background-repeat: no-repeat;
    color: white;
    background-attachment: fixed;
    background-size: cover;
    background-color: #000000;
}


    </style>
</head>
<body style="background-image: url('hero.jpg');  background-size: cover;">
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Chai Time</a>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="login-box">
        <div class="left-box">
            <br>
            <br>
            <div class="row">
            <div class="col-md-6 login-left">
                <h2> Sign.In</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p>Not register yet? Sign up..</p>
                   <a href="signup.php"> <button class="btn btn-primary">Sign up</button></a>
            </div>
        </div>
        </div>
        <div class="right-box">
            <span class="signinwith">Sign in with<br/>Social Network     </span>

            <button class="social facebook">Log in with Facebook</button>
            <button class="social twitter">Log in with Twitter</button>
            <button class="social google">Log in with Google+</button>


        </div>
        <div class="or">OR</div>
    </div>

</body>

</html>