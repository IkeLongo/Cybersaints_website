<!-- <header>    -->
<script>
    // Toggle menu onclick
    const toggle = ()=>{
        document.getElementById("nav").classList.toggle("navactive")
    }
</script>
<div id="header">
    <div class="container">
        <div class="logo-wrapper">
            <img src="images/ollu_cybersaints_logo.png" class="logo">
        </div>
        <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="fundraiser.php">Fundraiser</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="sponsorships.php">Sponsorships</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- </header> -->