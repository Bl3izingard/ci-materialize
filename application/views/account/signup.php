<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

?>

<div class="container">
	<div class="row">
		<?php echo form_open_multipart('signup', array("class" => "col s12 m7 offset-m3 l6 offset-l3", "novalidate" => "")); ?>
			<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_input ( $form_login );
				
				echo form_label ( "Login", "login" );
				?>
				<span class="<?php echo $form_login_error["class"]; ?>"
					data-error="<?php echo $form_login_error["data-error"]; ?>">Votre site sera disponible via l'adresse https://mfh.ovh/<?php echo set_value("login"); ?></span>
			</div>
		</div>
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
			<div class="input-field col s12 m6">
				<?php
				echo form_password ( $form_password );
				
				echo form_label ( "Password", "password" );
				?>
				<span class="<?php echo $form_password_error["class"]; ?>"
					data-error="<?php echo $form_password_error["data-error"]; ?>">For
					security reason please choose a password contain letters, numbers
					and special characters</span>
			</div>
			<div class="input-field col s12 m6">
				<?php
				echo form_password ( $form_password_confirm );
				
				echo form_label ( "Password Confirmation", "password_confirm" );
				?>
				<span class="<?php echo $form_password_confirm_error["class"]; ?>"
					data-error="<?php echo $form_password_confirm_error["data-error"]; ?>"></span>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<?php
				echo form_input ( $form_firstname );
				
				echo form_label ( "Firstname", "firstname" );
				?>
				<span class="<?php echo $form_firstname_error["class"]; ?>"
					data-error="<?php echo $form_firstname_error["data-error"]; ?>"></span>
			</div>
			<div class="input-field col s12 m6">
				<?php
				echo form_input ( $form_lastname );
				
				echo form_label ( "Lastname", "lastname" );
				?>
				<span class="<?php echo $form_lastname_error["class"]; ?>"
					data-error="<?php echo $form_lastname_error["data-error"]; ?>"></span>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_input ( $form_street );
				
				echo form_label ( "Street", "street" );
				?>
				<span class="<?php echo $form_street_error["class"]; ?>"
					data-error="<?php echo $form_street_error["data-error"]; ?>"></span>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m8">
				<?php
				echo form_input ( $form_city );
				
				echo form_label ( "City", "city" );
				?>
				<span class="<?php echo $form_city_error["class"]; ?>"
					data-error="<?php echo $form_city_error["data-error"]; ?>"></span>
			</div>
			<div class="input-field col s12 m4">
				<?php
				echo form_input ( $form_zipcode );
				
				echo form_label ( "ZipCode", "zipcode" );
				?>
				<span class="<?php echo $form_zipcode_error["class"]; ?>"
					data-error="<?php echo $form_zipcode_error["data-error"]; ?>"></span>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<?php
				echo form_dropdown ( $form_country ["name"], $form_country ["options"], $form_country ["selected"], $form_country ["extra"] );
				
				echo form_label ( "Country", "country" );
				?>
				<span class="<?php echo $form_country_error["class"]; ?>"
					data-error="<?php echo $form_country_error["data-error"]; ?>"></span>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field col s12">
				<div class="btn ">
					<span>File</span> <input type="file" name="prooffile"
						accept="images/jpeg">
				</div>
				<div class="file-path-wrapper">
					<input class="<?php echo $form_prooffile["class"] ?>" type="text">
					<span class="<?php echo $form_prooffile_error["class"]; ?>"
						data-error="<?php echo $form_prooffile_error["data-error"]; ?>">Must
						be a .jpg file lower than 256kb.</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<label for="tos"> 
			<?php echo form_checkbox($form_tos); ?> 
			<span class="<?php echo $form_tos_error["class"]; ?>"
					data-error="<?php echo $form_tos_error["data-error"]; ?>">I agree
						to the <a href=#>terms of service</a>
				</span>
				</label>
			</div>
		</div>
		<div class="row">
			<button class="btn waves-effect waves-light " type="submit">
				Sign up <i class="material-icons right">send</i>
			</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>