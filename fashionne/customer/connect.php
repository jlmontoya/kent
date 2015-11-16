<?PHP
	function connectToMysql() {
		$mysqli = new mysqli('localhost','usr_fashionne','password','fashionne');
		if (mysqli_connect_errno() > 0) {
			$problem = mysqli_connect_error();
			die($problem);
		}
		return $mysqli;
	}
	$db = connectToMysql();
?>
