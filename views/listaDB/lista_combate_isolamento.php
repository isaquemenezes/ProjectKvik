<?php 
	namespace Models; 

	// Recebendo os dados de fuction
	$pagina =filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
	$qnt_result_pg =filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

	//Calculando o início da visualização
	$inicio =($pagina * $qnt_result_pg) - $qnt_result_pg;
     
	$crud=new ModelCrud();

	$BFetch=$crud->selectDB("*", "users_idoso", 
					"WHERE categoria=? ORDER BY id  LIMIT $inicio, $qnt_result_pg",
					array('combateIsolamento'));
    while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
?>

	<ul>
		<li>
			<div class="card-body">
				<img  src="./assets/images/idososentado.jpg">
				<a href="<?php echo DIRPAGE."visualizar?idIdoso={$Fetch['idIdoso']}";?>">
				visualizar</a>					
			    <p><?php echo $Fetch['nome']; ?></p>
				<p><?php echo $Fetch['email']; ?></p>
			    <p><?php echo $Fetch['anoNascimento']; ?></p>
				<p><?php echo $Fetch['sexo']; ?></p>
				<p><?php echo $Fetch['contato']; ?></p>
			    <p><?php echo $Fetch['cidade']; ?></p>	
			    <p><?php echo $Fetch['bairro']?></p>
				<p><?php echo $Fetch['ead']; ?></p>
				<a href="#">Junte-se</a>
			</div>
		</li>			
<?php 
    }
?>

	</ul>	 

<?php 
	
	//Paginação - Soma a quantidade de usuários	
	$result_page=$crud->selectDB("COUNT(*) AS num_result", "users_idoso",
						"WHERE categoria=?",array('combateIsolamento'));
	$row_pg = $result_page->fetch(\PDO::FETCH_ASSOC);

	//Quantidade de pagina para enviar para última página
	$qnt_page=ceil($row_pg['num_result'] / $qnt_result_pg);

	//Limitar os links antes e depois da página atual, ou seja , se estou na page 3 mostra 1 2 e 4 5
	$max_links = 2;

	// iNÍCIO <nav>
	echo "<nav aria-label='paginacao'>
			<ul class='pagination'><li class='page-item'>
				<span class='page-link'><a href='#' onclick='listar_user(1, $qnt_result_pg)'>Primeira</a></span>
				</li>";
		for ($page_antes=$pagina-$max_links; $page_antes <= $pagina-1; $page_antes++) { 
		//Retirar o 0 à esquerda, quando o user estar n primeira page, ou seja , o número zero, não é exibido
			if($page_antes >= 1){
				echo " <li class='page-item'>
				<a class='page-link' href='#' onclick='listar_user($page_antes, $qnt_result_pg)'>$page_antes</a></li>"; 
			}
		}

	//Página atual
	echo  "<li class='page-item active' ><span class='page-link'>$pagina</span></li>";

		//Paginas Posteriores
		for ($page_dep=$pagina + 1; $page_dep <= $pagina + $max_links; $page_dep++) { 
			//Eliminando página q não contém dados
			if($page_dep <= $qnt_page){
				echo " <li class='page-item'>
				<a class='page-link'  href='#' onclick='listar_user($page_dep, $qnt_result_pg)'>$page_dep</a></li>"; 
			}
		} 
		
		echo "<li class='page-item'>
				<span class='page-link'><a href='#' onclick='listar_user($qnt_page, $qnt_result_pg)'>última</a></span>
				</li> </ul></nav>"; // ClOSE </nav>
				



