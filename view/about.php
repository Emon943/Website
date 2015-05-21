
 <?php
 require_once 'db.php';

 $xyz = "select  * from  about";
 
 $result= mysql_query($xyz);
?>

<?php

while($data = mysql_fetch_array($result))
 
{
?>
<div class="row">
<div class="page-header">
    <h1>Who We Are?</h1>
    </div>


<p style="text-align: justify; padding-left:25px; padding-right:5px; color: #333333"><?php echo $data["about"];?></p>

</div>

<div class="row">

<div class="span4 index-three-column">
      <div class="hero-unit">
	  <img  src="img/service-6.png" alt="" style="height:110px"/>
	     <h3 id="soft">Web Design & Development</h3>
		<h5> Web Application Development is a process of developing web applications</h5>
		
     </div>
     </div>
    
     
   
	 <div class="span4 index-three-column">
      <div class="hero-unit">
       <img src="img/service-5.jpg" alt=""/>
	  <h3 id="soft">Software Development</h3>
	  
	  <h5>Give your business an Edge with picture perfect solutions.</h5>

	 
	 
     </div>
     </div>
     
    

	
	
	<div class="span4 index-three-column">
    <div class="hero-unit">
	  <img src="img/service-3.png" alt=""/>
	  <h3 id="soft">Mobile Application Development</h3>
	  
	  <h5>Mobile Applications are the new technology for new generation people.</h5>

	  
    </div>
    </div>
  </div>

<?php
}
?>

