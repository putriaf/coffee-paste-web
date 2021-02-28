<!DOCTYPE html>
<html>
    <head>
        <title>Coffee Paste - Platform Restoran Berbasis Web</title>
        <link rel="stylesheet" href="assets/styles/style_home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="menu">Menu</a></li>
                <?php
                    $level=$_SESSION['level'];         
                    if($level=="admin") {
                        ?>
                        <li><a href="view_reservasi">Data Reservasi</a></li><?php 
                    }
                ?>
                <li><a href="logout">Logout</a></li>
                <li class="brownie"><a href="form" class="brownie">Reserve Now</a></li>
            </ul>
        </nav>
        <header>
            <div class="hero-image">
                <img src="assets/images/a.jpg" alt="">
            </div>
        </header>
        <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			| Coffee Paste | Jl. Raya Jatinangor No.418 KM 52 Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat |
		</marquee>
		</div>
        <main>
            <div class="about">
                <h2>About Us</h2>
                <figure>
                    <img src="assets/images/005-croissant.png" alt="" width="100px">
                    <figcaption><a href="menu">Our Menu</a></figcaption>
                </figure>
                <figure>
                    <img src="assets/images/012-coffee-shop-1.png" alt="" width="100px">
                    <figcaption><a href="about#facilities">Our Facilities</a></figcaption>
                </figure>
                <figure>
                    <img src="assets/images/014-terrace.png" alt="" width="100px">
                    <figcaption><a href="about#locations">Our Locations</a></figcaption>
                </figure>
                <figure>
                    <img src="assets/images/034-sign.png" alt="" width="100px">
                    <figcaption><a href="form">Reserve Now</a></figcaption>
                </figure>
            </div>
            <div class="hero-image">
                <img src="assets/images/hero.jpg" alt="">
            </div>
            <div class="menu">
                <div class="text">
                    <h3>Our Popular Menu</h3>
                    <p>1. DOUBLE CHEESE BURGER</p><br>
                    <p>   > A flat round piece of cooked meat with a slice of cheese on top, served in a bread roll.</p><br>
                    <p>2. MACCHIATO</p><br>
                    <p>   > Espresso with a dash of frothy steamed milk.</p>
                    
                    <br><br><br>
                    <a href="menu" class="browse">Browse All</a>
                </div>
                <!-- <div class="photo">
                    <div class="item">
                        <figure><img src="/assets/images/menu/cheeseburger.jpg" alt="" width="100px"></figure>
                        <p>DOUBLE CHEESE BURGER</p>
                    </div>
                    <div class="item">
                        <figure><img src="/assets/images/menu/macchiato.jpg" alt="" width="100px"></figure>
                        <p>CARAMEL MACCHIATO</p>
                    </div>
                    <div class="item">
                        <figure><img src="/assets/images/menu/cafelatte.jpg" alt="" width="100px"></figure>
                        <figcaption>CAFE LATTE</figcaption>
                    </div>
                    <div class="item">
                        <figure><img src="/assets/images/menu/frap2.jpg" alt="" width="100px"></figure>
                        <figcaption>FRAPPUCINO</figcaption>
                    </div>
                    <div class="item">
                        <figure><img src="/assets/images/menu/frenchfries.jpg" alt="" width="100px"></figure>
                        <figcaption>FRENCH FRIES</figcaption>
                    </div>
                    <div class="item">
                        <figure><img src="/assets/images/menu/cheesecake.jpg" alt="" width="100px"></figure>
                        <figcaption>CHEESE CAKE</figcaption>
                    </div>
                </div> -->
            </div>
        </main>
        <footer>
            <p>Coffee Completes Me &#169; Coffe Paste</p>
        </footer>
    </body>
</html>