<?php
include '../config/config.php';
$dbObj		=	new DBUtility();

$action = $_REQUEST["action"];
    if($action == "subcatadd")
	{
		$category = $_REQUEST["category"];
		$nextid = $_REQUEST["category"]."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(subcatId,UNSIGNED INTEGER)),0)+1,4,'0')
				else '$nextid' 
				end as nextsubcatid 
				FROM tblsubcategory where substring(subcatId,1,2) like '%$category%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextsubcatid = $result[0]["nextsubcatid"];
		echo "<input type='text' name='subcatid'  value='$nextsubcatid' readonly='' size='5'style='margin-left:10px' >";
   }
   elseif($action == "itemadd")
	{
		$category = $_REQUEST["category"];
?>


<select name="subcategory" id="subcategory" onchange="ajaxfunction('itemitadd')" style="width:100px; margin-left:10px;">
							<option value="">Select..</option>
							<?php
							$sql	=	"select * from tblsubcategory 
							where substring(subcatId,1,2) like '%$category%' order by subCategory";
							$result	=	 $dbObj->select($sql);
							for($i=0;$i<count($result); $i++)
							{
							?>
							<option value="<?php echo $result[$i]["subcatId"];?>">
							<?php echo $result[$i]["subCategory"]; ?></option>
							<?php  }?>
							</select> 

<?php		
   }
   elseif($action == "itemitadd")
	{
		$subcategory = $_REQUEST["subcategory"];
		$nextid = $_REQUEST["subcategory"]."001";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(itemId,UNSIGNED INTEGER)),0)+1,7,'0')
				else '$nextid' 
				end as nextsubcatid 
				FROM tblitem where substring(itemId,1,4) like '%$subcategory%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextsubcatid = $result[0]["nextsubcatid"];
		echo "<input type='text' name='itemid'  value='$nextsubcatid' readonly='' size='10'style='margin-left:10px' >";
   }
   elseif($action == "districtadd")
	{
		$divisionid = $_REQUEST["divisionid"];
		$nextid = $divisionid."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(districtId,UNSIGNED INTEGER)),0)+1,4,'0')
				else '$nextid' 
				end as nextcommid 
				FROM tbldistrict where substring(districtId,1,2) like '%$divisionid%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextpackageid = $result[0]["nextcommid"];
		echo "<input type='text' name='districtid'  value='$nextpackageid' readonly='' size='5'style='margin-left:10px' >";
   }
   elseif($action == "thanaadd")
	{
		$thanaid = $_REQUEST["thanaid"];
		$nextid = $thanaid."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(thanaId,UNSIGNED INTEGER)),0)+1,6,'0')
				else '$nextid' 
				end as nextcommid 
				FROM tblthana where substring(thanaId,1,4) like '%$thanaid%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextpackageid = $result[0]["nextcommid"];
		echo "<input type='text' name='thanaid'  value='$nextpackageid' readonly='' size='5'style='margin-left:10px' >";
   }
   
   elseif($action == "unionadd")
	{
		$thanaid = $_REQUEST["thanaId"];
		$nextid = $thanaid."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(unionId,UNSIGNED INTEGER)),0)+1,8,'0')
				else '$nextid' 
				end as nextcommid 
				FROM tblunion where substring(unionId,1,6) like '%$thanaid%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextpackageid = $result[0]["nextcommid"];
		echo "<input type='text' name='unionid'  value='$nextpackageid' readonly='' size='10' style='margin-left:10px' >";
   }
   elseif($action == "wordadd")
	{
		$thanaid = $_REQUEST["thanaId"];
		$nextid = $thanaid."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(unionId,UNSIGNED INTEGER)),0)+1,8,'0')
				else '$nextid' 
				end as nextcommid 
				FROM tblunion where substring(unionId,1,6) like '%$thanaid%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextpackageid = $result[0]["nextcommid"];
		echo "<input type='text' name='unionid'  value='$nextpackageid' readonly='' size='10' style='margin-left:10px' >";
   }
   elseif($action == "wordwordadd")
	{
		$unionId = $_REQUEST["unionId"];
		$nextid = $unionId."01";
		$sql = "SELECT 
				case
				when count(*)>0 
				then 
				lpad(COALESCE(max(CONVERT(wordId,UNSIGNED INTEGER)),0)+1,10,'0')
				else '$nextid' 
				end as nextcommid 
				FROM tblword where substring(wordId,1,8) like '%$unionId%'
				";
		$result	=	 $dbObj->select($sql);
		
		$nextpackageid = $result[0]["nextcommid"];
		echo "<input type='text' name='wordid'  value='$nextpackageid' readonly='' size='10' style='margin-left:10px' >";
   }
   elseif($action == "worddistadd")
	{
		$districtid = $_REQUEST["districtid"];
		?>
		
		<select name="homethana" id="thanaId" style="width:100px; margin-left:10px;" onchange="ajaxfunction('wordthanaadd')">
            <option value="">Select..</option>
			<?php
			$sql	=	"select * from tblthana where substring(thanaId,1,4) like '%$districtid%' order by thanaName";
			$resultthanacode	=	 $dbObj->select($sql);
			
			for($i=0;$i<count($resultthanacode); $i++)
			{
			?>
			<option value="<?php echo $resultthanacode[$i]["thanaId"];?>">
			<?php echo $resultthanacode[$i]["thanaName"]; ?>
			</option>
			<?php  }?>
           </select>
		
		
		<?php
   }
  
   elseif($action == "columnmatch")
	{
		$rowsno = $_REQUEST["rowsno"];
		$columnno = $_REQUEST["columnno"];
		$k = 0;
		?>
		
		<table width="100%"   class="table table-striped table-bordered" id="mySampleTable">
		<tr>
		<?php 
		  for ($i = 'A'; $i <= 'Z'; $i++){
        ?>
    
		<td bgcolor="#EDEDED"> <?php  echo "$i ";?> </td>
		<?php 
		    $k++;
		    if($k == $columnno)
			break;
				
			}
			
		
		echo "</tr>";
		  for ($rn = 0; $rn <$rowsno; $rn++){
        
		echo "<tr>";	
	  
		  for ($i = 1; $i <=$columnno; $i++){
		  $columnname = "column$i"."[]";
        ?>
    
		<td bgcolor="#EDEDED"> <input type="text" name="column1[]" class="form-control" /> </td>
		<?php 
		    
			}
			
		
		echo "</tr>";
		
		    
			}
			
		?>
		</table>
		
		
		<?php
   }
  
                  
 
?>

                        