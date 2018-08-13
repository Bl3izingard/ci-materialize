<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main>
<div class="row">
	<div class="col s12 m6 offset-m3">
		<div class="card" style="min-height: 350px">
			<div class="card-content">
			<span class="card-title grey-text text-darken-4">My
					Change your informations <a class="black" href="<?php echo base_url('account/me'); ?>"><i
						class="material-icons right">close</i></a>
				</span>
				<?php echo form_open('account/edit/infos', array("novalidate" => "")); ?>
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
				<span class="<?php	echo $form_city_error["class"]; ?>"
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