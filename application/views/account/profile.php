<main>
<div class="row">
	<div class="col s12 m6 offset-m3">
		<div class="card large" style="min-height: 630px">
			<div class="card-content">
				<span class="card-title grey-text text-darken-4 activator">My
					Informations <i class="material-icons right">create</i>
				</span>
				<div class="row">
					<div class="col">Login : <?php echo $user->Login; ?></div>
				</div>
				<div class="row">
					<div class="col">Email : <?php echo $user->Email; ?></div>
				</div>
				<div class="row">
					<div class="col">Street : <?php echo $user->Street; ?></div>
				</div>
				<div class="row">
					<div class="col s12 m6">City : <?php echo $user->City; ?></div>
				</div>
				<div class="row">
					<div class="col s12 m6">ZipCode : <?php echo $user->ZipCode; ?></div>
				</div>
				<div class="row">
					<div class="col">Country : <?php echo $user->Country; ?></div>
				</div>
				<div class="divider"></div>
				<div class="row">
					<div class="col">
						<span class="card-title grey-text text-darken-4">My Host
							Informations </span>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<span class="<?php echo $studentproof_text["class"]; ?>"><i class="<?php echo $studentproof_icon["class"]; ?>"><?php echo $studentproof_icon["value"]; ?></i> <?php echo $studentproof_text["value"]; ?></span>
					</div>
				</div>

			</div>
			<div class="card-action">
				<div class="col">
					<a href="<?php echo base_url('account/edit/password'); ?>">CHANGE
						MY PASSWORD</a>
				</div>
				<div class="col">
					<a href="<?php echo base_url('account/edit/email'); ?>">CHANGE MY
						EMAIL</a>
				</div>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Edit Information<i
					class="material-icons right">close</i></span>
		<?php echo form_open('account/edit/infos', array("novalidate" => "")); ?>
				<div class="row">
					<div class="input-field col s12">
				<?php
				echo form_input ( $form_email );
				
				echo form_label ( "Email", "email" );
				?>
				</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
				<?php
				echo form_input ( $form_street );
				
				echo form_label ( "Street", "street" );
				?>
				</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m8">
				<?php
				echo form_input ( $form_city );
				
				echo form_label ( "City", "city" );
				?>
					</div>
					<div class="input-field col s12 m4">
				<?php
				echo form_input ( $form_zipcode );
				
				echo form_label ( "ZipCode", "zipcode" );
				?>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
				<?php
				echo form_dropdown ( $form_country ["name"], $form_country ["options"], $form_country ["selected"], $form_country ["extra"] );
				
				echo form_label ( "Country", "country" );
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