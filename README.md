# pluguin_wordpress_grid
Plugin criado em PHP com Jquery para wordpress que tem duas telas uma para o usuário e outra para o administrador do site.
O mesmo só funciona apenas dentro do wodpress, e nescessita da criação de um banco de dados mysql.

As tabelas do banco de dados tem que ser ciradas assim:

$connect = mysqli_connect("localhost", "sallo_dealer", "dealer123", "sallo_dealer");


grid(id (chave primaria com auto incremento), uf, cod, razao, fantasia, endereco, bairro, cep, telefone, cidade)