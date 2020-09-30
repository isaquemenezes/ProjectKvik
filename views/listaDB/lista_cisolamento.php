<?php 
	namespace Models; 

	// Recebendo os dados de fuction
	$pagina =filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
	$qnt_result_pg =filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

	//Calculando o início da visualização
	$inicio =($pagina * $qnt_result_pg) - $qnt_result_pg;
     
	$crud=new ModelCrud();

	$BFetch=$crud->selectDB("*", "users_idoso", "WHERE categoria=? ORDER BY id  LIMIT $inicio, $qnt_result_pg",
							array('combateIsolamento'));
    while($users_idoso=$BFetch->fetch(\PDO::FETCH_ASSOC)){
?>
                                <div class="content">
									<header class="align-center">
										<h2>Nome <?php echo $users_idoso['nome']; ?></h2>
									</header>
								
									<p style="font-size: 22px;">Dados:</p>
									<p>
										<ul class="text-muted small">
											<li><?php echo $users_idoso['cidade']; ?></li>
											<li><?php echo $users_idoso['bairro']; ?></li>
											<li><?php echo $users_idoso['contato']; ?></li>
											<li><?php echo $users_idoso['']; ?></li>
											<li><?php echo $users_idoso['']; ?></li>
										</ul>
									</p>
                                    <p>Com o aumento da expectativa de vida, o mundo observa a formação de um exército de solitários. 
									Nos últimos anos, diversos estudos têm apontado uma forte associação entre a solidão e a incidência 
									de doenças crônicas em idosos. O trabalho, liderado pelo psicólogo John Cacioppo, descobriu que o estresse provocado 
									por essa sensação induz respostas inflamatórias nas células, afetando, entre outras coisas, a produção 
									dos leucócitos, estruturas que defendem o organismo de infecções.<br></p>

									<p style="font-size: 22px;">Pré-Requitos:</p>
									<p>Muita vontade de ajudar e fazer a diferença.</p>
									<footer class="align-center">
								        <a href="<?php echo DIRPAGE.'combate-ao-isolamento';?>" class="button special">junta-se</a>
									</footer>



</div>
						
<?php 
    }
?>
<?php 
	
	//Paginação - Soma a quantidade de usuários	
	$result_page=$crud->selectDB("COUNT(id) AS num_result", "users_idosos", "WHERE categoria=?", array('combateIsolamento'));
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
				</li></ul></nav>"; 
				



                     