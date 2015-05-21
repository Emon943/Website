<?php session_start(); 
if(!$_SESSION['user'])

{

		

		echo "<div style='
					position:fixed;
					top: 50%;
					left: 40%;
					border:2px solid #a1a1a1;
					padding:10px 40px; 
					background:#dddddd;
					width:300px;
					border-radius:25px;'>Sorry you have to login first</div>";

		echo "<meta http-equiv='refresh' content=3;URL=index.php>";

		exit();

}
set_time_limit(250);
$logid = $_SESSION['user'];
include 'config/config.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php echo $companytitle;?></title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styledashboard" />
<script type="text/javascript" src="script/function.js"></script>


</head>

<body>
<div id="warper">
<table width="100%" height="100%" border="0">
<tr>
 <td align="left" width="12%"><img width="100%" height="100%" border="0" src="images/<?php echo $companylogo;?>" /></td>
 <td align="center" width="80%" valign="middle">
 <div style="font-size:24px; text-align: center; font-weight:bold; color:#FFFFFF;"></div>
 </td>
</tr>

<tr>
 <td colspan="2"><div style="float:left; width:100%; height:5px; background:#d5d5d5; border:#FFFFFF solid 0px;"></div></td>
 </tr>

<tr>
 <td colspan="2" align="center" valign="top" style="height:500px;" background="images/FaridganjUpazila_B1.jpg">
		<table width="40%" border="0" id="dashboardmenu" bgcolor="#05619b" style=" margin-top:20px; height:50px; line-height:50px; border-radius:25px;">
		<tr>
		<th><a href="#">Home</a></th>
        <th><strong><a href="#">Admission</a></strong></th>
		<th><strong><a href="#">Teachers</a></strong></th>
		<th><strong><a href="setup/menu.php">SETUP</a></strong></th>
		<th><strong><a class="menuitem" href="logout.php?act=logout">Logout</a></strong></th>

		</tr>
		</table>
	</td>
	</tr>	

</table>

</div>
</body>

</html>

