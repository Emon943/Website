<?php
include '../config/config.php';
$dbObj		=	new DBUtility();
$zoneforareaid = $_GET["zoneforareaid"];
if($zoneforareaid != "")
{
?>
						<select name="areacode"  style="width:150px;">
						<option value="" selected="selected">Select area..</option>
						<?php
						$dbObj		=	new DBUtility();
						$sql	=	"select * from tblarea where zoneCode='$zoneforareaid'";
		                $result	=	 $dbObj->select($sql);
						for($i=0;$i<count($result); $i++)
                        {
                        ?>
						<option value="<?php echo $result[$i]["areaCode"]; ?>">
						<?php echo $result[$i]["areaName"]; ?>
						</option>
						<?php  }?>
						</select>
						
						

<?php
}
?>

