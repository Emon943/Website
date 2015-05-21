<?php
function welcome()
{			
?>
   <div id="uptabs"> </div>
  <div id="maincontainoffunctin" style="text-align:center;"><h2>Admin</h2>
  </div>
  <div id="clear"></div>
<?php
}
?>




<!--Start chart of account setup related functions-->
<?php
function category()
       {
			$dbObj		=	new DBUtility();
			if($_POST)
			{
			
			 $productid= $_REQUEST["pid"];
			$productname = $_REQUEST["pname"];
			$productdetails = $_REQUEST["pdetails"];
	

			$sql = "insert into tblproduct (productid,productname,productdetails)
			values('$productid','$productname','$productdetails')";
			$dbObj->insert($sql);
			
			echo "<h2 align='center' style='color:#000000;'>Successfully added.</h2>";
			echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=cat'>";
			exit;
			
			
		}
		
		$sql = "SELECT lpad(COALESCE(max(CONVERT(productid,UNSIGNED INTEGER)),0)+1,2,'0') as productid FROM tblproduct";
		$result	= $dbObj->select($sql);
		
		$productid = $result[0]["productid"];
					
		
?>

<html>
<head>
<script type="text/javascript">
function fvalidation()
{
var pid = document.getElementById("pid").value;
if(pid == "")
{
alert("Please enter your pid.");
exit;
}
var pname = document.getElementById("pname").value;
if(pname == "")
{
alert("Please enter your pname");
exit;
}

if(confirm("Do you want to save?"))
{
document.sform.submit();
alert("Success");
}
else
{
exit;
}
}
</script>
</head>
<body>


 <form action="" method="post">
<table width="50%" border="1">

<tr>
 <td colspan="2" align="center" style="font-size:24px; font-weight:bold;">Product Setup</td>
						
</tr>
						
					 <tr>
    					<td bgcolor="#EBEBEB"><a href="menu.php?page=cat"><strong>Add</strong></a></td>
						<td bgcolor="#EBEBEB"><a href="menu.php?page=catv"><strong>View</strong></a></td>
                     </tr>
					




<tr>
    <td>Please enter your productid:</td>
    <td><input type="text" name="pid" id="pid" value="<?php echo $productid;?>" readonly="" size="2" /></td>
  </tr>
  <tr>
    <td>Please enter your productname:</td>
    <td><input type="text" name="pname" id="pname" /></td>
  </tr>
 <tr>
<td>productdetails</td>
<td><textarea rows="4" cols="50"  name="pdetails"id="pdetails">
Enter text here...</textarea></td>
</tr>
<tr>
      <td colspan="2" align="center">
	  <input type="submit" value="Save" onClick="fvalidation()" />
	  </td>
  </tr>
  </table>
</form>
</body>
</html>
<?php
}
?>



<?php
function category1()
       {
			$dbObj		=	new DBUtility();
			if($_POST)
			{
			
			 $productid= $_REQUEST["pid"];
			$productname = $_REQUEST["pname"];
			$productdetails = $_REQUEST["pdetails"];
	

			$sql = "insert into tbltproduct (productid,productname,productdetails)
			values('$productid','$productname','$productdetails')";
			$dbObj->insert($sql);
			
			echo "<h2 align='center' style='color:#000000;'>Successfully added.</h2>";
			echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=tp'>";
			exit;
			
			
		}
		
		$sql = "SELECT lpad(COALESCE(max(CONVERT(productid,UNSIGNED INTEGER)),0)+1,2,'0') as productid FROM tbltproduct				";
		$result	= $dbObj->select($sql);
		
		$productid = $result[0]["productid"];
					
		
?>

<html>
<head>
<script type="text/javascript">
function fvalidation()
{
var pid = document.getElementById("pid").value;
if(pid == "")
{
alert("Please enter your pid.");
exit;
}
var pname = document.getElementById("pname").value;
if(pname == "")
{
alert("Please enter your pname");
exit;
}

if(confirm("Do you want to save?"))
{
document.sform.submit();
alert("Success");
}
else
{
exit;
}
}
</script>
</head>
<body>


 <form action="" method="post">
<table width="50%" border="1">

<tr>
 <td colspan="2" align="center" style="font-size:24px; font-weight:bold;">Training Product Setup</td>
						
</tr>
						
					 <tr>
    					<td bgcolor="#EBEBEB"><a href="menu.php?page=tp"><strong>Add</strong></a></td>
						<td bgcolor="#EBEBEB"><a href="menu.php?page=tpv"><strong>View</strong></a></td>
                     </tr>
					




<tr>
    <td>Please enter your productid:</td>
    <td><input type="text" name="pid" id="pid" value="<?php echo $productid;?>" readonly="" size="2" /></td>
  </tr>
  <tr>
    <td>Please enter your productname:</td>
    <td><input type="text" name="pname" id="pname" /></td>
  </tr>
 <tr>
<td>productdetails</td>
<td><textarea rows="4" cols="50"  name="pdetails"id="pdetails">
Enter text here...</textarea></td>
</tr>
<tr>
      <td colspan="2" align="center">
	  <input type="submit" value="Save" onClick="fvalidation()" />
	  </td>
  </tr>
  </table>
</form>
</body>
</html>
<?php
}
?>



