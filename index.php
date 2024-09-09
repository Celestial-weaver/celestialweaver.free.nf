<!-- https://colorhunt.co/palette/d6efd880af81508d4e1a5319 -->
<!-- 1.1.1.4 -->

<html font="roboto">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
        <title>Celestial Weaver</title>
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    
    <body>
        <?php
        // creating connection with the server 
        // connection details for infinity Free 
        // server name : sql311.infinityfree.com
        // username : if0_35451690
        // Password : YWhfURnqpxLOxy
        // database Name : if0_35451690_001

        $DBservername = "localhost";
        $DBusername = "root";
        $DBpassword = "";
        $DBdatabasename = "if0_35451690_001";

        $con = new mysqli($DBservername,$DBusername,$DBpassword,$DBdatabasename);

        // fetching data from the server 
        $fetch = "select * from projects";  
        $result = $con->query($fetch);
        ?>

        <!-- working for nav  -->
        <nav data-aos="fade-down">
            <!-- working for menu list  -->
            <div class="hamburger-div">
                <div align="right" class="logo-img">
                    <div><img src="logo.jpg"></div>
                    <div>
                        <ion-icon name='logo-instagram'><a href="https://www.instagram.com/celestial_weaver?utm_source=qr">Instagram</ion-icon></a>
                        <ion-icon name='mail-unread'><a href="mailto:zenitsu.anshul@gmail.com">Email</ion-icon></a>
                        <ion-icon name='paper-plane'><a href="">Telegram</ion-icon></a>
                        <ion-icon name='logo-github'><a href="">Github</ion-icon></a>
                        <ion-icon name='logo-linkedin'><a href="">LinkedIn</ion-icon></a>
                    </div>
                </div>
                <div class="nav-bar">
                    <h3><a href="#">Home</a></h3>
                    <h3><a href="">About</a></h3>
                    <h3><a href="">Skills</a></h3>
                    <h3><a href="#show-box">Projects</a></h3>
                </div>
            </div>
            <!-- working for search bar  -->
            <div class="search" align="left">
                <div>
                    <input type="text" placeholder="Type here...">
                    <button onclick="search();"> <ion-icon name='search'></ion-icon></button>
                </div>
                <br>
                <div><p>Made by Anshul Singh</p></div>
            </div>
        </nav>

        <!-- working for header  -->
        <div> 
            <header> 
                <div class="content_for_header">
                    <div><p>Celestial </p> <br> <p> weaver</p></div>
                    <br>
                    <div align="right"><p>Front-End Web web developer</p></div>
                </div>
            </header>
        </div>
        
        <!-- working for main page body  -->
        <center id="show-box">
            <!-- working for list items  -->
            <div class="list-item">
                <h1>Projects</h1>
                <hr>
                <div>
                    <h3>Web Designing</h3><hr>
                    <?php
                    while($row = $result->fetch_assoc()){
                        $project_heading = $row['heading'];
                        $projects_name = $row['name'];
                        echo "<h5><a href='projects/$projects_name/index.html'>$project_heading</a></h5>";
                    }
                    ?>
                </div>
                <hr>
            </div>

            <!-- working for projects section  -->
            <div class="show-box">
                <section class="main-page-body">
                    <div id="projects">My Recent Projects</div>
                    <?php
                    $fetch = "select * from projects";  
                    $result = $con->query($fetch);

                    while($row = $result->fetch_assoc()){

                        $projects_name = $row['name'];
                        $projects_ID = $row['ID'];
                        $projects_heading = $row['heading'];
                        $projects_description = $row['description'];

                        $img_location = "projects/".$projects_name."/demo_picture.png";
                        ?>
                        <div class="show" >
                            <img src="<?php echo $img_location?>">
                            <br>
                            <h3><?php echo "$projects_heading" ; ?></h3>
                            <hr>
                            <h5><?php echo "$projects_description"; ?></h5>
                            <br><hr><br>
                            <a href="<?php echo "projects/$projects_name/index.html";?>">Click here</a>
                        </div>
                        
                        <?php
                    }
                    
                    ?>
                </section>
            </div>

        </center>
         <footer>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5457586637326!2d77.3416917752251!3d28.613400934949684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce53d525df327%3A0x66f900cafbfb0b9a!2sPragati%20Vihar%2C%20Shital%20Vihar%2C%20Khora%20Colony%2C%20Sector%2062%2C%20Noida%2C%20Uttar%20Pradesh%20110096!5e0!3m2!1sen!2sin!4v1708770477661!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div align="right" class="logo-img">
                    <div><img src="logo.jpg"></div>
                    <div>
                        <ion-icon name='logo-instagram'><a href="https://www.instagram.com/celestial_weaver?utm_source=qr">Instagram</ion-icon></a>
                        <ion-icon name='mail-unread'><a href="mailto:zenitsu.anshul@gmail.com">Email</ion-icon></a>
                        <ion-icon name='paper-plane'><a href="">Telegram</ion-icon></a>
                        <ion-icon name='logo-github'><a href="">Github</ion-icon></a>
                        <ion-icon name='logo-linkedin'><a href="">LinkedIn</ion-icon></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script> AOS.init(); </script>
    </body>
</html>