<?php
	include('cabecalho.php');
	$pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
	require_once('classes/livro.php');
	$livro = new Livro();
?>

<form method="POST">
	<h3>Formulário para cadastro de livros</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" name="titulo" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Autor</label>
      <input type="text" name="autor" class="form-control" id="inputPassword4" placeholder="" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Gênero</label>
    <input type="text" name="genero" class="form-control" id="inputAddress" placeholder="" required>
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Preço</label>
    <input type="text" name="preco" class="form-control" id="inputAddress2" placeholder="" required>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
    <textarea class="form-control" name="resenha" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  
</form>

<?php
	if(isset($_POST['cadastrar_livro'])){
		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'];
		$genero = $_POST['genero'];
		$preco = $_POST['preco'];
		$resenha = $_POST['resenha'];
		if($livro->cadastrar_livro($titulo,$autor,$genero,$preco,$resenha)){

		}else{
			echo "<div class=alert alert-success role=alert>
				  Livro cadastrado com sucesso!
				</div>";
		}
	}
?>

</body>
</html>


