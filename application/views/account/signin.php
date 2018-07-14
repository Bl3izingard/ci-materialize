<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<?php echo form_open('signin', array("class" => "col s12 m7 offset-m3 l6 offset-l3", "novalidate" => "")); ?>
			<div class="row">
				<div class="input-field col s12">
				<?php
				echo form_input ( $form_email );
				
				echo form_label ( "Email", "email" );
				?>
				<span class="<?php echo $form_email_error["class"]; ?>"
					data-error="<?php echo $form_email_error["data-error"]; ?>"></span>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<?php
				echo form_password ( $form_password );
				
				echo form_label ( "Password", "password" );
				?>
				<span class="<?php echo $form_password_error["class"]; ?>"
					data-error="<?php echo $form_password_error["data-error"]; ?>"></span>
				</div>
			</div>
			<div class="row">
				<button class="btn waves-effect waves-light" type="submit">
					Sign in <i class="material-icons right">send</i>
				</button>
			</div>

		<?php echo form_close(); ?>
	</div>
</div>