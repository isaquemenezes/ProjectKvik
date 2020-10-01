<?php 
	namespace Models;

	$crud =new ModelCrud();

	$select_c = $crud->selectDB("*", "users_idoso", "", array());
	$user_c = $select_c->fetch(\PDO::FETCH_ASSOC);
	
?>	 
