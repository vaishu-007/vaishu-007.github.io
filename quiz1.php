<html>
<body>
<head>
<style>
body
{
 background-color:black;
}
.m1
{
box-shadow:2px 2px 55px pink;
border:2px solid black;
background-color:pink;
margin:130px;
padding:120px;
font-size:20px;
}
</style>
</head>
<form action="" method="post">
<div class="m1">
<center>
<h3><u>Enter Correct Username and Password.</u></h3>
Username:<input type="text" name="user"required><br><br>
Password:<input type="password" name="pass"required><br><br>
<button name="b">Login</button>
</center>
</div>
<?php
 if((isset($_POST['user'])) &&(isset($_POST['pass'])))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
 if($user=="vaishu" && $pass=="vvv" )
{
 if(isset($_POST['b']))
{
 header("Location:quizz.php");
}
else
{
 echo "wrong entry";
}
}
}
?>
</form>
</body>
</html>
