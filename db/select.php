<?php  
 include('conexao.php'); 
 $output = '';  
 $sql = "SELECT * FROM grid ORDER BY uf";  
 $result = mysqli_query($connect, $sql);  
 $output .= '   
      <div>  
           <table class="tabela_grid">  
                <tr class="tr_tabela_grid">  
                     <th>UF</th>  
                     <th>COD</th>
                     <th>Razão</th>
                     <th>Fantasia</th>
                     <th>Endereço</th>
                     <th>Bairro</th>
                     <th>CEP</th>
                     <th>Telefone</th>
                     <th>Cidade</th>                
                </tr>';  
  
      $output .= '  
           <tr class="tabela_grid_new">                
                <td class="reg_uf" id="reg_uf" contenteditable></td>  
                <td class="reg_cod" id="reg_cod" contenteditable></td>  
                <td class="reg_razao" id="reg_razao" contenteditable></td>  
                <td class="reg_fantasia" id="reg_fantasia" contenteditable></td>                
                <td class="reg_endereco" id="reg_endereco" contenteditable></td>  
                <td class="reg_bairro" id="reg_bairro" contenteditable></td>  
                <td class="reg_cep" id="reg_cep" contenteditable></td>  
                <td class="reg_telefone" id="reg_telefone" contenteditable></td>
                <td class="reg_cidade" id="reg_cidade" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn-success">+</button></td>  
           </tr>  
      '; 

 if(mysqli_num_rows($result) > 0)  
 {  
    
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr class="tabela_grid_select">                                                     
                     <td class="reg_uf" data-id1="'.$row["id"].'" contenteditable>'.$row["uf"].'</td>
                     <td class="reg_cod" data-id2="'.$row["id"].'" contenteditable>'.$row["cod"].'</td>  
                     <td class="reg_razao" data-id3="'.$row["id"].'" contenteditable>'.$row["razao"].'</td>  
                     <td class="reg_fantasia" data-id4="'.$row["id"].'" contenteditable>'.$row["fantasia"].'</td>                                          
                     <td class="reg_endereco" data-id5="'.$row["id"].'" contenteditable>'.$row["endereco"].'</td>  
                     <td class="reg_bairro" data-id6="'.$row["id"].'" contenteditable>'.$row["bairro"].'</td>  
                     <td class="reg_cep" data-id7="'.$row["id"].'" contenteditable>'.$row["cep"].'</td>    
                     <td class="reg_telefone" data-id8="'.$row["id"].'" contenteditable>'.$row["telefone"].'</td>
                     <td class="reg_cidade" data-id9="'.$row["id"].'" contenteditable>'.$row["cidade"].'</td>    
                     <td><button type="button" name="delete_btn" data-id9="'.$row["id"].'" class="btn_delete">x</button></td>                  
                </tr>  
           ';  
      }  
 
 }  
 else  
 {  
      $output .= '<tr>  
                    <td colspan="4">Dados não encontrados</td>  
                  </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>   