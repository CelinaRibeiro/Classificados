<?php 
use classes\Anuncios;
use classes\Usuarios;
?>

<?php 
require 'pages/header.php'; 
require 'classes/Anuncios.php';
require 'classes/Usuarios.php';

$a = new Anuncios();
$u = new Usuarios();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
}else{
    ?>
    <script type="text/javascript">window.location.href="index.php";</script>
    <?php 
    exit; 
}

$info = $a->getAnuncio($id);
?>

<br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5">
			<div class="carousel slide carousel-fade" data-ride="carousel" id="meuCarousel">
				<ol class="carousel-indicators">
					<li data-target="#meuCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#meuCarousel" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php foreach ($info['fotos'] as $chave => $foto): ?>
					<div class="carousel-item <?php echo ($chave=='0')?'active':''; ?>">
						<img class="d-block w-100" src="assets/images/anuncios/<?php echo $foto['url']; ?>" />
					</div>
					<?php endforeach; ?>
				</div>
				
				<a class="carousel-control-prev" href="#meuCarousel" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Anterior</span>
    			</a>
 			 	<a class="carousel-control-next" href="#meuCarousel" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Próximo</span>
  				</a>
			</div>
		</div>
		<div class="col-sm-7">
			<h1><?php echo $info['titulo']; ?></h1>
			<h4><?php echo utf8_encode($info['categoria']); ?></h4>
			<p><?php echo $info['descricao']; ?></p>
			<br/>
			<h3>R$ <?php echo number_format($info['valor']); ?></h3>
			<h4>Telefone: <?php echo $info['telefone']; ?></h4>
		</div>
	</div>
</div>

<?php require 'pages/footer.php'; ?>

