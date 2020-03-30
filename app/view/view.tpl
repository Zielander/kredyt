<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>  Kalkulator  </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/app/view/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/app/view/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php"><span>  Kalkulator</span></a>
					</header>

				<!-- Main -->
					<div id="main" class="alt">

						<section id="one">
							<div class="inner">
								<header class="major">
									<h1><a href="{$app_url}/app/calc.php">Kalkulator kredytowy</a></h1>
								</header>


							<hr class="major" />

										<!-- Form -->
										<h3>Proszę podać swoje dane</h3>

											<form method="post" action="#">
												<div class="row gtr-uniform">
												<div class="col-4 col-12-xsmall">
														<input type="text" name="demo-name" id="demo-name" value="" placeholder="Kwota do spłaty" />
													</div>
													<div class="col-4 col-12-xsmall">
														<input type="text" name="demo-name" id="demo-name" value="" placeholder="Oprocentowanie (w %)" />
													</div>
													<div class="col-4 col-12-xsmall">
														<input type="text" name="demo-name" id="demo-name" value="" placeholder="Długość spłacania" />
													</div>
													<!-- Break -->
													<div class="col-12">
														<select name="demo-category" id="demo-category">
															<option value="">- Częstość spłacania raty -</option>
															<option value="1">Miesięczna</option>
															<option value="1">Tygodniowa</option>
															<option value="1">Kwartalna</option>
															<option value="1">Roczna</option>
														</select>
													</div>


												<!-- Break -->
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" value="Wyślij dane" class="primary" /></li>
														<li><input type="reset" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>



				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{$conf->app_url}/app/view/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/util.js"></script>
			<script src="{$conf->app_url}/app/view/assets/js/main.js"></script>

	</body>
</html>