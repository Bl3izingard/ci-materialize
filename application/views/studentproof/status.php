<main>
<div class="container">
	<div class="row">
		<div class="col s12">
			<h2>Your StudentProof data</h2>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<table>
				<thead>
					<tr>
						<th>Proof Image</th>
						<th>Validity</th>
						<th>EndValidity</th>
						<th>Comment</th>
					</tr>
				</thead>

				<tbody>
					<?php
					foreach ( $studentproof as $proof )
					{
						printf ( '<tr><td><img class="materialboxed imgsptable" src="data:image/png;base64,%s"></td><td class="flow-text">%s</td><td>%s</td><td>%s</td></tr>', base64_encode ( $proof->Document ), $proof->ValidityText, $proof->EndValidity, "$proof->Comment" );
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="fixed-action-btn">
		<?php echo form_open_multipart('studentproof/add', array("class" => "col s12 m7 offset-m3 l6 offset-l3", "id" => "form_prooffile")); ?>
			<div
				class="file-field btn-floating btn-large waves-effect waves-light red">
				<span><i class="material-icons">add</i></span> <input type="file"
					id="input_prooffile" name="prooffile" accept="image/jpg,image/jpeg">
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
</main>