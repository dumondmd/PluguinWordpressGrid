 <?php  
 include('conexao.php');   
 $sql = "INSERT INTO grid(uf, cod, razao, fantasia, endereco, bairro, cep, telefone, cidade)
  VALUES('".$_POST["reg_uf"]."', '".$_POST["reg_cod"]."', '".$_POST["reg_razao"]."', '".$_POST["reg_fantasia"]."', '".$_POST["reg_endereco"]."', '".$_POST["reg_bairro"]."', '".$_POST["reg_cep"]."', '".$_POST["reg_telefone"]."',  '".$_POST["reg_cidade"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Registro adicionado!';  
 } 
 else {
  	echo 'Erro na adicação do novo registro!';  	
  } 
 ?>  