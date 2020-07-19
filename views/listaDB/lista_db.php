<?php
	$conexao_db = mysqli_connect('localhost', 'root', '', 'sistema');

	// Recebendo os dados de fuction
	$pagina =filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
	$qnt_result_pg =filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

	//Calculando o início da visualização
	$inicio =($pagina * $qnt_result_pg) - $qnt_result_pg;

	$result_usuario = ("SELECT * FROM users_idoso ORDER BY idIdoso  LIMIT $inicio, $qnt_result_pg");
	$resultado_usuario = mysqli_query($conexao_db, $result_usuario);



	if(($resultado_usuario) && ($resultado_usuario->num_rows != 0)){

		?>
			<table class="table table-striped table-dark table-hover">
				<thead>
				    <tr>
					<th>id</th>
					      <th>Email</th>
					      <th>Nome</th>
						  <th>Sexo</th>
					      <th>Contato</th>
						  <th>Cidade</th>
                          <th>bairro</th>
						  <th>Categoria</th>
				    </tr>
			  </thead>
			  <tbody>
		<?php 

		while ($num_user = mysqli_fetch_assoc($resultado_usuario)) {
			?>
			<tr>
		      <td><?php echo $num_user['idIdoso'];?></td>
			  <td><?php echo $num_user['email'];?></td>

		      <td><?php echo $num_user['nome'];?></td>
			  <td><?php echo $num_user['sexo']?></td>
		      <td><?php echo $num_user['contato'];?></td>
              <td><?php echo $num_user['cidade'];?></td>
			  <td><?php echo $num_user['bairro'];?></td>
			  <td><?php echo $num_user['categoria'];?></td>
	    	</tr>
			<?php 
				}
			?>
		</tbody>
		</table>
<?php	
//Paginação - Soma a quantidade de usuários	
$result_page=("SELECT COUNT(idIdoso) AS num_result FROM users_idoso"); //query
$resultado_pg=mysqli_query($conexao_db,$result_page);               //executando o query
$row_pg =mysqli_fetch_assoc($resultado_pg);                  //lendo o resultado

//Quantidade de pagina para enviar para última página
$qnt_page=ceil($row_pg['num_result'] / $qnt_result_pg);

//Limitar os links antes e depois
$max_links = 2;


echo "<nav aria-label='paginacao'>
  <ul class='pagination'>
    <li class='page-item'>
   <span class='page-link'><a href='#' onclick='listar_user(1, $qnt_result_pg)'>Primeira</a></span>
    </li>";
    for ($page_antes=$pagina-$max_links; $page_antes <= $pagina-1; $page_antes++) { 
	//Retirar o 0 à esquerda, quando o user estar n primeira page
		if($page_antes >= 1){
			echo " <li class='page-item'><a class='page-link' href='#' onclick='listar_user($page_antes, $qnt_result_pg)'>$page_antes</a></li>"; 
		}
	}

    //Página q o user be
   echo  "<li class='page-item active' >
      <span class='page-link'>$pagina</span></li>";

    //Paginas Posteriores
	for ($page_dep=$pagina + 1; $page_dep <= $pagina + $max_links; $page_dep++) { 
		//Eliminando página q não contém dados
		if($page_dep <= $qnt_page){
	 		echo " <li class='page-item'><a class='page-link'  href='#' onclick='listar_user($page_dep, $qnt_result_pg)'>$page_dep</a></li>"; 
	 	}
	 } 

    
    echo "<li class='page-item'>
	 <span class='page-link'><a href='#' onclick='listar_user($qnt_page, $qnt_result_pg)'>ùltima</a></span>
		    </li>
		  </ul>
		</nav>";

echo "<a href='#' onclick='listar_user(1, $qnt_result_pg)'>Primeira</a>"; //First page
//Paginas Anteriores
for ($page_antes=$pagina-$max_links; $page_antes <= $pagina-1; $page_antes++) { 
	//Retirar o 0 à esquerda, quando o user estar n primeira page
	if($page_antes >= 1){
		echo "<a href='#' onclick='listar_user($page_antes, $qnt_result_pg)'>$page_antes</a>"; 
	}
}

echo " $pagina "; //Last Page

//Paginas Posteriores
for ($page_dep=$pagina + 1; $page_dep <= $pagina + $max_links; $page_dep++) { 
	//Eliminando página q não contém dados
	if($page_dep <= $qnt_result_pg){
 		echo "<a href='#' onclick='listar_user($page_dep, $qnt_result_pg)'>$page_dep</a>"; 
 	}
 } 


echo "<a href='#' onclick='listar_user($qnt_page, $qnt_result_pg)'>Última</a>"; //Last Page


	}
	else{ echo "<div class='alert alert-danger' role='alert'> Sem Records! </div>"; }


