<?php
  	session_start();
	ob_start();	//----Output Buffer------//
	require_once("config/config.php");
	$dbObj		=	new DBUtility();
	$name		=	$_POST['username'];
	$password	=	$_POST['password'];
	
	$sql  	= "SELECT * FROM users WHERE username = '$name' and password = '$password'";
	$res    = $dbObj->select($sql);
	
	$count	= count($res);
	if($_POST)
	{
		if($count==1)
		{
			$_SESSION['user']	=	$name;				
			
			header("Location:dashboard.php");
										   
			
		}	
		else
		{
			echo "<div id='errorlogin' style='
					position:fixed;
					top: 50%;
					left: 40%;
					border:2px solid #a1a1a1;
					padding:10px 40px; 
					background:#dddddd;
					width:300px;
					border-radius:25px;'
					>
			Wrong Username or Password...Pls Retype UserName & Password Again..
			</div>";
			
			echo "<meta http-equiv='refresh' content='3; URL=index.php'>";
		}
	}

?>


<?php
function warningfnc()
{
?>
	<div id="welcome">
	<?php
	            echo "<div style='width:600px;height:40px;background:#f6f6f6;float:left;margin-left:120px;padding-top:10px;
				border:#660000 1px solid;font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px; color:#0099CC' 
				align='center'>";
				echo "You are not authorised person!"; 
				echo "</div>";
				echo "<div style='clear:both;'></div>";
				echo "<meta http-equiv='refresh' content='3; URL=index.php'>";
	?>
	
	</div>
<?php
}
?>



