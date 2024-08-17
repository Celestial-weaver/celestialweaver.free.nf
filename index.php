<!-- https://colorhunt.co/palette/d6efd880af81508d4e1a5319 -->
<html font="roboto">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
        <title> Home </title>
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="script.js"></script>
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
                <div class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div align="right" class="logo_img">
                    <img src="logo.png" align="right">
                </div>
            </div>
            <!-- working for search bar  -->
            <div class="search" align="left">
                <div>
                    <input type="text" placeholder="Type here...">
                    <button onclick="search();">Search</button>
                </div>
                <br>
                <div><p>Made by <br> Anshul Singh</p></div>
            </div>
        </nav>

        <!-- working for header  -->
        <div> 
            <div class="background_for_header">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <header> 
                <div class="content_for_header">
                    <div align="left"><p>Celestial </p> <br> <p> weaver</p></div>
                    <br>
                    <div align="right"><p>Front-End Web web developer</p></div>
                </div>
            </header>
        </div>
        
        <!-- working for main page body  -->
        <center>
            <!-- working for list items  -->
            <div class="list-item">
                <h1>Contacts</h1>
                    <hr>
                        <div>
                            <h3><a href="https://www.instagram.com/celestial_weaver?utm_source=qr">Instagram</a></h3>
                            <h3><a href="mailto:zenitsu.anshul@gmail.com">Email</a></h3>
                            <h3><a href="">Telegram</a></h3>
                            <h3><a href="">Github</a></h3>
                        </div>
                    <hr>
                <br><br><br><br><br>
                <hr>
                <h1>Projects</h1>
                <hr>
                    <div>
                        <h3>Web Designing</h3><hr>
                            <?php
                            while($row = $result->fetch_assoc()){
                                $project_heading = $row['heading'];
                                $projects_name = $row['name'];
                                echo "<h5 data-aos='zoom-in-up' data-aos-delay='50' data-aos-duration='700'><a href='projects/$projects_name/index.html'>$project_heading</h5>";
                            }
                            ?>
                    </div>
                    <hr>
            </div>

            <!-- working for projects section  -->
            <section class="main-page-body">
                <div>My Recent Projects</div>
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
                    <div class="show" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100" data-aos="zoom-in-up">
                        <img src="<?php echo $img_location?>">
                        <br><br>
                        <h1><?php echo "$projects_heading" ; ?></h1>
                        <hr>
                        <h3><?php echo "$projects_description"; ?></h3>
                        <br><br><hr>
                        <a href="<?php echo "projects/$projects_name/index.html";?>">Click here</a>
                    </div>
                    
                    <?php
                }
                
                ?>
            </section>
        </center>
         <footer>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5457586637326!2d77.3416917752251!3d28.613400934949684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce53d525df327%3A0x66f900cafbfb0b9a!2sPragati%20Vihar%2C%20Shital%20Vihar%2C%20Khora%20Colony%2C%20Sector%2062%2C%20Noida%2C%20Uttar%20Pradesh%20110096!5e0!3m2!1sen!2sin!4v1708770477661!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script> AOS.init(); </script>
    </body>
    <iframe src="projects/bouncing_balls/index.html" frameborder="0" id="background" height="140%"></iframe>
</html>