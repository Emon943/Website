<?php
require_once 'db.php';

$xyz = "select * from tblproduct ";
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

<tr class="success">


<td bgcolor="#FFFFFF"><?php echo $data["productname"];?></td>
<td bgcolor="#FFFFFF"><p style="text-align:justify; padding-left:2px; padding-right:5px"><?php echo $data["productdetails"];?></p></td>
</tr>
<?php
}

?>
</table>
