<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-30 17:32:28
  from 'C:\xampp3\htdocs\kredyt\app\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e82110c6cc2a8_88776801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd70fc506090e84165db11cdee89504054d04f644' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\kredyt\\app\\view\\view.tpl',
      1 => 1585582346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e82110c6cc2a8_88776801 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/css/noscript.css" /></noscript>
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
									<h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Kalkulator kredytowy</a></h1>
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
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/view/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
