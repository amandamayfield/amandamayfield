<?php
    require_once 'header.php';
    // variables
    $fname = NULL;
    $lname = NULL;
    $email = NULL;
    $phone = NULL;
    // validates form data
    if(isset($_POST['submit'])) {
        //var_dump($_POST);
        $valid = true;
        // validate first name
        $fname = htmlspecialchars(trim($_POST['fname']));
        if (empty($fname)) {
            $fnameError = "<p class='error'>Please enter your first name.</p>";
            $valid = false;
        }
        // validate last name
        $lname = htmlspecialchars(trim($_POST['lname']));
        if (empty($lname)) {
            $lnameError = "<p class='error'>Please enter your last name.</p>";
            $valid = false;
        }
        $fname = ucfirst(strtolower($fname));
        $lname = ucfirst(strtolower($lname));
        // validate email
        $email = htmlspecialchars(trim($_POST['email']));
        if (empty($email)) {
            $emailError = "<p class='error'>Please enter your email</p>";
            $valid = false;
        }
        // verifies that it's an actual email address
        if (!preg_match('/[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/',$email)) {
            $validError = "<p class='error'>Invalid email address</p>";
            $valid = false;
        }
        $phone = htmlspecialchars(trim($_POST['phone']));
        // verifies phone number
        if (!preg_match('/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$|^\d{10}$/',$phone)) {
            $phoneError = "<p class='error'>Please enter your proper 10 digit phone number.</p>";
            $valid = false;
        }
        // if everything is valid then submit
        if ($valid) {
            header("Location: index.php");
            mail("amandamayfield.designs@gmail.com","Contact from website",$fname." ".$lname." \n Email: ".$email." \n Phone: ".$phone." \n Message: ".$_POST['comments']);
            exit();
        }
    }
    // write head
    writeHead("Amanda Mayfield Designs - UI/UX Design");
?>
    <main>
        <div id="wrapper">
            <div id="services">
                <div class="aboutInfo">
                    <h2>Amanda Mayfield Designs</h2>
                    <p>I build beautiful and elegant websites that are</p>
                    <p><span class="titleScroll">out of this world.</span></p>
                    <h5>Custom designed websites to meet all of your business needs.</h5>
                </div>
                <div class="services hidemehalf">
                    <div class="icon">
                        <img src="images/stars2.png">
                    </div>
                    <h2>Design</h2>
                    <div class="serviceDivide"></div>
                    <p>Every website is personally designed and created by me. I take the overall concept of your business and use it in every design aspect, letting your content guide the layout.</p>
                </div>
                <div class="services hidemehalf">
                    <div class="icon">
                        <img src="images/saturn2.png">
                    </div>
                    <h2>Develop</h2>
                    <div class="serviceDivide2"></div>
                    <p>Responisve development is imperative to make sure your website looks outstanding at all screen sizes. By creating beautiful, fluid layouts, I will give your content its best display.</p>
                </div>
                <div class="services hidemehalf">
                    <div class="icon">
                        <img src="images/rocket2.png">
                    </div>
                    <h2>Deploy</h2>
                    <div class="serviceDivide3"></div>
                    <p>Consistency in your branding across all platforms is key. I help maintain and evolve brands after launch. I'm also available for blog and social media page design.</p>
                </div>
                <div class="skills">
                    <h2>Tools Used</h2>
                    <p>HTML, CSS, SASS, Javascript, jQuery, PHP, MySQL, Wordpress</p>
                </div>
            </div>
            <div id="portfolio">
                <div class="portTitle hidemehalf">
                    <h2>SHOW,</h2>
                    <h3>DON'T TELL</h3>
                    <p>I fully believe looking at my previous work is the best way to assess my skills.</p>
                </div>
            </div>
            <div class="portfolioStart">
                <div class="portfolio hidemehalf">
                    <p>CultureSpace</p>
                    <a href="http://www.culturespaceguru.com/">
                        <img src="images/culturespace.jpg">
                    </a>
                </div>
                <div class="portfolio2 hidemehalf">
                    <p>Pawsitive Delivery</p>
                    <a href="http://patti-bee2.dcccd.edu/Mayfield/project1/index.php">
                        <img src="images/pawsitive.jpg">
                    </a>
                </div>
            </div>
            <div id="reviews">
                <div class="mainReview">
                    <h3>"In just one face-to-face meeting, Amanda understood our business vision and mission. She translated our ideas into a visually stunning website which immediately resulted in a flurry of new business clients."</h3>
                    <p>- Dr. Sherry Dean</p>
                    <p>CultureSpace LLC</p>
                </div>
            </div>
            <div id="about">
                <div class="aboutMe">
                    <h2>ABOUT ME</h2>
                    <p>I orignally graduated from The School of the Art Insitute of Chicago in 2010 with a BFA in Fashion Design. After five years in the industry, I realized it wasn't for me, and I began looking for another way to express my creativity. I stumbled upon Web Design after a friend saw some of my graphic design projects and I decided to go to Brookhaven Community College to take a chance on a class. I fell in love.</p>
                    <p>So, soon to graduate college, this is what I want to do full time! I love the process of taking something from concept to creation, from a simple sketch into a fully responsive, interactive website. I still take elements from the design process in art school and apply them to the science of UI/UX. I love the creative journey each new site takes me on.</p>
                </div>
                <div class="aboutMe2">
                    <img src="images/spaceMe2.jpg">
                </div>
            </div>
            <div id="contact">
                <div class="freelance">
                    <div class="icon2">
                        <img src="images/moon2.png">
                    </div>
                    <h2>Collaborate</h2>
                    <div class="serviceDivide4"></div>
                    <h3>I am currently available for freelance projects.</h2>
                </div>
            </div>
            <div class="contact">
                <div id="form" class="form hidemehalf">
                    <form method="post" action="index.php#contact">
                        <p>
                            <label for="fname">First name:</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                            <?php if(isset($fnameError)) { echo $fnameError;} ?>
                        </p>
                        <p>
                            <label for="lname">Last name:</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                            <?php if(isset($lnameError)) { echo $lnameError;} ?>
                        </p>
                        <p>
                            <label for="email">Email address:</label>
                            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                            <?php if(isset($emailError)) { echo $emailError;} ?>
                            <?php if(isset($validError)) { echo $validError;} ?>
                        </p>
                        <p>
                            <label for="phone">Phone number:</label>
                            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
                            <?php if(isset($phoneError)) { echo $phoneError;}?>
                        </p>
                        <p>
                        <label for="comments">Comments:</label>
                            <textarea name="comments" id="comments"></textarea>
                        </p>
                        <p class="submit">
                            <label for="submit"></label>
                            <button type="submit" name="submit">Let's Collaborate!</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
writeFoot();
?>