<?php
include('conexao.php');   
$endereco = $_POST["endereco"];

$sql = "SELECT * FROM grid WHERE uf like '%" . $endereco . "%'
          OR cod like '%" . $endereco . "%'
          OR razao like '%" . $endereco . "%'
          OR fantasia like '%" . $endereco . "%'
          OR endereco like '%" . $endereco . "%'
          OR bairro like '%" . $endereco . "%'
          OR cep like '%" . $endereco . "%'
          OR telefone like '%" . $endereco . "%'
          OR cidade like '%" . $endereco . "%' ";

 $result = mysqli_query($connect, $sql);
 

  if(mysqli_num_rows($result) > 0)  { 
  $html = '';
while($row = mysqli_fetch_array($result))  
      {
      $html .= 
      '<table class="tabinfo">		  
  		  <tr>
  		    <td>
        		<p id="titulo_grid">
        		  '.$row['fantasia'].'
        		</p>
         		        
  		    	<p class="corpo_grid">
  		    		'.$row['endereco'].'
  		    	</p>

            <p class="corpo_grid">
              '.$row['cidade'].'-'.$row['uf'].'
            </p>	
  		    	
  		    	<p class="corpo_grid">
  		    		'.$row['telefone'].'
  		    	</p>
  		    </td>          
  		  </tr>		  
		  </table>';
      }
      } else {
      	 $html = 'Sem informações';
      }
echo $html;

