<html>
    <head>
        <title>
            Login Page.
        </title>
        <style type="text/css">
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url(agri3.png);
            background-position: center;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }
        .main{
            padding: 55px 50px;
            width: 400px;
            margin-top: 200px;
            margin-left: 600px;
            background-color: rgba(160, 177, 160, 0.3);
            text-align: center;
            border-radius: 15px 15px 15px 15px;

        }
	.main h1{
	  margin-left:23px;
      color: rgb(184, 233, 199);

	}
        
        .Username{
            width:35%;
            padding:10px 10px;
            margin-right:300px;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            outline:none;
            
            
        }
        .password{
            width:35%;
            padding:10px 10px;
            /*margin:5px 0;*/
            margin-right:300px;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            outline:none;
        }
        .Username,.password{
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
        }
        body, html{     
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
             user-select: none;  
        }
        #ino{
            margin-right: 180px;
            width: 700px;
        }

        .submit {
            width:35%;
            font-size: medium;
            padding:10px 10px;
            margin-right:300px;
            background-color: #416600 ;
            border-radius: 15px;
        }
        .submit:hover{
            cursor: pointer;
            color:white;
            background-color: lightgreen;
        }

a {
    user-select: none;
    -webkit-user-drag: none;
}
        </style>
    </head>
    <body>
        


        <div class="main">
            <div><h1>Login Page</h1> <br> <br>
            <form method='POST' action='validate.php'>
            <div id="ino">
                <input class="Username" type="text" name="User_name" placeholder="&#xf2ba;  User Name" required><br><br>
                <input class="password" type="password" name="Password" placeholder="&#xf084;  Password" required><br><br>                                             
                <input class="submit" type="submit"> <br> <br>
                 <p style="color: whitesmoke; margin-right:200px;">NOT YET REGISTERED? <a href="register.php" style="color: royalblue;">Register here</a></p>

            </div>
                </form>
        </div>
    </body>
</html>