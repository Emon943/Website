function addRow()
     {
		  var tbl = document.getElementById('mySampleTable');
          // grab how many rows are in the table
		  var lastRow = tbl.rows.length;
          var iteration = lastRow;
          
		  var row = tbl.insertRow(lastRow);
		  
          var celldesignation = row.insertCell(0);
		  var slno = document.createTextNode(lastRow);
          celldesignation.appendChild(slno);
		  
          
		  
		  var cellnarration = row.insertCell(1);
          var paynarration = document.createElement('input');
          paynarration.type = 'text';
          paynarration.name = 'options[]' //+ iteration;
          paynarration.id = 'options' + iteration;
		  paynarration.className = 'form-control';
          cellnarration.appendChild(paynarration);
		  
		  var cellnarration = row.insertCell(2);
          var correctanswer = document.createElement('input');
          correctanswer.type = 'checkbox';
          correctanswer.name = 'correctanswer[]';
		  correctanswer.className = 'correctanswer';
		  correctanswer.value = lastRow;
          cellnarration.appendChild(correctanswer);
          
     }
	 
	 
	 
	 function removeRow()
     {
          // grab the element again!
          var tbl = document.getElementById('mySampleTable');
          // grab the length!
          var lastRow = tbl.rows.length;
          // delete the last row if there is more than one row!
          if (lastRow > 2) tbl.deleteRow(lastRow -1);
		  
		  dynamicrowcalculation();
     }




function saveFunction(action)
{
	var theform = document.forms[0].name;
	if(action=="subcatadd")
	{
				   var category = document.getElementById('category').value;
				   var subcategory = document.getElementById('subcategory').value;
				   if(category=="")
				   {
					   alert("Please select category");
					   return false;
					   }
				   else if(subcategory=="")
				   {
					   alert("Please enter subcategory");
					   return false;
					   }
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	else if(action=="districtupdate")
	{
				   var districtname = document.getElementById('districtname').value;
				   if(districtname=="")
				   {
					   alert("Please enter district name");
					   return false;
					   }
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	else if(action=="districtadd")
	{
				   var districtname = document.getElementById('districtname').value;
				   var divisionid = document.getElementById('divisionid').value;
				   if(divisionid=="")
				   {
					   alert("Please select district");
					   return false;
					   }
				   else	if(districtname=="")
				   {
					   alert("Please enter district name");
					   return false;
					   }   
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	else if(action=="districtadd")
	{
				   var thananame = document.getElementById('thananame').value;
				   if(thananame=="")
				   {
					   alert("Please enter thana name");
					   return false;
					   }
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	  
	  else if(action=="unionupdate")
	{
				   var unionname = document.getElementById('unionname').value;
				   if(unionname=="")
				   {
					   alert("Please enter union name");
					   return false;
					   }
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	  
	  else if(action=="wordupdate")
	{
				   var wordname = document.getElementById('wordname').value;
				   if(wordname=="")
				   {
					   alert("Please enter word name");
					   return false;
					   }
					else
					{
						
							if (confirm("Do you want to save?")) 
							{
							return true;
							}
							else
							{
							return false;
							}
						
						
						}
				  
	  }
	  
	
			
			
			
			
			if (confirm("Do you want to save?")) 
			{
			  document.forms[0].submit();
			  //return true;
			}
			else
			{
			  return false;
			}
}



function confirmDelete(delUrl,msg) {
				if (confirm(msg)) {
					document.location = delUrl;
				}
			}

/*daynamically totoal transection amount calculation*/

function dynamicrowcalculation()
{
  var payamtelements = document.forms[0].elements['amount'];
  var totalpayment = 0;
  var payamt;
  if(isNaN(payamtelements.length))
  {
	document.getElementById('totaltransectionamt').value = document.getElementById('amount').value;
  }
  else
  {
   
		  
		  for(var i = 0; i < payamtelements.length; i++)
		   {
				 if(isNaN(payamtelements[i].value))
				 {
				   alert("Please enter only number");
				   exit;
				 }
				 
				 if(isNaN(payamtelements[i].value)||payamtelements[i].value=="")
				 {
				   payamt = 0;
				 }
				 else
				 {
				   payamt = parseInt(payamtelements[i].value);
				 }
				 totalpayment = totalpayment+payamt;
			}
			document.getElementById('totaltransectionamt').value = totalpayment;
	}		
		 
}
/*daynamically totoal transection amount calculation*/



/*voucher generation*/
function vouchergen()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("vouchershow").innerHTML=xmlhttp.responseText;
    }
  }
var crdrtr = document.getElementById('crdrtr').value;
var voucherdate = document.getElementById('voucherdate').value;
var queryString = "?crdrtr=" + crdrtr + "&voucherdate=" + voucherdate;
xmlhttp.open("GET","voucherajaex.php"+queryString,true);
xmlhttp.send();
}

/*voucher generation*/





////view by month year

function viewmyby(el){	 
	var myradio = el.value;
	if(myradio == "month")
	{
	   document.getElementById('monthid').style.display = 'block' ;
	   document.getElementById('yearid').style.display = 'block' ;
	   document.getElementById('fixeddurationid').style.display = 'none';
	   
	   }
	 else if(myradio == "onlyyear")
	 {
	   document.getElementById('yearid').style.display = 'block';
	   document.getElementById('monthid').style.display = 'none';
	   document.getElementById('fixeddurationid').style.display = 'none';
	   
	   }
	 else if(myradio == "fixedduration")
	 {
	   document.getElementById('fixeddurationid').style.display = 'block';
	   document.getElementById('yearid').style.display = 'none';
	   document.getElementById('monthid').style.display = 'none';
	   
	   } 
	 else if(myradio == "all")
	 {
	   document.getElementById('yearid').style.display = 'none';
	   document.getElementById('monthid').style.display = 'none';
	   document.getElementById('fixeddurationid').style.display = 'none';
	   } 
	    
    
}
////view by month year





////accounting setup function




function ajaxfunction(action)
{

if(action == "subcatadd")
{
var ajaxshowdivid = "showsubcatid";	
var category =document.getElementById('category').value;
var queryString = "?category=" + category + "&action=" + action;
}
else if(action == "columnmatch")
{
var ajaxshowdivid = "showsubcolumnmatch";	
var rowsno =document.getElementById('rowsno').value;
var columnno =document.getElementById('columnno').value;
var queryString = "?rowsno=" + rowsno + "&columnno=" + columnno + "&action=" + action;
}
else if(action == "itemitadd")
{
var ajaxshowdivid = "showitemid";	
var subcategory =document.getElementById('subcategory').value;
var queryString = "?subcategory=" + subcategory + "&action=" + action;
}
else if(action == "districtadd")
{
var ajaxshowdivid = "showdistrictid";	
var divisionid =document.getElementById('divisionid').value;
var queryString = "?divisionid=" + divisionid + "&action=" + action;
}
else if(action == "thanaadd")
{
var ajaxshowdivid = "showthanaid";	
var thanaid =document.getElementById('thanaid').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "unionadd")
{
var ajaxshowdivid = "showunionid";	
var thanaId =document.getElementById('thanaId').value;
var queryString = "?thanaId=" + thanaId + "&action=" + action;
}
else if(action == "worddistadd")
{
var ajaxshowdivid = "showthanaid";	
var districtid =document.getElementById('districtid').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "wordthanaadd")
{
var ajaxshowdivid = "showunionid";	
var thanaid =document.getElementById('thanaId').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "wordwordadd")
{
var ajaxshowdivid = "showwordid";	
var unionId =document.getElementById('unionId').value;
var queryString = "?unionId=" + unionId + "&action=" + action;
}

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById(ajaxshowdivid).innerHTML=xmlhttp.responseText;

    }
  }


xmlhttp.open("GET","commonajaxfunction.php"+queryString,true);
xmlhttp.send();
}