<?php
function categoryview($logid)
{
                
			$dbObj		=	new DBUtility();				
			$sql	=	"select * from tblproduct ";
			$result	=	 $dbObj->select($sql);
			
				
?>
<table width="100%" class="table table-striped table-bordered">
	
	
		
		<tr>
		<td bgcolor="#EBEBEB"><a href="menu.php?page=cat"><strong>Add</strong></a></td>
		<td bgcolor="#EBEBEB" colspan="100%"><a href="menu.php?page=catv"><strong>View</strong></a></td>
		</tr
		><tr>
			<td bgcolor="#EBEBEB" colspan="100%" align="center" class="itemviewtitle">
			    Product Details
			</td>
		</tr>
	
	<tr>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>productid</strong></td>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>Productname</strong></td>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>productdetails</strong></td>
	
	</tr>

<?php					
for($i=0;$i<count($result); $i++)
{
?>
    	
	<tr>
	<td><?php echo $i+1; ?></td>
	
	<td><?php echo $result[$i]["productname"]; ?></td>
	<td><?php echo $result[$i]["productdetails"]; ?></td>
	
	<td>
	<a href="menu.php?page=catup&action=edit&id=<?php echo base64_encode($result[$i]["productid"]); ?>">Edit</a>
	<a href="javascript:confirmDelete('menu.php?page=catup&id=<?php echo  base64_encode($result[$i]["productid"]); ?>','Are you sure you want to delete?')">Delete</a>
</td>
	</tr>
	<?php
}
?>
</table>

<?php
}
?>


<?php
function categoryupdate($logid){
	  	 $dbObj		=	new DBUtility();
		 $id = base64_decode($_GET['id']);
		 $action = $_GET['action'];
		 if($_POST)
				{
				
				$productname = $_REQUEST['productname'];
				
				
				
				$sql	=	"update tblproduct set 
				productname  ='$productname' where productid = '$id'";
				$ressult	=	 $dbObj->update($sql);
					
		            echo "<h2 align='center' style='color:#000000'>Successfully Updated</h2>";
					echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=catv'>";
                    exit;
					}

		 if($action=='edit')
		 {
			 $sql	=	"select * from tblproduct where productid = '$id'";
			 $result = $dbObj->select($sql);
			 $productid = $result[0]["productid"];
			 $productname = $result[0]["productname"];
			 $productdetails = $result[0]["productdetails"]; 
			 
?>	


        	<form action="<?php echo $PHP_SELF; ?>" name="addstinfo" method="post" onSubmit="return saveFunction('catupdate')">
             <table width="100%" border="1" align="center" bgcolor="#FFFFFF">
				
				<tr>
    				<td bgcolor="#ebebeb" colspan="2" align="center">
					<strong>Product Edit</strong>
					</td>
    			</tr>
				
				<tr>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=cat"><strong>Add</strong></a></td>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=catv"><strong>View</strong></a></td>
				</tr>
				
				
				<tr>
    				<td bgcolor="#ebebeb">productid</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" readonly="" size="2" value="<?php echo $id; ?>" />
				  </td>
               </tr>	 
				
					 
				<tr>
    				<td bgcolor="#ebebeb">productname</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" name="productname" id="productname"  value="<?php echo $productname; ?>" />
				  </td>
               </tr>
			   
			   <tr>
    				<td bgcolor="#ebebeb">productdetails</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" name="productname" id="productname"  value="<?php echo $productdetails; ?>" />
				  </td>
               </tr>
					 
					 <tr>
    					<td align="center" bgcolor="#ebebeb" colspan="2">
	                    <input type='submit' value='Update'>                      
						</td>
  					</tr> 
			  </table> 
		  </form> 
      	 

<?php		
}
else
		 {
		 $sql	    =	"DELETE from tblproduct where productid = '$id'";
	     $ressult     =	$dbObj->update($sql);
		 
		 echo "<h2 align='center' style='color:#000000'>Successfully Deleted</h2>";
		 echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=catv'>";
		 exit;
		 }
}
?>





