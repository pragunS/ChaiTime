<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chai Time home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
        }
        
        .a {
            font-family: Arial;
            color: white;
        }
        
        #one.jumbotron {
            background-size: 500%;
            background-repeat: no-repeat;
            color: white;
            background-attachment: fixed;
            background-size: cover;
            padding-top: 18%;
            padding-bottom: 18%;
        }
        
        .jumbotron {
            background-size: 500%;
            background-repeat: no-repeat;
            color: white;
            background-attachment: fixed;
            background-size: cover;
            background-color: #000000;
        }
        
        .col-sm-4 {
            border: 1px solid white;
            color: white;
        }
        
        .navbar {
            background-color: #000000;
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
        
        .button {
            border-radius: 4px;
            background-color: red;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 25px;
            padding: 10px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        
        .button:hover span {
            padding-right: 25px;
        }
        
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        
        .footer {
            position: bottom;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 400px;
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
    </style>
</head>

<body style="background-image: url('hero.jpg');  background-size: cover;">
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Chai Time</a>
                </div>
                <ul>
                    <li class="active"><a href="signin.php"><button id="one"class="button">Sign in</button></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <div id="one" class="jumbotron text-center" style="background-image: url('bg.jpg');">


        <h1>Chai Time</h1>
        <p>Its time to flex and chill</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <h3>Enjoy Anywhere</h3>
                <p>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more. Utilize our services from any modern-age tech device which can handle surfing on the internet</p>
            </div>

            <div class="col-sm-4">
                <h3>Download and Go</h3>
                <p>Download your shows to watch on the go,Save your data and watch all your favourites offline.</p>
            </div>
            <div class="col-sm-4">
                <h3>Watch everwhere</h3>
                <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="jumbotron text-center">


        <h1>Own Chai Time now</h1>
        <p>Now 1st month free</p>
        <a href=""><button class="button"><span>BUY NOW</span></button> </a>
    </div>
    <br>
    <br><br>
    <br>
    <div class="footer">
        <div class="footer-inner">
            <div class="jumbotron">
                <p>
                    Questions? Call 000-800-040-1843
                </p>
                <br>
                <table style="width:100%">
                    <tr>
                        <td><a href="faq.php">FAQ</a></td>
                        <td><a href="jobs.php">Jobs</a></td>
                        <td><a href="termofuse.php">Term of Use</a></td>
                    </tr>
                    <tr>
                        <td><a href="privacy.php">Privacy</a></td>
                        <td><a href="corporateinfo.php">Corporate Information</a></td>
                        <td><a href="contactus.php">Contact Us</a></td>
                    </tr>
                    <tr>
                        <td><a href="www.fast.com">Speed Test</a></td>
                        <td><a href="legal.php">Legal Notices</a></td>
                        <td><a href="orignal.php">Chai Time Originals</a></td>
                    </tr>
                </table>
                <br>
            </div>
            <div class="footer-bottom">
                &copy; Chai Time India | Designed by The Chai Time Team
            </div>
        </div>
    </div>
</body>

</html>