<?php
//function to input header
function writeHead($title) {
//start header text heredoc
$headText = <<<HTML
    <!Doctype html>
    <html lang="en">
    <head>
        <title>$title</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="amanda.css">
        <meta name="description" content="Custom website developer and UI/UX">
        <meta name="keywords" content="website developer, c">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="amanda.js" type="text/javascript"></script>
        <script></script>
    </head>
    <body>
    <div id="wrapper">
        <!-- mobile button-->
        <div id="nav" class="hamNav">
            <nav>
                <div class="menu-btn" id="menu-btn">
                    <div></div>
                    <span class="bar top"></span>
                    <span class="bar middle"></span>
                    <span class="bar bottom"></span>
                </div>
                <div class="dropdownNav">
                    <ul>
                        <li class="nav"><a href="index.php">Home</a></li>
                        <li class="nav"><a href="#portfolio">Portfolio</a></li>
                        <li class="nav"><a href="#about">About</a></li>
                        <li class="nav"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <header>
            <h2 class="headertext">I build beautiful and elegant websites that are</h2>
            <h2 class="headertext2"><span class="titleScroll2">out of this world.</span></h2>
            <img src="images/headerTest2.jpg">
            <div id="arrow" class="arrow"></div>
        </header>
HTML;
echo $headText;
}
function writeFoot() {
    $footText = <<<HTML
        <footer>
            <div class="footer">
                <p>copyright &#169; Amanda Mayfield</p>
            </div>
        </footer>
    </div>
    </body>
    </html>
HTML;
echo $footText;
}
?>