<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
            document.getElementById('logo').setAttribute('draggable', false);
        </script>
        <style type="text/css">
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url(register_bg.jpg);
            background-position: center;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }
        
        /*.regform{
            width: 800px;
            background-color: rgba(0,0,0,0.6);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 15px 15px;
        }*/
        .main{
            background-color: rgb(0,0,0,0.5);
            width:800px;
            margin: auto;

        }
        form{
            padding: 10px;
           text-align: center;
        }
        #name{
            width: 100%;
            height: 100px;
        }
        .name{
            margin-left: 25px;
            margin-top: 30px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            
        }
        .firstname{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 0px solid #999;
            outline:none;
            
            
        }
        .lastname{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
            
        }
	.user{
		width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
            
        }
        
        .Age{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
    
        }
        .number{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-bottom: 0px solid #999;
            outline:none;
        }
        .password{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-bottom: 0px solid #999;
            outline:none;
        }
        button{
            background-color: #3baf9f;
            width: 30%;
            padding:10px 10px;
            margin:5px 0;
            border-right: 30px;
            border-bottom: 0px solid #999;
            border-radius: 15px;
            outline: none;
            color: white;
            cursor: pointer;
            transition: 0.25px;
        }
        button:hover{
            background-color: #5390f5;
        }

        .firstname, .lastname, .Age,.number,.password,.user {
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

a {
    user-select: none;
    -webkit-user-drag: none;
}
        </style>
    </head>
    <body>
        
        <br>
        <div class="main"> 
            <br>
            <div style="text-align: center; color: white;"><h1>Registration Form</h1></div><br><br>
            <form method='POST' action = "registeraction.php">
                <div id="name">
                   
                 <input class="firstname" type="text" name="first_name" placeholder="&#xf2ba;  First Name" required><br><br>
                 <input class="lastname" type="text" name="last_name" placeholder="&#xf2ba;  Last Name" required>
                </div> <br>
		<input class="user" type="text" name="username" placeholder="&#xf2ba;   User Name" required> <br><br>

                <input class="Age" type="number" name="Age" placeholder="&#xf234;  Age" required><br><br>
                <input class="number" type="text" name="Mob" placeholder="&#xf095;  Mobile Number" required><br><br>
                <input class="password" type="password" name="Password" placeholder="&#xf084;  Password" required><br><br>
                <button class="button" type="submit" name="submit">Register  </button> <br> <br> 
                <p style="color: whitesmoke;">Already Have an Account ? <a href="login.php" style="color: wheat;">Login here</a></p> <br>
                </form>
        </div>
    </body>
</html>
