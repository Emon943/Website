<?php
require_once 'db.php';

$xyz = "select * from tbltproduct ";
$result = mysql_query($xyz);

?>

<table width="100%" border="1" align="center">
<tr>
<th>Product Name</th>
<th>Product Details</th>
</tr>



<?php 
while($data = mysql_fetch_array($result))
{
?>

<tr>
<p><td bgcolor=""><?php echo $data["productname"];?></td></p>
<p style="text-align:justify; padding-left:2px; padding-right:5px"><td bgcolor=""><?php echo $data["productdetails"];?></td></p>

</tr>
<?php
}

?>
</table>
