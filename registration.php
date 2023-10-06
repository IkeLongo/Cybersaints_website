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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <title>Swinging with the CyberSaints Fundraiser</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="registration">

    <?php include("./view/header.php"); ?>

    <div class="col" id="outer">

        <h1>Registration</h1>
        <p>The following page describes the various packages we have available. The descriptions under each category provide a summary of the inclusions within each package. When you are ready, please press the button at the bottom of the page. You will then be redirected to our secure payment portal for checkout. If you have any questions, please do not hesitate to contact Isaac Longoria at 210-730-6232 or Cesar Sanchez at 970-232-0065.</p>

        <div class="col" id="inner">
            <h3>Individual Pay to Play</h3>
            <!-- <p>Individual pay to play allows an individual to purchase a CyberSaints fundraiser ticket for yourself and other players on your team. First, change the amount of tickets you are purchasing in the selected field. Then place your first name, last name, and team name in the corresponding fields. You will then be prompted to add your email and payment information in the following pages. There are no refunds, unless the event were to be canceled.</p> -->
            <ul id=list>
                <li>Each individual ticket is $100.</li>
                <li>You may purchase a single ticket or multiple tickets.</li>
                <li>Specify the number of tickets you want to purchase.</li>
            </ul>
        </div>

        <div class="col" id="inner">
            <h3>Sponsor a Bay</h3>
            <!-- <p>Sponsor a Bay allows an individual or an organization to purchase an entire bay at Top Golf. This includes 6 team members, a laminate sponsorship poster posted outside of your bay, and the option to advertise your business at the event. Each sponsorship is $600. First, change the number of sponsorships you would like to purchase. Then place your first name, last name, and team name in the corresponding fields. You will then be prompted to add your email and payment information in the following pages. There are no refunds, unless the event were to be canceled.</p> -->
            <ul id=list>
                <li>Each sponsorship is $600 per bay.</li>
                <li>You may purchase a single sponsorship or multiple sponsorships.</li>
                <li>Each sponsorship includes a team of 6 players.</li>
                <li>Sponsorship includes acknowledgment and a recognition sign at the event.</li>
                <li>Additionally, sponsors will receive acknowledgment on the CyberSaints website and in a social media post of gratitude.</li>
            </ul>
        </div>

        <div class="col" id="inner">
            <h3>Mulligans</h3>
            <!-- <p>You may choose to purchase mulligan shots for yourself and your team. You may donate mulligan shots to other players if you choose to do so.</p> -->
            <ul id=list>
                <li>A player may re-hit a shot.</li>
                <li>The cost per mulligan is $10.</li>
                <li>You can purchase 5 mulligans for $40.</li>
            </ul>
        </div>

        <a href=# class="">
        <button type="button" class="button" id="payment">
            <span class="button__text" id="payment_text">Payment Portal</span>
        </button>
        </a>

    </div>
    
    <?php include("./view/footer.php"); ?>

</body>
</html>