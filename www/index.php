<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="./assets/css/bootstrap.min.css"
			type="text/css"
			media="screen"
		/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>LAMP MYSQL</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<style>
			.bg-main{
				background-color: #845EC2;
			}
			a{
				color: #0081cf;
			}
			a:hover{
				color: #845EC2;
			}
			.btn-primary{
				background-color: #845EC2;
				border-color: #845EC2;
			}
			.btn-primary:hover{
				background-color: #005EC2;
			}
			.grid {
				display: grid;
				gap: 1rem;
			}
			@media (min-width:500px){
				.grid {
				grid-template-columns: repeat(2, 1fr);
				align-items: center;
				margin-right: auto;
				margin-left: auto;
				}
			}
		</style>
	</head>
	<body>
		<section class="container-fluid bg-main is-bold pt-5 pb-5">
			<div class="container text-center text-white">
				<h1 class="title pt-3 pb-3">COLEÇÃO LAMP</h1>
				<h2 class="subtitle pt-3 pb-3">Meu ambiente de desenvolvimento local</h2>
			</div>
		</section>
		<section class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<h3 class="title text-center pt-5 pb-3">
							Area de Trabalho e Desenvolvimento
						</h3>
						<hr/>
						<div class="content">
							<ul>
								<li>
									<a href="./apache.php">
										<?= apache_get_version(); ?>
									</a>
								</li>
								<li>
									<a href="/phpinfo.php">
										PHP <?= phpversion(); ?>
									</a>
								</li>
								<ul>
									<li>
										<a
											href="http://localhost:<? print $_ENV['PMA_PORT']; ?>"
											>phpMyAdmin</a
										>
									</li>
								</ul>
								<li>
									<?php
                                    /* CONEXAO */
                                    $link = mysqli_connect('database', 'root', 'mysql',null);
                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));}
                                    mysqli_close($link);
                                    ?>
								</li>
								<ul>
									<li>
										<img src="https://www.vectorlogo.zone/logos/mysql/mysql-horizontal.svg" alt="">
										<?php

										$link = mysqli_connect('database', 'root', 'mysql',null);

										if (!$link) {
											echo "<b class='text-danger'>
												<i class='bi bi-exclamation-circle-fill'></i> 
												Erro: Incapaz de conectar no MySQL
											</b>" . PHP_EOL;
											echo "Depurando errno: " . mysqli_connect_errno() . PHP_EOL;
											echo "Depurando error: " . mysqli_connect_error() . PHP_EOL;
											exit;
										}

										echo "<b class='text-success'><i class='bi bi-check-circle-fill'> </i>Sucesso</b>" . PHP_EOL;

										mysqli_close($link);
										?>
									</li>
								</ul>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<h3 class="title text-center pt-5 pb-3">
							Links Rapidos
						</h3>
						<hr />
						<div class="content">
							<div class="grid">
								<?php include('./link.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
