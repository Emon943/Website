<?php

switch ($page){
	
   case 'about':
        require_once 'view/about.php';
		break;
		
		case 'Portfolio':
        require_once 'view/Portfolio.php';
		break;
		case 'rate':
        require_once 'view/rate.php';
		break;
		
  case'training':
       require_once'view/training_product.php';
      	break;	
		
		
		case 'contact_us':
		require_once 'view/contact_form.php';
		break;
		
	case 'product':
		require_once 'view/product.php';
		break;
		
	case 'show':
		require_once 'view/show.php';
		break;
		
		
	default: 
		require_once 'view/home.php';
		break;	
}


?>