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


        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 5s;
            animation-name: fade;
            animation-duration: 5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
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


    </style>
    <script type="text/javascript">
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
    </script>
</head>
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
<div id="body"></div>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 6</div>
        <img src="images/jojo rabbit.jpg" style="width:1000px;height:600px " align="center">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 6</div>
        <img src="images/the witcher.jpg" style="width:1000px; height:600px">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 6</div>
        <img src="images/wonderwomen.jpg" style="width:1010px; height:600px">
    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
        <img src="images/mac and devin.jpg" style="width:1010px; height:600px">
    </div>
    <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
        <img src="images/hoc.jpg" style="width:1010px; height:600px">
    </div>
    <div class="mySlides fade">
        <div class="numbertext">6 / 6</div>
        <img src="images/MV5BOTI5OTI0YTQtM2UxNC00MjMxLWE5NjQtZWIzNGRhZTlmMjdhXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" style="width:1010px; height:600px">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>
<br>
<br>
<h1>Trending</h1>
<div class="wrapper">
    <section id="section1">
        <a href="#section3" class="arrow__btn">‹</a>
        <div class="item">
            <img src="https://occ-0-1567-1123.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABRvngexxF8H1-OzRWFSj6ddD-aB93tTBP9kMNz3cIVfuIfLEP1E_0saiNAwOtrM6xSOXvoiSCMsihWSkW0dq808-R7_lBnr6WHbjkKBX6I3sD0uCcS8kSPbRjEDdG8CeeVXEAEV6spQ.webp"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABZEK-7pZ1H5FD4cTyUb9qB_KeyJGz5p-kfPhCFv4GU_3mbdm8Xfsy4IBchlG9PFNdGff8cBNPaeMra72VFnot41nt0y3e8RLgaVwwh3UvyM2H2_MkmadWbQUeGuf811K7-cxJJh7gA.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABdYtAqj8CyaJTWq5taD8Ro_UgwH3nne9QpFGVps-2J3IG-leqrfqXFii4jzZn48nPYTkrlwKQEV0R7_cEKlYBPRzdKqNODc-Oz26IL3LlLgFboXibIWXwxzeYxzuqn0I9TpARjeByw.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABbcCX42tsqGbBvO2y9CQv5-7QvYbCfoHtXsuc6NPCtZaKa4l4fBX3XWvUwG9F2A3CTsNpHVmulxBbdXKwK8Q6xGjejd9FoadGkZ7CnGrSl601TOQjzSHJ23NuIPC8j0QMGORL4uRIA.jpg"/>
        </div>
        <a href="#section2" class="arrow__btn">›</a>
    </section>
    <section id="section2">
        <a href="#section1" class="arrow__btn">‹</a>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABVopDZ5Fy9_fk_HO5WxHTXKKjKhtWFupbSjuvPwfLK_vytzon4EwRUdGgYJ34JwPxOTK_NkV3aXfkULMB0Dcct-FyfqzH-X44VXuRMp4QeBHlvKwWeZFpZlGdItPzmmg4scmwhG7SQ.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABTOj1-116yVcgKWMU2dI3GFR4x0fSkiGsqtLLeLUxRR7STaksjAqBTrYlTfrB8nIGnGvXksi0ewXAhVGg6-pLxpFOIfcpjK-pf8D5xehFZo5a6vJbo4L0AGbrzglbyUoq255QBJgRQ.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABd3IBDpxbRcHXvRMFCZeKa2aHLU1P4SJtrACMS9om3yhLjqPlvNlmR_fypPxjtbsbnKaC4JZhPSpDG4r_kdxSHHAltWguMcCB-1Y1OShr2zWfUv7Whf_39fNH5ZJ3_0gxQrs0akmQjQz44_LT7jXH5LMZ7iMBAzac5IEj4m7Fn_5OWEGYnVsDsKG-QTommDooULMDF9bEw.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABXSd7bhDddcwkq9XpksoQFCHVx29Sxl_h4hb2n3F2GIt32a4XWcOnctQfgnT5qdolv8UML6_xNB5CJ89h56wueb13mYmEBr0sx5e9iLPdtVcOQAOmKXKWHHXwFvJuCUwuNnL3s8eAQwqLXPVMHMEsujM684rUGrZNF2btN2GRy5-RyEslsxZO93V2Q_H2bWs8A8oayt1h5M.webp"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABbXWODpAWqVXcmmjMA7K-2mPkQpvwCLfSdeyhVXzR8A3MSpdSEnnjf4HEJJTYC-TnktU6njTUGAxmzWEYCaJbk4v_ZeL-7QGzmkvYBjg_N-evr2XmcX-Fanoyvu_nimFP4iigPe4O3Vr_WcgplhwkDrJwPUJa84wRLrNAx3TufN5V7cWRP4indqu5HQahvgFEqfL9zjp4g.jpg"/>
        </div>
        <a href="#section3" class="arrow__btn">›</a>
    </section>
    <section id="section3">
        <a href="#section2" class="arrow__btn">‹</a>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABRr4YxdaABuAuH_3FmSQZn7BCvLp-UUPsXE9MiYpvFP3CSUHV2zOew5oVqKqqdaOd3tbFVS0Uf67uIs7_eZydlCghg4nK0nMatRpPImABwTOhnNzCLCxdKrua7pPIcPCZqBYTeAO5g.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABTyWK1MKaw8GcObtz47R2Tj7wkLJ7qQu9tk6TVpcoyxpzD4B-zZ569bQ5vGrREBL-MWFkGilXUwy7tCDaj2XOGkUB4RsbbFAmp9NgSr6lygMpUGNHSlyfrFbUORsRkrxSIoh_ggOvg.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABY7NwkWEJIfXsn6t3Li4bGSCQ1nEErPisI5ZZtXlC-_VRBZOUrhWK5X3vt3t6SR_cpgVhCwxgQqFFDJhk62Kk8hawOnYGZMr0LKeLczMFV2zalCFjkcdLksvT4HB2LEi6LFyruyk3Uu0LmNGsHfC2A8Bly60smr_3sDbz4RruXcklPOG1qYq9wUVu3zfaiwNvqmG4b8aFA.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABemXHOga9feFnOux6I2YyACBD94wvM7N3vcTGIfMpQ_BcaXeoeM9XyzdVdamKtxt0SHXZfvsl6czcp3E48tXMLtHBxuQsh1BjHtPGgJDZ81je_FjItINiqzLtir0A30s_e4KR8G3d7AYAPDjZVOY97bNpzNqtkcHcGp7fGnJByVCps1uLfG9U9tK3Ma1A_3JbRt0NiT2_Q.jpg"/>
        </div>
        <div class="item">
            <img src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABVxuRB932hvre-XP0gh6ar5ztoR3Oe3QjKHkyvcDnRak2MKXOrx5H7mFQSvggefMFOppwEs7ZCCpiqrJ_CYGvtvYB9NpU4SWUtNO6uV2u-DTID267AcHjHcGvGBQJ1ufddDkxcGOZyi5MlOQ5QUmBun4652FbYUnib3zMYQDgcna_Pvz8y_HO5fbokxezrRR1JZAAiqFSQ.jpg"/>
        </div>
        <a href="#section1" class="arrow__btn">›</a>
    </section>
