<?php 
if (PHP_SESSION_NONE) {session_start();}?>
	
		<?php 
							
							$uname=""; $pword=""; $menucontent="";
							
							if(isset($_POST["username"]))
							{
								$uname =$_POST["username"]; 
							}
							if(isset($_POST["password"]))
							{
								$pword = $_POST["password"];
							}
							if(Authenticate($uname,$pword)==true)
							{
								$_SESSION["admin"]=true;
							    header('Location:messages.php');
							}
							else
							{	$_SESSION['msg']="Please Enter Valid Data ";							
								header("Location:login.php");								
							}
						?>
					
<?php 
	
	function Authenticate($usernam,$passwor) // Authenticate the username and password
	{
		include ('connection.php');	 // include connection settings parameter
		$status = false;
				
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
			return $status;
		}
		
		$query = "select StaffID, username,password, password('".$passwor."') as generatedpwd from stafflogin where username='".$usernam."';";
		$resultSet = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($resultSet)>0)
		{
			while($row=mysqli_fetch_assoc($resultSet))
			{
				if($row["username"]==$usernam && $row["password"]== $row["generatedpwd"])
				{
					$_SESSION["log"] = $row["StaffID"];
					$status = true;
				}
				else
				{
					$status = false;
				}
			}
		}
		
		mysqli_close($conn);
		return $status;
	}	
?>
