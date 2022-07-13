<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type=text/css>@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url(1.jpg);
	    background-color:lightyellow;
            background-position: center;
            background-size: repeat;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }
       /* ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color:orange;
                text-align: right;
            }
            li {
              float: left;
              padding:10px 30px;
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
             }*/
       /* .logform{
            width: 800px;
            background-color: rgba(0,0,0,0.6);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 15px 15px;
        }*/
        .main{
            padding: 55px 50px;
            width: 400px;
            margin-top: 90px;
            margin-left: 450px;
            background-color: rgba(0,0,0,0.3);
           /* margin: auto;*/
            margin-right: 350px;
            color: #FFFFFF;
            /padding: 10px 0px 10px 0px;/
            text-align: center;
            border-radius: 15px 10px 10px 15px;

        }
	.main h1{
	  margin-left:120px;

	}
        
        .file{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            outline:none;
            
            
        }
.submit {
            width:35%;
            font-size: medium;
            padding:10px 10px;
            margin:5px 0;
            background-color: #416600 ;
            border-radius: 15px;
        }
        .submit:hover{
            cursor: pointer;
            color:white;
            background-color: lightgreen;
        }
	h1{
	  margin-left:20px;
	}

a {
    user-select: none;
    -webkit-user-drag: none;
}</style>
</head>    
<body>
<h1 div='logo'>
<img src= "0.png">
</h1>
<div class="main">
<form action="uploadaction.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
<br><br>
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
</form>
</div>
</body>
</html>