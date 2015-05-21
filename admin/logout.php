<?php
session_start();
$user_name	=	$_SESSION['user'];
if (isset($_COOKIE[$user_name])) 
{
	setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
$logoutpage = $_GET['act'];
header("location:../index.php");
/*switch($logoutpage)
{
case 'logoutpersonal'                  :  header("location:index.php?Page=joining");
                                          break;
case 'logouteducation'                 :  header("location:index.php?Page=education");
                                          break; 
case 'logoutemptraining'               :  header("location:index.php?Page=emptraining");
                                          break;
case 'logouttraining'                  :  header("location:index.php?Page=training");
                                          break;
case 'logoutsftraining'                :  header("location:index.php?Page=sftraining");
                                          break;

case 'logoutexperience'                :  header("location:index.php?Page=experience");
                                          break;										  
case 'logoutposting'                   :  header("location:index.php?Page=posting");
                                          break;
case 'logoutpromotion'                 :  header("location:index.php?Page=promotion");
                                          break;
case 'logoutmis'                       :  header("location:index.php?Page=mis");
                                          break;
case 'logoutclearance'                 :  header("location:index.php?Page=clearance");
                                          break;
case 'logoutselection'                 :  header("location:index.php?Page=selection");
                                          break;	
case 'logoutreceiving'                 :  header("location:index.php?Page=receive");
                                          break;											  									  
case 'logoutleave'                     :  header("location:index.php?Page=leave");
                                          break;											  									  
case 'logoutletter'                    :  header("location:index.php?Page=letter");
                                          break;											  									  

case 'logoutsalary'                    :  header("location:index.php?Page=salary");
                                          break;									  		  									  
case 'logoutguarantor'                 :  header("location:index.php?Page=guarantor");
                                          break;									
case 'logoutevaluation'                :  header("location:index.php?Page=evaluation");
                                          break;									
case 'logoutselfevaluation'            :  header("location:index.php?Page=selfevaluation");
                                          break;									
case 'logoutimsvevaluation'            :  header("location:index.php?Page=imsvevaluation");
                                          break;									
case 'logoutsvevaluation'              :  header("location:index.php?Page=svevaluation");
                                          break;									
case 'logoutpf'                        :  header("location:index.php?Page=pf");
                                          break;	
case 'logoutpfhead'                    :  header("location:index.php?Page=pfhead");
                                          break;
case 'logoutpfsecretary'               :  header("location:index.php?Page=pfsecretary");
                                          break;
case 'logoutpfloanself'                :  header("location:index.php?Page=pfloanself");
                                          break;
case 'logoutpfloanimsv'                :  header("location:index.php?Page=pfloanimsv");
                                          break;
case 'logoutpfloandepthead'            :  header("location:index.php?Page=pfloandepthead");
                                          break;

case 'logoutpfloancheck'               :  header("location:index.php?Page=pfloancheck");
                                          break;
case 'logoutpfloantrustee'             :  header("location:index.php?Page=pfloantrustee");
                                          break;
case 'logoutpfloantrusteechairman'     :  header("location:index.php?Page=pfloantrusteechairman");
                                          break;

case 'logouttaxamount'                 :  header("location:index.php?Page=taxamount");
                                          break;
case 'logoutappointletter'             :  header("location:index.php?Page=appointletter");
                                          break;
case 'logoutloan'                      :  header("location:index.php?Page=loan");
                                          break;
case 'logoutpfloandepthead'            :  header("location:index.php?Page=pfloandepthead");
                                          break;                                          									  
case 'logoutpfdistribution'            :  header("location:index.php?Page=pfdistribution");
                                          break; 
case 'logoutresign'                    :  header("location:index.php?Page=resign");
                                          break; 
case 'logoutresignhrd'                 :  header("location:index.php?Page=resignhrd");
                                          break;  
case 'logoutsettelement'               :  header("location:index.php?Page=settelement");
                                          break;
case 'logoutpayment'                   :  header("location:index.php?Page=payment");
                                          break;  

case 'logoutconfirmation'              :  header("location:index.php?Page=confirm");
                                          break;
case 'logoutidcard'                    :  header("location:index.php?Page=idcard");
                                          break;
}*/
?> 