function homdistrictt()
{
/*if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("psshow").innerHTML=xmlhttp.responseText;
    }
  }
var homedistrict =document.getElementById('homedistrict').value;
//var cvcode =document.getElementById('probperiod').value;
//var update =document.getElementById('update').value;
//var queryString = "?post=" + post + "&update=" + update;
var queryString = "?homedistrict=" + homedistrict;
xmlhttp.open("GET","homethanadistrict.php"+queryString,true);
xmlhttp.send();
var contentID = document.getElementById("content");
contentID.removeChild(document.getElementById("delete"));
}




function areacode()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showareacode").innerHTML=xmlhttp.responseText;

    }
  }
var zone =document.getElementById('zone').value;
var queryString = "?zone=" + zone;
xmlhttp.open("GET","areacodeajax.php"+queryString,true);
xmlhttp.send();
}



function branchofficefnc(el) {
if (el.value == "other") {
document.getElementById('other').style.display = "block";
document.getElementById('branchdiv').style.display = "none";
}
else {
document.getElementById('branchdiv').style.display = "block";
document.getElementById('other').style.display = "none";
document.getElementById('who').value = '';
}
}

function exemptionamount(el) {
if (el.value == "other") {
document.getElementById('exemptionamount').style.display = "block";
}
else {
document.getElementById('exemptionamount').style.display = "none";
}
}
function exemptionamountcompare(el) {
if (el.value == "yes") {
document.getElementById('exemptionamountcompare').style.display = "block";
}
else {
document.getElementById('exemptionamountcompare').style.display = "none";
}
}




function zoneforbranch()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showzone").innerHTML=xmlhttp.responseText;

    }
  }
var zoneforareaid = document.getElementById('zoneforareaid').value;
var queryString = "?zoneforareaid=" + zoneforareaid;

xmlhttp.open("GET","zoneforbranchajax.php"+queryString,true);
xmlhttp.send();
}