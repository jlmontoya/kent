<?PHP
	function connectToMysql() { 
		$mysqli = new mysqli('localhost','root','','extreme-explorer');
		if (mysqli_connect_errno() > 0) {
			$problem = mysqli_connect_error();
			die($problem);
		}
		return $mysqli;
	}
	$db = connectToMysql();
?>