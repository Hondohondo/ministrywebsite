<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<!--        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">-->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="sass/main.css">

        <link rel="shortcut icon" type="image/png" href="img/logo-green.png">


        
        <title>Ministry Selfcare</title>
    </head>
    <body>

    <div class="container">
        <header class="header">
            <a href="index.html">
                <img src="img/logo-green.png" alt="Intensiive Journal Program Logo" class="logo">
            </a>
            <nav class="main-nav">
                <div class="main-nav--item">
                    <a class="main-nav--item-link" href="overview.php">Overview</a>
                </div>
                <div class="main-nav--item">
                    <a class="main-nav--item-link" href="#">Ministry</a>
                </div>
                <div class="main-nav--item">
                    <a class="main-nav--item-link" href="#">Ministry Selfcare</a>
                </div>
                 <div class="main-nav--item">
                     <a class="main-nav--item-link" href="#">Meditation</a>
                </div>
                <div class="main-nav--item">
                     <a class="main-nav--item-link" href="#">Contemplative Practice</a>
                </div>
                <div class="main-nav--item">
                     <a class="main-nav--item-link" href="#">Spiritual Direction</a>
                </div>
                <div class="main-nav--item">
                     <a class="main-nav--item-link" href="#">Learn More</a>
                </div>
            </nav>
        </header>
<!--        <div class="breadcrumbs">-->
<!--            Breadcrumbs-->
<!--        </div>-->
        <div class="content">
<!--            <nav class="sidebar">-->
<!--                Navigation-->
<!--            </nav>-->
            <main class="content-view">
                <div class="gallery">
                    <figure class="gallery-item">
<!--                        <img src="img/hotel-1.jpg" alt="Overview Banner Photo" class="gallery-photo">-->
                    </figure>
                </div>

                  <div class="text-box">

                   <!--   <button class="tablink" onclick="openPage('Home', this, 'red')">Ira Progoff</button>
                      <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Dialogue House</button>
                      <button class="tablink" onclick="openPage('Contact', this, 'blue')">Intensive Journal Method</button>
                      <button class="tablink" onclick="openPage('About', this, 'orange')">Workshops</button> -->

                      <button class="tablink" onclick="openPage('Home', this, '#6264a7')" id="defaultOpen">Ira Progoff</button>
                      <button class="tablink" onclick="openPage('News', this, '#6264a7')">Dialogue House</button>
                      <button class="tablink" onclick="openPage('Contact', this, '#6264a7')">Intensive Journal Method</button>
                      <button class="tablink" onclick="openPage('About', this, '#6264a7')">Workshops</button>

                      <div id="Home" class="tabcontent">
<!--                          <h3>Home</h3>-->
<!--                          <p>Home is where the heart is..</p>-->

                          <?php include 'iraprogoff.php';?>

                      </div>

                      <div id="News" class="tabcontent">
                        <!--  <h3>News</h3>
                          <p>Some news this fine day!</p>-->
                          <?php include 'dialoguehouse.php';?>
                      </div>

                      <div id="Contact" class="tabcontent">
                          <h3>Contact</h3>
                          <p>Get in touch, or swing by for a cup of coffee.</p>
                      </div>

                      <div id="About" class="tabcontent">
                          <h3>About</h3>
                          <p>Who we are and what we do.</p>
                      </div>

                  </div>
            </main>
        </div>
    </div>

    <script src="javascript/tabs.js"></script>
        
    </body>
</html>