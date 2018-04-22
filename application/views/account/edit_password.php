<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<main>
<div class="row">
	<div class="col s12 m6 offset-m3">
		<div class="card">
			<div class="card-content">
				<span class="card-title grey-text text-darken-4">My Change your
					password <a href="<?php echo base_url('account/me'); ?>"><i
						class="material-icons right">close</i></a>
				</span>
				<?php echo form_open('account/edit/password', array("novalidate" => "")); ?>
				<div class="row">
					<div class="input-field col s12">
				<?php
				echo form_password ( $form_old_password );
				
				echo form_label ( "Old Password", "old_password", $form_old_password_label );
				?>
				</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
				<?php
				echo form_password ( $form_password );
				
				echo form_label ( "Password", "password", $form_password_label );
				?>
				</div>
					<div class="input-field col s6">
				<?php
				echo form_password ( $form_password_confirm );
				
				echo form_label ( "Password Confirmation", "password_confirm", $form_password_confirm_label );
				?>
				</div>
				</div>
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit">
						Edit <i class="material-icons right">send</i>
					</button>
				</div>
		<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
</main>