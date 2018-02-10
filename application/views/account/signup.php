<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="row">
		<form class="col s12 m7 offset-m3 l8 offset-l2">
			<div class="row">
				<div class="input-field col s12">
					<input id="login" type="text" class="validate"> <label for="login">Login</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="password" type="password" class="validate"> <label
						for="password">Password</label>
				</div>
				<div class="input-field col s6">
					<input id="password_confirm" type="password" class="validate"> <label
						for="password_confirm">Confirm password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="email" type="email" class="validate"> <label for="email">E-mail</label>
				</div>
			</div>
			<div class="row">
				<button class="btn waves-effect waves-light" type="submit">
					Sign up <i class="material-icons right">send</i>
				</button>
			</div>
		</form>
	</div>
</div>