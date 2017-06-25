# pluguin_wordpress_grid
Plugin criado em PHP com Jquery para wordpress que tem duas telas uma para o usuário e outra para o administrador do site.
O mesmo só funciona apenas dentro do wodpress, e nescessita da criação de um banco de dados mysql.

A conexão com o banco de dados, tem que ser editada no arquivo conexão.php

$connect = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

As tabelas do banco de dados tem que ser ciradas assim:

grid(id (chave primaria com auto incremento), uf, cod, razao, fantasia, endereco, bairro, cep, telefone, cidade)
