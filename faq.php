<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQ</title>
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
    <link href="src/carousel.css" rel="stylesheet">
    <style type="text/css">
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
            font-size: 15px;
            padding: 8px;
            width: 100px;
            margin: -20px 10px -90px 660px;
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
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
            position: sticky;
            top: 0;
        }
        
        li {
            float: left;
            display: inline;
            color: #666;
        }
        
        li a {
            display: block;
            color: red;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
            font-family: verdana;
        }
        
        h1 {
            font-family: Arial;
            color: white;
            text-align: left;
        }
        
        div.gallery {
            border: 1px solid #ccc;
        }
        
        div.gallery:hover {
            border: 1px solid #777;
        }
        
        div.gallery img {
            width: 100%;
            height: auto;
        }
        
        div.desc {
            padding: 15px;
            text-align: center;
        }
        
        * {
            box-sizing: border-box;
        }
        
        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }
        
        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }
        
        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }
        
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  background-color: #000;
}

h1 {
  font-family: Arial;
  color: white;
  text-align: left;
}

.wrapper {
  display: grid;
  grid-template-columns: repeat(3, 100%);
  overflow: hidden;
  scroll-behavior: smooth;
}
.wrapper section {
  width: 100%;
  position: relative;
  display: grid;
  grid-template-columns: repeat(5, auto);
  margin: 20px 0;
}
.wrapper section .item {
  padding: 0 2px;
  transition: 250ms all;
}
.wrapper section .item:hover {
  margin: 0 40px;
  transform: scale(1.2);
}
.wrapper section a {
  position: absolute;
  color: #fff;
  text-decoration: none;
  font-size: 6em;
  background: black;
  width: 80px;
  padding: 20px;
  text-align: center;
  z-index: 1;
}
.wrapper section a:nth-of-type(1) {
  top: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(-90deg, rgba(0, 0, 0, 0) 0%, black 100%);
}
.wrapper section a:nth-of-type(2) {
  top: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, black 100%);
}

@media only screen and (max-width: 600px) {
  a.arrow__btn {
    display: none;
  }
}
.sansserif {
  font-family: Arial, Helvetica, sans-serif;
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
    <br>
    <br>
    <br>
    <br>
    <br>
 <h1 align="center"><b>Frequently Asked Questions</b></h1>
 <br>
 <h2  style="color:white"; class="sansserif">What is Chai Time?</h2>
 <p  style="color:white;" class="sansserif">Chai Time is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries and more on thousands of internet-connected devices.
    <br>
    You can watch as much as you want, whenever you want, without a single ad – all for one low monthly price. There's always something new to discover, and new TV shows and movies are added every week!
</p>
<br>
<h2  style="color:white"; class="sansserif"> How much does Chai Time cost?</h2>
<p  style="color:white"; class="sansserif">Watch Chai Time on your smartphone, tablet, smart TV, laptop or streaming device, all for one low fixed monthly fee. Plans start from ₹ 199 a month. No extra costs or contracts.</p>
<br>
<h2  style="color:white"; class="sansserif">Where can I watch?</h2>
<p style="color:white"; class="sansserif">Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Chai Time account to watch instantly on the web at Chaitime.com from your personal computer or on any internet-connected device that offers the Chai Time app, including smart TVs, smartphones, tablets, streaming media players and game consoles.

You can also download your favourite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Chai Time with you anywhere.</p>
<br>
<h2  style="color:white"; class="sansserif">What can I watch on Chai Time?</h2>
<p  style="color:white"; class="sansserif">Chai Time has an extensive library of feature films, documentaries, TV shows, anime, award-winning Chillflix originals, and more. Watch as much as you want, anytime you want.</p>


 
     
        <div class="clearfix"></div>

    </div>
    <br>
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