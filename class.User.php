<?

class User
{
	 function setConnect($connect)
	{
		$this->connect = $connect;
	}

	function CheckLogin($id, $password)
	{
		
		$sql="select status from `_user` where username = '".$id."' and password = '".$password."'";
	
		$query = $this->connect->prepare($sql);
		$query->execute();
		$row = $query->rowCount();
	
		if($row >= 1)
			return true;
		else
			return false;
	}
}//end class
?>