<?php
/*
$a = 0;
$b = "Thank YOu";
if($a == $b){
	echo "eiei<br />";
}
$c = 68;
$d = "68asdasd825648";
if($c == $d){
	echo "eiei2";
}

if(strcmp($_GET['password'], 'thePassword') == 0){
	echo "eiei3";
}
*/
$USER = "diwdev.th@gmail.com";
if(!isset($_POST['submit'])){
	?>
	<form action="diwdev3.php" method="POST" accept-charser="utf-8">
	<input type="text" name="username" placeholder="username" />
	<input type="text" name="password" placeholder="password" />
	<input type="submit" name="submit" value="Send" />
	</form>
	<?php	
	//$myArr = array("data" => array("login", "password"));//{"data":["login","password"]}
	//$myJSON = json_encode($myArr, true);
	//echo $myJSON;
}else
{
	$arrays = array("data" => array("login" => $_POST['username'], "password" => $_POST['password']));//{"data":{"login":"diwdev.th@gmail.com","password":"a"}}
	$jsons = json_encode($arrays, true);
	$auth = json_decode($jsons, true);
	/*foreach($auth as $wow){
		echo $wow."<br />";
	}*/
	if($auth['data']['login'] == $USER){
		echo "Successful!";
	}
}
?>