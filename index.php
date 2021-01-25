<?php 
	/*$livro1 = ["titulo"=>"1984","autor"=>"George Orwell","genero"=>"Distopia","preco"=>"22,45","resenha"=>"nabha bakakj kkbaj babak akbakhkab kak"];
	$livro2 = ["titulo"=>"1984","autor"=>"George Orwell","genero"=>"Distopia","preco"=>"22,45","resenha"=>"nabha bakakj kkbaj babak akbakhkab kak"];

	$livros = [$livro1, $livro2];*/
	include('cabecalho.php');
	$pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
?>

<?php
	$selectLivro = $pdo->prepare("SELECT `id`, `titulo`, `autor`, `genero`, `preco`, `resenha` FROM `livro`");
	$selectLivro->execute();
	$livro = $selectLivro->fetchAll();
	foreach($livro as $key => $value){
?>
<div class="card text-white bg-primary mb-3" id="cards" style="max-width: 18rem;">
  <div class="card-header"><?php echo $value['titulo']?></div>
  <div class="card-body">
    <h6 class="card-title"><?php echo $value['autor']?></h6>
    <h6 class="card-title"><?php echo $value['genero']?></h6>
    <h6 class="card-title"><?php echo $value['preco']?></h6>
    <p class="card-text"><?php echo $value['resenha']?></p>
  </div>
</div>

<?php }?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
<script src="js/jquery.mask.js"></script>

</body>
</html>







