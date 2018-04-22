<main>
<div class="row">
	<div class="col s12 m6 offset-m3">
		<div class="card" style="min-height: 350px">
			<div class="card-content">
				<span class="card-title grey-text text-darken-4 activator">My
					Informations <i class="material-icons right">create</i>
				</span>
				<div class="row">
					<div class="col">Login : <?php echo $user->login; ?></div>
				</div>
				<div class="row">
					<div class="col">Email : <?php echo $user->email; ?></div>
				</div>
			</div>
			<div class="card-action">
				<a href="<?php echo base_url('account/edit/password'); ?>">CHANGE MY PASSWORD</a>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Edit Information<i
					class="material-icons right">close</i></span>
		<?php echo form_open('account/edit/infos', array("novalidate" => "")); ?>
				<div class="row">
					<div class="input-field col s12">
				<?php
				echo form_input ( $form_email );
				
				echo form_label ( "Email", "email");
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