<?php 

function doAction($controller, $action, $data){
	switch ($controller){
		case 'user':
		
		switch ($action) {
			case 'list':
				# code...
				// echo 'LOLOLOLOL';
				$c = new UsersController();
				$c->listUsers();
			break;
			case 'delete':
				# code...
			break;
			case 'add':
				# code...
			break;
			case 'modify':
				# code...
			break;
			
			default:
				echo "Sorry :(";
			break;
		}

		break;

		default:

		break;
	}	
}
