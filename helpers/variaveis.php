<?php
     
     if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['Acao'])){  $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);  }
     else{ $Acao="";  }

     if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);  }
     else{ $Id=0;  }

     if(isset($_POST['id'])){ $id_idoso=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['id'])){ $id_idoso=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $id_idoso=0; }

     if(isset($_POST['nome'])){ $Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['nome'])){ $Nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Nome=""; }

     if(isset($_POST['email'])){ $Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['email'])){ $Email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Email=""; } 

     if(isset($_POST['contato'])){ $Contato=filter_input(INPUT_POST,'contato',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['contato'])){ $Contato=filter_input(INPUT_GET,'contato',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Contato=""; } 

     if(isset($_POST['anoNascimento'])){ $AnoNascimento=filter_input(INPUT_POST,'anoNascimento',FILTER_SANITIZE_SPECIAL_CHARS);  }
     elseif(isset($_GET['anoNascimento'])){ $AnoNascimento=filter_input(INPUT_GET,'anoNascimento',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $AnoNascimento="";  } 

     if(isset($_POST['sexo'])){ $Sexo=filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);  }
     elseif(isset($_GET['sexo'])){ $Sexo=filter_input(INPUT_GET,'sexo',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Sexo=""; }

     if(isset($_POST['cidade'])){ $Cidade=filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['cidade'])){ $Cidade=filter_input(INPUT_GET,'cidade',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Cidade="";  }

     if(isset($_POST['bairro'])){ $Bairro=filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['bairro'])){ $Bairro=filter_input(INPUT_GET,'bairro',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Bairro=""; }

     // Radio para questionamento sobre Atendimento à distância
     if(isset($_POST['ead'])){ $Radio=filter_input(INPUT_POST,'ead',FILTER_SANITIZE_SPECIAL_CHARS); }
     elseif(isset($_GET['ead'])){ $Radio=filter_input(INPUT_GET,'ead',FILTER_SANITIZE_SPECIAL_CHARS); }
     else{ $Radio=""; }


