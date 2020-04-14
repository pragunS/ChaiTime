<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chill-Flix home</title>
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



@media only screen and (max-width: 600px) {
  a.arrow__btn {
    display: none;
  }
}
    </style>
</head>

<body>
 <body style="background-image: url('hero.jpg');  background-size: cover;">
            <div id ="container">
                <img src="images/chai-time-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-184761-1526642976.webp" height="60" width="200" style="float: left">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tvprogramme.php">TV Programmes</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="animated.php">Animated</a></li>
                    <li><a href="trending.php">Trending</a></li>
                    <li><a href="logout.php"><button id="one"class="button">Log out</button></a></li>

        </ul>
    </div>
    <br>
    <br>
    <br>
 <h1>TV Programmes</h1>
 <div class="wrapper">
  <section id="section4">

    <div class="item">
    <a href="breakingbad.php"><img src="images/breaking bad.jpg" style=" width:280px; height:230px" /></a>
  </div>
    <div class="item">
    <a href="GOT"><img src="images/GOT.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="friends.php"><img src="images/friends.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="thewitcher.php"><img src="images/the witcher.jpg" style="width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="naagin.php"><img src="images/naagin.jpg"style="width:280px; height:230px"/></a>
  </div>
</section>
</div>
  <br>
   <div class="wrapper">
  <section id="section4">
   <div class="item">
    <a href="blackmirror.php"><img src="images/black mirror.jpg" style=" width:280px; height:230px" /></a>
  </div>
    <div class="item">
    <a href="moneyheist.php"><img src="images/MV5BOTI5OTI0YTQtM2UxNC00MjMxLWE5NjQtZWIzNGRhZTlmMjdhXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="peakyblinders.php"><img src="images/peaky blinders.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="alteredcarbon.php"> <img src="images/altered carbon.jpg" style="width:280px; height:230px"/> </a>
  </div>
    <div class="item">
    <a href="houseofcards.php"> <img src="images/hoc.jpg"style="width:280px; height:230px"/> </a>
  </div>
</section>
</div>
 <br>
   <div class="wrapper">
  <section id="section4">
   <div class="item">
   <a href="sherlock.php"><img src="images/sherlock.jpg" style=" width:280px; height:230px" /></a>
  </div>
    <div class="item">
    <a href="strangerthings.php"><img src="images/stranger things.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="theoffice.php"><img src="images/the office.jpg" style=" width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="thewalkingdead.php"> <img src="images/twd.jpg" style="width:280px; height:230px"/></a>
  </div>
    <div class="item">
    <a href="narcos.php"> <img src="images/narcos.jpeg"style="width:280px; height:230px"/></a>
  </div>
</section>
</div>

     
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
</body>
</html>
