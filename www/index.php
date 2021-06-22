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
										<a href="/test_db.php">Teste conexão com Base de Dados</a>
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
							<ul>
								<?php include('./link.php'); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
