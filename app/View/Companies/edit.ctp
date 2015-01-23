<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Edit Company Details</h3>
			</div>
			<div style="padding: 10px;">
			<?php echo $this->Form->create('Company'); ?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name',array(
					'class' => 'form-control',
					'placeholder' => 'Company Name',
					'label' => ''
					));
				echo $this->Form->input('address', array(
					'class' => 'form-control',
					'placeholder' => 'Address',
					'label' => '',
					'type' => 'textarea'
					));
				echo "<br />";
				echo $this->Form->submit('Update Company',array('class' => 'btn btn-success'));
				echo $this->Form->end();
			?>
			</div>
		</div>
	</div>
</div>