<?php
function categoryview1($logid)
{
                
			$dbObj		=	new DBUtility();				
			$sql	=	"select * from tbltproduct ";
			$result	=	 $dbObj->select($sql);
			
				
?>
<table width="100%" class="table table-striped table-bordered">
	
	
		
		<tr>
		<td bgcolor="#EBEBEB"><a href="menu.php?page=tp"><strong>Add</strong></a></td>
		<td bgcolor="#EBEBEB" colspan="100%"><a href="menu.php?page=tpv"><strong>View</strong></a></td>
		</tr
		><tr>
			<td bgcolor="#EBEBEB" colspan="100%" align="center" class="itemviewtitle">
			  Traning Product Details
			</td>
		</tr>
	
	<tr>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>productid</strong></td>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>Productname</strong></td>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>productdetails</strong></td>
	
	</tr>

<?php					
for($i=0;$i<count($result); $i++)
{
?>
    	
	<tr>
	<td><?php echo $i+1; ?></td>
	
	<td><?php echo $result[$i]["productname"]; ?></td>
	<td><?php echo $result[$i]["productdetails"]; ?></td>
	
	<td>
	<a href="menu.php?page=tpu&action=edit&id=<?php echo base64_encode($result[$i]["productid"]); ?>">Edit</a>
	<a href="javascript:confirmDelete('menu.php?page=tpu&id=<?php echo  base64_encode($result[$i]["productid"]); ?>','Are you sure you want to delete?')">Delete</a>
</td>
	</tr>
	<?php
}
?>
</table>

<?php
}
?>





<?php
function categoryupdate1($logid){
	  	 $dbobj		=	new DBUtility();
		
		 $id = base64_decode($_GET['id']);
		 $action = $_GET['action'];
		 if($_POST)
				{
				
				$productname = $_REQUEST['productname'];
				
				
				
				$sql	=	"update tbltproduct set 
				productname  ='$productname' where productid = '$id'";
				$ressult	=	 $dbobj->update($sql);
					
		            echo "<h2 align='center' style='color:#000000'>Successfully Updated</h2>";
					echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=tpv'>";
                    exit;
					}

		 if($action=="edit")
		 {
		
			 $sql	=	"select * from tbltproduct where productid = '$id'";
			 $result = $dbobj->select($sql);
			 $productid = $result[0]["productid"];
			 $productname = $result[0]["productname"]; 
			 $productdetails = $result[0]["productdetails"];
?>	


        	<form action="<?php echo $PHP_SELF; ?>" name="addstinfo" method="post" onSubmit="return saveFunction('catupdate')">
             <table width="100%" border="1" align="center" bgcolor="#FFFFFF">
				
				<tr>
    				<td bgcolor="#ebebeb" colspan="2" align="center">
					<strong>Training Product Edit</strong>
					</td>
    			</tr>
				
				<tr>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=tp"><strong>Add</strong></a></td>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=tpv"><strong>View</strong></a></td>
				</tr>
				
				
				<tr>
    				<td bgcolor="#ebebeb">productid</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" readonly="" size="2" value="<?php echo $id; ?>" />
				  </td>
               </tr>	 
				
					 
				<tr>
    				<td bgcolor="#ebebeb">productname</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" name="productname" id="productname"  value="<?php echo $productname; ?>" />
				  </td>
               </tr>
			   
			   <tr>
    				<td bgcolor="#ebebeb">productdetails</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" name="productdetails" id="category"  value="<?php echo $productdetails; ?>" />
				  </td>
               </tr>
					 
					 <tr>
    					<td align="center" bgcolor="#ebebeb" colspan="2">
	                    <input type='submit' value='Update'>                      
						</td>
  					</tr> 
			  </table> 
		  </form> 
      	 

<?php		
} 
else
		 {
		 
		 $sql	    =	"DELETE from tbltproduct where productid = '$id'";
	
	     $ressult     =	$dbobj->update($sql);
		 
		 echo "<h2 align='center' style='color:#000000'>Successfully Deleted</h2>";
		 echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=tpv'>";
		 exit;
		 }
}
?>



