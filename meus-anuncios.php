<?php use classes\Anuncios;
require 'pages/header.php'; 

if (empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}
?>

<div class="container">
	<h1>Meus Anúncios</h1>
	
	<a href="add-anuncio.php" class="btn btn-light">Adicionar Anúncio</a>
	
	<br/><br/>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Foto</th>
				<th scope="col">Título</th>
				<th scope="col">Valor</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<?php 
		  require 'classes/Anuncios.php';
		  $a = new Anuncios();
		  $anuncios = $a->getMeusAnuncios();
		  
		  foreach ($anuncios as $anuncio):
		  ?>
		  <tr>
		  	<td>
    		  	<?php if(!empty($anuncio['url'])): ?>
    		  		<img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" 
		  			 height="50" border="0" />
		  		<?php else: ?>
		  			<img src="assets/images/default.jpg" height="50" border="0" />
		  		<?php endif; ?>
		  	</td>
		  	<td><?php echo $anuncio['titulo']; ?></td>
		  	<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
		  	<td>
		  		<a href="editar-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-light btn-sm">Editar</a>
		  		<a href="excluir-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
		  	</td>
		  </tr>
		  <?php endforeach;	?>	
	</table>
</div>

<?php require 'pages/footer.php'; ?>