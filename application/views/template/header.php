<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

if($this->toolbox->is_logged())
{
	$kindMenu = "signed";
}
else
{
	$kindMenu = "notsign";
}

/*
 * DEFINITION DU CONTENU DES MENUS
 * DANS L'ORDRE D'APPARITION DU MENU
 */

// MENU NON CONNECTE
$menu ["notsign"] ["fullscreen"] = array (
		"Home" => base_url(),
		"Sign In" => base_url("signin"),
		"Sign Up" => base_url("signup")
);
$menu ["notsign"] ["mobile"] = array (
		"Home" => base_url(),
		"divider" => "",	
		"Sign In" => base_url("signin"),
		"Sign Up" => base_url("signup")
);
$menu ["signed"] ["fullscreen"] = array (
		"Home" => base_url(),
		"My Account" => base_url("account/me"),
		"Sign Out" => base_url("signout")
);

$menu ["signed"] ["mobile"] = array (
		"Home" => base_url(),
		"My Account" => base_url("account/me"),
		"divider" => "",
		"Sign Out" => base_url("signout")
);

?>
<header>
	<nav class="white" role="navigation">
		<div class="nav-wrapper container">
	<?php 
		if(isset($template_home))
		:
	?>
			<a id="logo-container" href="#" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
	<?php
			foreach ($menu[$kindMenu]["fullscreen"] as $label => $link)
			:
	?>
				<li><a href="<?php echo $link; ?>"><?php echo $label;?></a></li>
	<?php
			endforeach;
	?>
			</ul>
			<ul id="nav-mobile" class="side-nav">
	<?php
			foreach ($menu[$kindMenu]["mobile"] as $label => $link)
			:
				if($label === "divider")
				:
	?>
				<li><div class="divider"></div></li>
	<?php
				else
				:
	?>
				<li><a href="<?php echo $link; ?>"><?php echo $label;?></a></li>
	<?php
				endif;
			endforeach;
	?>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i
				class="material-icons">menu</i></a>
	<?php
		else 
		:
	?>
		<ul id="nav-mobile" class="side-nav fixed">
				<li class="logo"><a id="logo-container" href="#" class="brand-logo">Logo</a>
					<object id="front-page-logo" type="image/svg+xml"
						data="res/materialize.svg">Your browser does not support SVG</object></li>
	<?php
			foreach ($menu[$kindMenu]["mobile"] as $label => $link)
			:
				if($label === "divider")
				:
	?>
				<li><div class="divider"></div></li>
	<?php
				else
				:
	?>
				<li><a href="<?php echo $link; ?>"><?php echo $label;?></a></li>
	<?php
				endif;
			endforeach;
	?>	
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i
			class="material-icons">menu</i></a>
	<?php
		endif;
	?>
		</div>
	</nav>	
</header>