<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <!-- Font awesome icon (links) -->
    <link rel="stylesheet" href="fontAwesome_files/fontawesome.css" />
    <script src="fontAwesome_files/fontawesome.js"></script>
    <!-- Google fonts (link) -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700&family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <title>Swinging with the CyberSaints Fundraiser</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include("./view/header.php"); ?>
    
    <div class="container-f">

        <div class="fund-row1">

                <img src="images/golf-art.jpg" alt="golf-art" id="golf-art">

                <div class="info1">

                    <p class="info" id="text1">Our Lady of the Lake CyberSaints</p>
                    <img src="images/presents.png" alt="presents" class="info" id="presents">
                    <p class="info" id="text3">First Annual</p>
                    <hr class="line">
                    <p class="info" id="text4">Swinging with the CyberSaints</p>
                    <p class="info" id="text5">Fundraiser</p>

                    <a href="register.php" class="info">
                        <button type="button" class="button" id="register">
                            <span class="button__text" id="text6">Register</span>
                        </button>
                    </a>

                    <hr class="line">

                </div>

        </div>

        <div class="section2">
            <div class="info2">
                <img src="images/date.jpg" alt="date" class="paint" id="date">
                <img src="images/time.jpg" alt="time" class="paint" id="time">
            </div>
            <div class="info2">
                <img src="images/location.jpg" alt="location" class="paint" id="location">
                <img src="images/price.jpg" alt="price" class="paint" id="price">
            </div>
        </div>

    </div>

    <div class="image">
        <div class="image-overlay">
            
            <div class="section3">

                <h3 id="included">What's Included?</h3>

                <div class="row">
                    <div class="col" id="f-section3">
                        <div class="row">
                            <h4 class="sub-title">3 Hours of Golf</h4>
                            <p class="sub-text3">You and your team have a reserved weather-proof hitting bay equipted with comfortable seats, tables, heaters, and TVs.</p>
                        </div>
                        <div class="row">
                            <h4 class="sub-title">Rise & Shine Buffet</h4>
                            <p class="sub-text3">Scrambled eggs, Applwood smoked bacon, Sausage links, French toast with maple syrup & whipped butter, Tater tots, Fresh seasonal fruit, Assorted breakfast muffins, Coffee, Hot tea & Orange juice</p>
                        </div>
                        <div class="row">
                            <h4 class="sub-title">Event Room</h4>
                            <p class="sub-text3">We have a reserved event room for our guests to eat, drink, and socialize. The event room is filled with plenty of TVs to watch college football.</p>
                        </div>
                        <div class="row">
                            <h4 class="sub-title">Prizes</h4>
                            <p class="sub-text3" >Prizes will be available for the winning teams</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="container-f">

        <h3 id="t-rules">Tournament Rules</h3>

        <!-- <div class="row"> -->
            <div class="col" id="f-section4">
                <div class="row">
                    <img src="images/golf-tee.jpg" alt="golf-tee" class="golf-tee">
                    <p class="sub-text4">Each team will consist of 6 competitors. Players earn points by hitting a target on the driving range. The team takes the highest score of the highest scoring individual for each shot.</p>
                </div>
                <div class="row">
                    <img src="images/golf-tee.jpg" alt="golf-tee" class="golf-tee">
                    <p class="sub-text4">For Example - If Player A scores 16 points and Player B score 20 points on any given shot, then the team will earn 20 points for that one shot.</p>
                </div>
                <div class="row">
                    <img src="images/golf-tee.jpg" alt="golf-tee" class="golf-tee">
                    <p class="sub-text4">Each game will consist of 20 shots for each player. The team with the highest score wins that game. The tournament will consist of two rounds of 20 shots.</p>
                </div>
            </div>
            <img src="images/golfer.PNG" alt="golfer" class="f-golfer">
        <!-- </div> -->

        <a href="register.php" class="register2">
            <button type="button" class="button" id="register">
                <span class="button__text" id="text6">Register</span>
            </button>
        </a>

    </div>
    
    <?php include("./view/footer.php"); ?>
</body>
</html>