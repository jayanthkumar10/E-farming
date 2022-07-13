<html>
    <head>

        <title>Home Page</title>
        <style type="text/css">
        body{
                background-image: url('veggies.jpg');
                background-repeat: no-repeat; 
                background-size: cover;
                height: 500px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                letter-spacing: 1.4px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color:#416600 ;
                text-align: right;
            }
            li {
              float: left;
              padding:5px 100px;
            }
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 10px 60px;
              text-decoration: none;
             }
             li a:hover {
               background-color: #111111;
             }
             #main {
                width: 700px;
                height: 400px;
                margin: 0;
                /* margin-top: 30px; */
                color: beige;
                animation-name: slide;
                animation-direction: normal;
                animation-duration: 2s;
                animation-delay: .5s;
                animation-fill-mode: backwards;
                padding-left: 5rem;
             }
             #main h1{
                /* padding: 90px ; */
                animation-name: slide;
                animation-duration: 2s;
             }
             @keyframes slide{
                0%{
                    transform: translateX(1000px);
                    opacity: 0;
                }
                100%{
                    transform: translateX(0);
                    opacity: 1;
                }
             }
            footer {
                text-align: center;
                 color: black;
                 animation-name: slide;
                animation-duration: 2s;
                animation-delay: .5s;
                animation-fill-mode: backwards;
                }
            footer h3{
                margin:10%;
                animation-name: slide;
                animation-duration: 2s;
            }

            img{
                height: 150px;
                /* margin-left: -400px; */
                /* margin-top: -100px; */
            }
            #weather{
                margin-top: -360px;
                margin-left: 1000px;
            }

        </style>
    </head>
    <body>
                  <ul id='Main Menu'>
                                          
                        <li><a href="home.php" target="_self">Home</a></li>
                        <li><a href="rev.php" target="_self">Seasons</a></li>
                        <li><a href="location.php" target="_self">Location</a></li>
                        <li><a href="progress.html" target="_self">Progress Bar</a></li>
                        <li><a href="logout.php" target="_self">Log Out</a></li>
                    </ul>
                    <div id="main">
                        <h1 style=""> <img src="agree_logo.png"></h1>
                        <h2>WARE HOUSE STORAGES NEARBY</h2>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1BjxVFj61OR57TpGMTX7CM0YgqMxNSRGH&ehbc=2E312F" 
                            
                            width="800" height="480" style=""></iframe>
                    </div>
                    
                    <div class="elfsight-app-0f2168a6-57b0-4f59-ae8c-138e94a51357" id = "weather"></div>
                    
                    <footer>
                        <h3> HAPPY FARMING </h3>
                    </footer>
                    
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    </body>
</html>