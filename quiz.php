<html>
<body>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body
{
 background-color:black;
}
.m
{
 display:flex;
 flex-direction:column;
 color:white;
 border:2px solid white;
padding:30px;
 margin:100px;
box-shadow:2px 2px 50px lime;
}
input[type="radio"]
{
 height:16px;
width:16px;
}
label
{
 font-size:20px;
}
h1
{
 color:white;
font-size:60px;
text-shadow:2px 2px 40px red;
}
</style>
</head>

<center>
<h1>Quiz</h1>
<form action="quiz2.php" method="post">
<div class="m">
<label>1) In computer world, Trojan refers to?<br><br>
<tr><td><input type="radio" name="rb" value="virus" required>a)virus
<input type="radio" name="rb" value="malware">b)Malware
<input type="radio" name="rb" value="worm">c)Worm
<input type="radio" name="rb" value="spyware">d)Spyware
</label><br><br><br>

<label >2) Which protocol is used to received e-mail?<br><br>
<input type="radio" name="rb1" value="smtp"required>a)SMTP
<input type="radio" name="rb1" value="pop3">b)POP3
<input type="radio" name="rb1" value="http">c)HTTP
<input type="radio" name="rb1" value="ftp">d)FTP</label>
<br><br><br>

<label>3) The fifth Generation Computer works on?<br><br>
<input type="radio" name="rb2" value="translators"required>a)Translators
<input type="radio" name="rb2" value="artificialintelligence">b)Artificial Intelligence
<input type="radio" name="rb2" value="microprocessor">c)Microprocessor
<input type="radio" name="rb2" value="iot">d)IoT</label>
<br><br><br>

<label >4) Who is the father of PHP?<br><br>
<input type="radio" name="rb3" value="drekkolkevi"required>a)Drek Kolkevi
<input type="radio" name="rb3" value="rasmuslerdorf">b)Rasmus Lerdorf
<input type="radio" name="rb3" value="williammakepiece">c)William Makepiece
<input type="radio" name="rb3" value="listbarley">d)List Barley</label>
<br><br><br>

<label> 5) Who invented OOP?<br><br><br>
<input type="radio" name="rb4" value="andreaferro"required>a)Andrea Ferro
<input type="radio" name="rb4" value="adelegoldberg">b)Adele Goldberg
<input type="radio" name="rb4" value="alankay">c)Alan Kay
<input type="radio" name="rb4" value="dennisritchie">d)Dennis Ritchie</label>
<br><br><br>

<label>6) Which was the first purely object oriented<br>programming language?<br><br>
<input type="radio" name="rb5" value="kotlin"required>a)Kotlin
<input type="radio" name="rb5" value="smalltalk">b)SmallTalk
<input type="radio" name="rb5" value="java">c)Java
<input type="radio" name="rb5" value="c++">d)C++</label>
<br><br><br>

<label >7) How many types of access specifiers are provided un OOP(C++)?<br>
<input type="radio" name="rb6" value="4"required>a)4
<input type="radio" name="rb6" value="3">b)3
<input type="radio" name="rb6" value="2">c)2
<input type="radio" name="rb6" value="1">d)1
</label>
<br><br><br>

<label>8)Whic access specifier is usually used for data members of a class?<br>
<input type="radio" name="rb7" value="protected"required>a)Protected
<input type="radio" name="rb7" value="private">b)Private
<input type="radio" name="rb7" value="public">c)Public
<input type="radio" name="rb7" value="default">d)Default</label><br><br><br>

<label>9) Which keyword is used to declare an array of objects in java?<br>
<input type="radio" name="rb8" value="allocate"required>a)allocate
<input type="radio" name="rb8" value="arr">b)arr
<input type="radio" name="rb8" value="new">c)new
<input type="radio" name="rb8" value="create">d)create</label>
<br><br><br>

<label >10)Which keyword is used to declare static variables?<br>
<input type="radio" name="rb9" value="const"required>a)const
<input type="radio" name="rb9" value="common">b)common
<input type="radio" name="rb9" value="static">c)static
<input type="radio" name="rb9" value="stat">d)stat</label>
<br><br><br>
</div>
<button name="b" size:"50%">Submit</button>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['s1']))
{
$x1=$_POST["name"];
$y1=$_POST["roll"];
$z1=$_POST["class"];
$c=mysqli_connect("localhost","root","","quizdet");
if(isset($_POST['s1']))
{
$sq="insert into dquiz values('$x1','$y1','$z1')";
mysqli_query($c,$sq);
}
}
?>
<?php
if(isset($_POST['b']))
{
 header("Location:quiz2.php");
}
exit;
?>
