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

	function updateUser($id, $type, $value)
	{
		$array=array(":id"=>$id, ":type"=>$type, ":value"=>$value);
		#print_r($array);
		$sql= "update `user` set ".$type." = ? where Userid = ?";
		$query= $this->connect->prepare($sql);
		try{
		$query->execute(array($value, $id));
		}
		catch (PDOException  $e)
	{	
		exit("Database error " .$e->getMessage());
	}
		}//end function

		function updateSkills($id, $type,$update, $other)
	{
		$sql="delete from `user_skillset` where UserID = ".$id ." and categoryID = ".$type;
		$sql2 = $this->connect->prepare($sql);
		$sql2->execute();

		$run = "insert into `user_skillset` (ID, UserID, SkillID, categoryID, status) values (NULL, :id, :skill, :cate, 1)";
		$query = $this->connect->prepare($run);
		
		if($update != NULL)
		{
		foreach ($update as $key=>$value)
		{
			$query->bindparam(":id", $id);
			$query->bindparam(":skill", $key);
			$query->bindparam(":cate", $type);
			$query->execute();
		}
		}
		if($other != '')
		$sql = "insert into `user_skillset` (ID, UserID, SkillID, categoryID, others, status) values (NULL, ".$id.", 99, ".$type.", '".$other."', 1)";
		$query= $this->connect->prepare($sql);
		$query->execute();
	}//end function

}//end class
?>