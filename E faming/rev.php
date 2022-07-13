
<html>
    <head>
        <title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        body{
                background-image:url('agri3.png');
                background-color:whitesmoke;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                letter-spacing: 1.4px;
            }

            .image{
                display: block;
                width: 100%;
                margin-left:auto;
                margin-right: auto;
            }
            body p{
                text-align: center;
            }

            .container1,.container2,.container3{
            position: relative;
            width: 500px;
            margin-left: 30px;
        }

.image1,.image2,.image3{
  opacity: 1;
  display: block;
  width: 0;
  height: 200px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle1,.middle2,.middle3{
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 10%;
  left: 10%;
  transform: translate(-0.5%, -0.5%);
  -ms-transform: translate(-0.5%, -0.5%);
  text-align: left;
}

.container1:hover .image1,.container2:hover .image2, .container3:hover .image3{
  opacity: 0.3;
}

.container1:hover .middle1,.container2:hover .middle2, .container3:hover.middle3{
  opacity: 1;
}

.text {
  background-color: lime;
  color: white;
  font-size: 10px;
  padding: 16px 32px;
}
.container1,.container2,.container3{
    float: left;
}
.container1 img{
  margin-top:70px;
}
.container2 img{
  margin-top:35px;
  margin-left:160px;
}
.container3 img{
  margin-top:60px;
  margin-bottom:90px;
  margin-left:350px;
}
.middle1 h1{
   margin-top:60px;
}
        </style> 
    </head>
    <body>
                    
		      <div class="container1">
                      <a href="ex.html">
                      <img src="kharif_bg.png" alt="Avatar" class="image1" style="width:100%">
                      <div class="middle1">
                          <h1></h1>
                      </div>
                      </div>
                      <br><br>
                      <div class="container2">
                      <a href="ex1.html">
                      <img src="rabi_bg.png" alt="Avatar" class="image2" style="width:100%">
                        <div class="middle2">
                            <h1></h1>
                          </div>
                      </div>
                      <br><br>
                      <div class="container3">
                      <a href="ex2.html">
                      <img src="zaid_bg.png" alt="Avatar" class="image3" style="width:100%">
                        <div class="middle3">
                            <h1></h1>
                          </div>
                        </div>
                    </body>
</html>

