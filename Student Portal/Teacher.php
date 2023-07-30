<html>
<head>
<style>
body
{
 background-image: url('back1.jpg');
 background-size: cover;
 background-size: 100% 100%;
}
.box{
    width: 600px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-image: url('back2.jpg');
	background-size: cover;
    background-size: 100% 100%;
    text-align: center;
    }
    .box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    }
	.box h2{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    }
    .box input[type = "text"],.box input[type = "password"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    }
    .box input[type = "text"]:focus,.box input[type = "password"]:focus{
    width: 280px;
    border-color: #2ecc71;
    }
    .box input[type = "submit"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
    }
    .box input[type = "submit"]:hover{
    background: #2ecc71;
    }
</style>
</head>
<body>
<form class="box" action="menu_teacher.php" method="POST" >
<h1>WELCOME TO STUDENT PORTAL</h1>
<h1>TEACHER LOGIN</h1>
<hr>
<input type="text" name="Id" placeholder="Teacher Id" required>
<input type="password" name="Password" placeholder="Password" required>
<input type="submit" id="button" value="LOGIN">
<hr>
</form>
</body>
</html>
