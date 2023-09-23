<header>   
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
                    <li><a href="#">Home</a></li>
                    <li><a href="fundraiser.html">Fundraiser</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="sponsorships.html">Sponsorships</a></li>
                    <li><a href="contact.htlp">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>