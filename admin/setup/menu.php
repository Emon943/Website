<?php session_start(); 
if(!$_SESSION['user'])

{

		echo "<div style='width:600px; height:40px;background:#f6f6f6;float:left;margin-left:200px;padding-top:10px;

		border:#660000 1px solid;font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px; color:#0099CC' 

		align='center'>";

		echo "Sorry you have to login first";

		echo "<meta http-equiv='refresh' content=3;URL=../index.php>";

		exit();

}
set_time_limit(300);
include '../config/config.php';
include 'function_setup.php';
$logid = $_SESSION['user'];
$dbObj		=	new DBUtility();
///company name and logo
///company name and logo
?>
<!DOCTYPE html>
<html>

<head>
<title>SETUP</title>
<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include bootstrap stylesheets -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery-1.9.1.min.js"></script>
<script language="JavaScript" src="calander/cal2.js" type="text/javascript"></script>
<script language="JavaScript" src="calander/cal_conf2.js" type="text/javascript"></script>
<script type="text/javascript" src="script/function.js"></script>
<script type="text/javascript" src="script/ddaccordion.js">

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>


<script type="text/javascript">


ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='plus.gif' class='statusicon' />", "<img src='minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})






///eliminate duplicate items
/*
$(document).ready( function(){
        var a = new Array();
        $("select").children("option").each(function(x){
                test = false;
                b = a[x] = $(this).val();
                for (i=0;i<a.length-1;i++){
                        if (b ==a[i]) test =true;
						
                }
				if (test) $(this).remove();
        })
}); */
$(document).ready(function(){

$('.correctanswer').click(function() {

    if ( $(this).attr('checked')) {
       // $(this).attr('checked', false);
    } else {
       // $(this).attr('checked', 'checked');
    }
});

});
</script>

</head>

<body>
<div class="container">
<table width="100%" class="table table-striped table-bordered">
 <tr>
   <td valign="top" colspan="2">

		<table width="100%" height="100%" border="0">
			<tr>
				<td align="left" width="12%" valign="top">
				<img class="img-circle" alt="Cinque Terre" width="100%" border="0" src="../images/<?php echo $companylogo;?>" />
				</td>
				<td align="center" width="80%" valign="middle"><h2>System Automation</h2></td>
			</tr>
		</table>
    </td>
</tr>			

<tr>
   <td valign="top" width="10%">
<div class="glossymenu">
<a class="menuitem" href="menu.php">Home</a>


<a class="menuitem submenuheader" href="menu.php" >Product</a>
<div class="submenu">
	<ul>
	<li><a href="menu.php?page=cat">Software Product</a></li>
	<li><a href="menu.php?page=tp">Training product</a></li>
	<li><a href="menu.php?page=a">About Us</a></li>
	</ul>
</div>

<a class="menuitem submenuheader" href="menu.php" >Supplier</a>
<div class="submenu">
	<ul>
	<li><a href="menu.php?page=spl">Supplier</a></li>
	</ul>
</div>

<a class="menuitem submenuheader" href="menu.php" >Customer</a>
<div class="submenu">
	<ul>
	<li><a href="menu.php?page=cst">Customers</a></li>
	</ul>
</div>
<!--
<a class="menuitem submenuheader" href="menu.php" >Location</a>
<div class="submenu">
	<ul>
	<li><a href="menu.php?page=div">Division</a></li>
	<li><a href="menu.php?page=dist">District</a></li>
	<li><a href="menu.php?page=thana">Thana</a></li>
	<li><a href="menu.php?page=union">Union/Municipal</a></li>
	<li><a href="menu.php?page=word">Word</a></li>
	</ul>
</div>

<a class="menuitem submenuheader" href="menu.php" >OFFICE SETUP</a>
<div class="submenu">
	<ul>
			<li><a href="menu.php?page=officetype">Office type setup</a></li>
			<li><a href="menu.php?page=officesetup">Office setup</a></li>
			<li><a href="menu.php?page=zone">Zone setup</a></li>
			<li><a href="menu.php?page=area">Area setup</a></li>
			<li><a href="menu.php?page=branch">Branch setup</a></li>
	
	</ul>
</div>
-->
<a class="menuitem submenuheader" href="menu.php" >User</a>
<div class="submenu">
	<ul>
			<li><a href="menu.php?page=user">User</a></li>
	</ul>
</div>




<a class="menuitem" href="logout.php?act=logout">Logout</a>
</td>

<td valign="top">

      <?php
    			$page	    =	$_REQUEST['page'];
                switch($page)
                {
                    case	'cat'			                   :		category();
                                                                        break;
  				    case	'catv'			                   :		categoryview($logid);
                                                                        break;
					case	'catup'         	               :	 	categoryupdate($logid);
                   	                                                    break;
					case	 'tp'			                   :		category1();
                                                                         break; 
					case   'tpv'                               :       categoryview1($logid);
					                                                     break;
					case    'tpu'	                           :      categoryupdate1($logid);
					       
						                                               break;
					case 'a'                                    :  about($logid);
					                                                 break;       
					
					case 'av'                                    :  aboutview();
					                                                 break;   
					
					case 'au'                                     :aboutupdate($logid);
					                                                 break;
					//sub category
					
					                          													 
					
					default									   :		welcome();
						
				}
			?>


</td>

</tr>

</table>
</div>
</body>
</html>