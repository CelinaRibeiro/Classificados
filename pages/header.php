<?php require 'config.php'; ?>
<html>
<head>
	<title>Classificados</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
</head>

<body>
</body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="./">Classificados</a>
			</div>
			
			<ul class="nav justify-content-end">
				<?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
    				<li class="nav-item"><a class="nav-link text-light" href="meus-anuncios.php">Meus Anúncios</a></li>
    				<li class="nav-item"><a class="nav-link text-light" href="sair.php">Sair</a></li>
    			<?php else: ?>
    				<li class="nav-item"><a class="nav-link text-light" href="cadastre-se.php">Cadastre-se</a></li>
    				<li class="nav-item"><a class="nav-link text-light" href="login.php">Login</a></li>
    			<?php endif; ?>
    			
			</ul>
		</div>
	</nav>
