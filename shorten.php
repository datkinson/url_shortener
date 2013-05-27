<?php
$url = $_REQUEST['url'];
function shorten($content){

}

function checkdb($url){
	include 'connect.php';
	$sql = "select * from shorten where url = '$url'";
	$query = mysql_query($sql) or die(mysql_error());
	$result = mysql_fetch_array($sql);

	//if the query returns anything but a 0, the url exists in the database
	if(mysql_num_rows($query)!=0){
		$result = mysql_fetch_assoc($query);
		return $result['id'];
	}else{
		//if item doe snot exist in database, insert it.
		return writedb($url);
	}

	mysql_close($db);
}

function writedb($url){
	$ip = $_SERVER['REMOTE_ADDR'];
	$san_url = mysql_real_escape_string($url);
	$sql = "insert into shorten (url, ip) values('$san_url', '$ip')";
	mysql_query($sql) or die(mysql_error());
	$id = mysql_insert_id();
	return $id;

}

//check if the url contains http or https, if not then add it
function check_http($input){
	if (strpos($input,'http') !== false){
    	if(strpos($input,'https') !== false){
    		//echo "Input url is https";
    		return $input;
    	}else{
    		//echo "Input url is http";
    		return $input;
    	}
	}else{
		//echo "Input url contains no http";
		$fixed_input = "http://" . $input;
		return $fixed_input;
	}
}

//check if the submitted url exists, if not then error and exit.
function check_valid_url($input){
	if (@file_get_contents($input)){
		//echo "Valid url submitted";
        }else{
        	echo "Invalid url: '$input'!";
        	exit();
        }
}


//call the various functions to check the input string and to shorten
$request_url = check_http($url);
check_valid_url($request_url);

//check if url already exists in database and print the shortened url if so

$url_id = checkdb($request_url);
//print result of shortening
//echo "<br /><a href='./?r=".$url_id."'>hourd.net/s/?r=".$url_id."</a>";
echo "<br /><a href='/".$url_id."'>hourd.net/".$url_id."</a>";
testdb($request_url);
?>
