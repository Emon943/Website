<?php
include '../config/config.php';
$dbObj		=	new DBUtility();
$q = $_GET["zone"];
if($q==true)
{
$dbObj		=	new DBUtility();

$sql="select * from tblarea";
$result	=	 $dbObj->select($sql);
for($i=0;$i<count($result);$i++)
{
if ($q == substr($result[$i]["areaCode"],0,strlen($q)))
      {
      $str = $result[$i]["areaCode"];
      $num[]= (int)$str;
      $grcode = max($num);
	  $show=1;
   }
/*else{
     $grcode=0;
	 }*/
	 

}
?>
 <?php 
 if($show==1)
 {
 ?>
 <input type="text" name="areacodebyzone"  value="<?php echo "0".($grcode+1); ?>"
 readonly="" onfocus="this.blur()" size="5" >
 <?php
 }
 else
 {
 ?>
 <input type="text" name="areacodebyzone"  value="<?php echo $q."0".($grcode+1); ?>"
 readonly onfocus="this.blur()" size="5" >
<?php
}}

?>
                        