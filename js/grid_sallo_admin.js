 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({
                url: "../wp-content/plugins/grid-sallo/db/select.php",  
                method:"POST",                
                beforeSend: function() {
                $('#live_data').html('Aguarde...');
                },
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data(); 

      //Adicionar
       $(document).on('click', '#btn_add', function(){  
           var reg_uf = $('#reg_uf').text();  
           var reg_cod = $('#reg_cod').text();
           var reg_razao = $('#reg_razao').text();
           var reg_fantasia = $('#reg_fantasia').text();           
           var reg_endereco = $('#reg_endereco').text();
           var reg_bairro = $('#reg_bairro').text();
           var reg_cep = $('#reg_cep').text();
           var reg_telefone = $('#reg_telefone').text();
           var reg_cidade = $('#reg_cidade').text();  
           
           if(reg_uf == '')  
           {  
                alert("Preencha com código da UF");  
                return false;  
           }  
           if(reg_cod == '')  
           {  
                alert("Preencha o código da loja");  
                return false;  
           }
           if(reg_razao == '')  
           {  
                alert("Preencha a razão da loja");  
                return false;  
           }  
           if(reg_fantasia == '')  
           {  
                alert("Preencha o nome fantasia");  
                return false;  
           }            
           if(reg_endereco == '')  
           {  
                alert("Preencha o endereço");  
                return false;  
           }  
           if(reg_bairro == '')  
           {  
                alert("Preencha a bairro");  
                return false;  
           } 
           if(reg_cep == '')  
           {  
                alert("Preencha o código do CEP");  
                return false;  
           }  
           if(reg_telefone == '')  
           {  
                alert("Preencha o telefone");  
                return false;  
           }
           if(reg_cidade == '')  
           {  
                alert("Preencha o nome da cidade");  
                return false;  
           }  

           $.ajax({  
                url:"../wp-content/plugins/grid-sallo/db/insert.php",  
                method:"POST",  
                data:{
                  reg_uf:reg_uf,
                  reg_cod:reg_cod,
                  reg_razao:reg_razao,
                  reg_fantasia:reg_fantasia,                  
                  reg_endereco:reg_endereco,
                  reg_bairro:reg_bairro,
                  reg_cep:reg_cep,
                  reg_telefone:reg_telefone,
                  reg_cidade:reg_cidade
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  

      //Editar
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"../wp-content/plugins/grid-sallo/db/edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     $('#status_grid').html(data); 
                }  
           });  
      } 
      $(document).on('blur', '.reg_uf', function(){  
           var id = $(this).data("id1");  
           var uf = $(this).text();  
           edit_data(id, uf, "uf");  
      });  
      $(document).on('blur', '.reg_cod', function(){  
           var id = $(this).data("id2");  
           var cod = $(this).text();  
           edit_data(id, cod, "cod");  
      });
      $(document).on('blur', '.reg_razao', function(){  
           var id = $(this).data("id3");  
           var razao = $(this).text();  
           edit_data(id, razao, "razao");  
      });
      $(document).on('blur', '.reg_fantasia', function(){  
           var id = $(this).data("id4");  
           var fantasia = $(this).text();  
           edit_data(id, fantasia, "fantasia");  
      });
      $(document).on('blur', '.reg_endereco', function(){  
           var id = $(this).data("id5");  
           var endereco = $(this).text();  
           edit_data(id, endereco, "endereco");  
      });
      $(document).on('blur', '.reg_bairro', function(){  
           var id = $(this).data("id6");  
           var bairro = $(this).text();  
           edit_data(id, bairro, "bairro");  
      });      
      $(document).on('blur', '.reg_cep', function(){  
           var id = $(this).data("id7");  
           var cep = $(this).text();  
           edit_data(id, cep, "cep");  
      });
      $(document).on('blur', '.reg_telefone', function(){  
           var id = $(this).data("id8");  
           var telefone = $(this).text();  
           edit_data(id, telefone, "telefone");  
      });
      $(document).on('blur', '.reg_cidade', function(){  
           var id = $(this).data("id9");  
           var cidade = $(this).text();  
           edit_data(id, cidade, "cidade");  
      });        
      
      //Deletar
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id9");  
           if(confirm("Você tem certeza que quer deletar isto?"))  
           {  
                $.ajax({  
                     url:"../wp-content/plugins/grid-sallo/db/delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          $('#status_grid').html(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  