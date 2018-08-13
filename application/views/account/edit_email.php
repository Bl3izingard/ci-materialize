<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<main>
<div class="row">
	<div class="col s12 m6 offset-m3">
		<div class="card" style="min-height: 350px">
			<div class="card-content">
				<span class="card-title grey-text text-darken-4">My Change your
					informations <a class="black"
					href="<?php echo base_url('account/me'); ?>"><i
						class="material-icons right">close</i></a>
				</span>
				<?php echo form_open('account/edit/email', array("novalidate" => "")); ?>
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