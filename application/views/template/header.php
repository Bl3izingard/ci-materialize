<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<header>
	<!-- MENU PRINCIPAL (Non connnecté) -->
	<nav class="white" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url("signin"); ?>">Sign in</a></li>
				<li><a href="<?php echo base_url("signup"); ?>">Sign up</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><div class="divider"></div></li>
				<li><a href="<?php echo base_url("signin"); ?>">Sign in</a></li>
				<li><a href="<?php echo base_url("signup"); ?>">Sign up</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i
				class="material-icons">menu</i></a>
		</div>
	</nav>
	<!-- MENU PRINCIPAL (Connecté) -->
</header>