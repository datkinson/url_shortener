<?php
$site="http://hourd.net/s";
function redirect_url($url_id){
	//echo "Redirect url id is: $url_id";

	include 'connect.php';
	$sql = "select * from shorten where id = '$url_id'";
	$query = mysql_query($sql) or die(mysql_error());
	$result = mysql_fetch_array($sql);

	if(mysql_num_rows($query)!=0){
		$result = mysql_fetch_assoc($query);
		echo $result['url'];
		header("Location: ".$result['url']);
	}else{
		header("Location: ".$site);
	}

	mysql_close($db);
}
?>