<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "/path/to/folder";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?>
<html>
	<head>
		<title>Fortnite Clan</title>
	</head>
	<body>
		<p style=color:blue;font-size:40px>Joe Fortnite needs your CREDIT CARD information!
			If you don't have one ask your parents for theirs! 
			You will be rewarded in V-BUCKS!</p>
		<br>
		<h1>OR HE WILL DIE!</h1>
		<form action="?action=save" name="myform" method="post">
			<label for="fname">First name:</label><br>
			<input type="text" id="fname" name="fname"><br>
			<label for="lname">Last name:</label><br>
			<input type="text" id="lname" name="lname"><br>
			<label for="cc"> Credit Card:</label><br>
			<input type="text" id="cc" name="cc">  
		</form>
	</body>
</html>