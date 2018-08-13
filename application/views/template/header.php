<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

if ($this->toolbox->is_logged ())

?>
<header>
	<ul id="dropdown_myaccount" class="dropdown-content">
		<li><a href="<?php echo base_url ( "account/me" ); ?>">My Informations</a></li>
		<li><a href="<?php echo base_url ( "studentproof/status" ); ?>">Student Proof</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper ">
			<a href="#!" class="brand-logo">MyFirstHost.OVH</a> <a href="#"
				data-target="mobile-nav" class="sidenav-trigger"><i
				class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
      <?php
						if ($this->toolbox->is_logged ())
						:
							?>
      <li><a href="<?php echo base_url (); ?>">Home</a></li>
				<li><a class="dropdown-trigger" href="#!"
					data-target="dropdown_myaccount">My Account<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a href="<?php echo base_url ("myhost"); ?>">My MFH</a></li>
				<li><a href="<?php echo base_url ( "signout" ); ?>">Sign Out</a></li>
      <?php
						
						else
						:
							?>
		<li><a href="<?php echo base_url (); ?>">Home</a></li>
				<li><a href="<?php echo base_url ( "signin" ); ?>">Sign In</a></li>
				<li><a href="<?php echo base_url ( "signup" ); ?>">Sign Up</a></li>
        <?php
						endif;
		?>
      </ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-nav">
    <?php
				if ($this->toolbox->is_logged ())
				:
					?>
      <li><a href="<?php echo base_url (); ?>">Home</a></li>
				<li><a href="<?php echo base_url ("account/me"); ?>">My Account</a></li>
				<li class="disabled"><a href="<?php echo base_url ("myhost"); ?>">My MFH</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url ("signout"); ?>">Sign Out</a></li>
      <?php
				
				else
				:
					?>
		<li><a href="<?php echo base_url (); ?>">Home</a></li>
				<li><a href="<?php echo base_url ("signin"); ?>">Sign In</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url ("signout"); ?>">Sign Out</a></li>
        <?php
				endif;
		?>
  </ul>
</header>