</div>
<br>
<h1>TV Programmes</h1>
<div class="wrapper">
    <section id="section4">
        <a href="#section6" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/breaking bad.jpg" style=" width:300px; height:250px" />
        </div>
        <div class="item">
            <img src="images/GOT.jpg" style=" width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/friends.jpg" style=" width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/the witcher.jpg" style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/naagin.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section5" class="arrow__btn">›</a>
    </section>
    <section id="section5">
        <a href="#section4" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/black mirror.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/MV5BOTI5OTI0YTQtM2UxNC00MjMxLWE5NjQtZWIzNGRhZTlmMjdhXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/peaky blinders.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/altered carbon.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/hoc.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section6" class="arrow__btn">›</a>
    </section>
    <section id="section6">
        <a href="#section5" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/sherlock.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/stranger things.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/the office.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/twd.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/narcos.jpeg"style="width:300px; height:250px"/>
        </div>
        <a href="#section4" class="arrow__btn">›</a>
    </section>
</div>
<br>
<h1>Movies</h1>
<div class="wrapper">
    <section id="section7">
        <a href="#section9" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/avengers.jpeg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/parasite.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/joker.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/hera pheri.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/mac and devin.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section8" class="arrow__btn">›</a>
    </section>
    <section id="section8">
        <a href="#section7" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/john wick.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/pineapple express.png"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/project x.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/dictator.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/spiderman.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section9" class="arrow__btn">›</a>
    </section>
    <section id="section9">
        <a href="#section8" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/jajantram.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/dirty grandpa.jfif"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/jojo rabbit.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/wonderwomen.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/polar.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section7" class="arrow__btn">›</a>
    </section>
</div>
<br>
<h1>Animated</h1>
<div class="wrapper">
    <section id="section10">
        <a href="#section12" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/the simpsons.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/adventure time.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/chota bheem.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/rick and morty.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/naruto.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section11" class="arrow__btn">›</a>
    </section>
    <section id="section11">
        <a href="#section10" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/dragon ball z.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/family guy.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/samurai jack.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/fullmetal.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/aot.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section12" class="arrow__btn">›</a>
    </section>
    <section id="section12">
        <a href="#section11" class="arrow__btn">‹</a>
        <div class="item">
            <img src="images/phineas and ferb.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/demon slayer.png"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/my hero.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/seven deadly sins.jpg"style="width:300px; height:250px"/>
        </div>
        <div class="item">
            <img src="images/death note.jpg"style="width:300px; height:250px"/>
        </div>
        <a href="#section10" class="arrow__btn">›</a>
    </section>
</div>
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