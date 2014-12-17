<?

class User
{
	 function setConnect($connect)
	{
		$this->connect = $connect;
	}

	function CheckLogin($id, $password)
	{
		
		$sql="select Userid, isAdmin from `user` where User_name = '".$id."' and Password = '".$password."'";
	
		$query = $this->connect->prepare($sql);
		$query->execute();
		$row = $query->rowCount();
	
		if($row >= 1)
		{
			$data = $query->fetch();
			return $data;
		}
		else
			return false;
	}//end check login

	function Register($data)
	{
		$sql="insert into `user` (Userid, User_name, Password) VALUES (NULL, '".$data['username']."', '".$data['password']."')";
		$query= $this->connect->prepare($sql);
		$query->execute();
		return $this->connect->lastInsertId();
	}//end Register

	function getCuisine($id)
	{

	}

	function getCookSkill($id)
	{

	}

	function getUserData($id)
	{
		$temp = array(1=>'cuisine', 2=>'cookskill', 3=>'arena');
		$sql="select * from user where Userid = ".$id;
		$query = $this->connect->prepare($sql);
		$query->execute();
		$data = $query->fetch();
		
		$sql="select * from user_skillset where userID = ".$id. "  order by categoryID asc";
		$query = $this->connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{		
			if($result['skillID'] == 99)
			{
				$data[$temp[$result['categoryID']]][99] = $result['others'];
			}		
			else
			$data[$temp[$result['categoryID']]][$result['skillID']] = $result['skillID'];
		}//end while
		
	return $data;
	}//end get Data

}//end class
?>