<?php
function about($logid){

	$dbobj  = new DButility();
	if($_POST)
	{
		$aid  = $_REQUEST["aid"];
		$about  = $_REQUEST["about"];
		
	$sql= "insert into about(aid,about)
	      values($aid,'$about')";
	$dbobj->insert($sql);
	
	
	echo "<h2 align='center' style='color:#000000;'>Successfully added.</h2>";
			echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=a'>";
			exit;	  
	}
	
	$sql = "SELECT lpad(COALESCE(max(CONVERT(aid,UNSIGNED INTEGER)),0)+1,2,'0') as aid FROM about			";
		$result	= $dbobj->select($sql);
		
		$aid = $result[0]["aid"];
					

		 
	

?>

<form action="" method="post">
<table>
<tr>
 <td colspan="2" align="center" style="font-size:24px; font-weight:bold;">About us Setup</td>
						
</tr>
						
					 <tr>
    					<td bgcolor="#EBEBEB"><a href="menu.php?page=a"><strong>Add</strong></a></td>
						<td bgcolor="#EBEBEB"><a href="menu.php?page=av"><strong>View</strong></a></td>
                     </tr>

<tr>
   <td><input type="text" name="aid" id="aid" value="<?php echo $aid;?>" readonly="" size="2" /></td>
   </tr>
   <tr>
	<td><textarea rows="20" cols="100" name="about" placeholder="Write about us"></textarea><br></td>
    </tr>
    <tr>
	<td><input type="submit" value="submit" name="send"></td>
    </tr>
    </table>
</form>
<?php
}

?>

<?php

function aboutview()
{


$dbObj		=	new DBUtility();				
			$sql	=	"select * from about ";
			$result	=	 $dbObj->select($sql);
			
				
?>
<table width="100%" class="table table-striped table-bordered">
	
	
		
		<tr>
		<td bgcolor="#EBEBEB"><a href="menu.php?page=a"><strong>Add</strong></a></td>
		<td bgcolor="#EBEBEB" colspan="100%"><a href="menu.php?page=av"><strong>View</strong></a></td>
		</tr
		><tr>
			<td bgcolor="#EBEBEB" colspan="100%" align="center" class="itemviewtitle">
			  About Details
			</td>
		</tr>
	
	<tr>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>aid</strong></td>
		<td bgcolor="#EBEBEB" class="itemviewheader"><strong>about</strong></td>
	
	</tr>

<?php					
for($i=0;$i<count($result); $i++)
{
?>
    	
	<tr>
	<td><?php echo $i+1; ?></td>
	<td><?php echo $result[$i]["about"]; ?></td>
	
	<td>
	<a href="menu.php?page=au&action=edit&id=<?php echo base64_encode($result[$i]["aid"]); ?>">Edit</a>
	<a href="javascript:confirmDelete('menu.php?page=au&id=<?php echo  base64_encode($result[$i]["aid"]); ?>','Are you sure you want to delete?')">Delete</a>
</td>
	</tr>
	<?php
}
?>
</table>

<?php
}
?>



<?php
function aboutupdate($logid)
{

 $dbObj		=	new DBUtility();
		 $id = base64_decode($_GET['id']);
		 $action = $_GET['action'];
		 if($_POST)
				{
				
				$about = $_REQUEST['about'];
				
				
				
				$sql	=	"update about set 
				about  ='$about' where aid = '$id'";
				$ressult	=	 $dbObj->update($sql);
					
		            echo "<h2 align='center' style='color:#000000'>Successfully Updated</h2>";
					echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=av'>";
                    exit;
					}

		 if($action=='edit')
		 {
			 $sql	=	"select * from about where aid = '$id'";
			 $result = $dbObj->select($sql);
			  $aid = $result[0]["aid"];
			 $about = $result[0]["about"];
			 
			 
			 
?>	


        	<form action="<?php echo $PHP_SELF; ?>" name="addstinfo" method="post" onSubmit="return saveFunction('catupdate')">
             <table width="100%" border="1" align="center" bgcolor="#FFFFFF">
				
				<tr>
    				<td bgcolor="#ebebeb" colspan="2" align="center">
					<strong>about Edit</strong>
					</td>
    			</tr>
				
				<tr>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=a"><strong>Add</strong></a></td>
				<td bgcolor="#EBEBEB"><a href="menu.php?page=av"><strong>View</strong></a></td>
				</tr>
				
				
				<tr>
    				<td bgcolor="#ebebeb">aid</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" readonly="" size="2" value="<?php echo $id; ?>" />
				  </td>
               </tr>	 
				
					 
				<tr>
    				<td bgcolor="#ebebeb">about</td>
    			    <td bgcolor="#ebebeb">
					   <input type="text" name="productname" id="productname"  value="<?php echo $about; ?>" />
				  </td>
               </tr>
			   
			   
               
					 
					 <tr>
    					<td align="center" bgcolor="#ebebeb" colspan="2">
	                    <input type='submit' value='Update'>                      
						</td>
  					</tr> 
			  </table> 
		  </form> 
      	 

<?php		
}
else
		 {
		 $sql	    =	"DELETE from about where aid = '$id'";
	     $ressult     =	$dbObj->update($sql);
		 
		 echo "<h2 align='center' style='color:#000000'>Successfully Deleted</h2>";
		 echo "<meta http-equiv='refresh' content='1 URL=menu.php?page=av'>";
		 exit;
		 }
}
?>














<!--Start chart of account setup related functions-->

