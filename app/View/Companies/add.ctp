<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">New Company Register</h3>
			</div>
			<div style="padding: 10px;">
				<?php echo $this->Form->create('Company'); ?>
					<fieldset>
						<?php
							echo $this->Form->input('name', array(
								'class' => 'form-control',
								'placeholder' => 'Company Name',
								'label' => ''
								));
							echo $this->Form->input('address', array(
								'class' => 'form-control',
								'placeholder' => 'Company Address',
								'label' => '',
								'type' => 'textarea'
								));
							echo "<br />";
							echo $this->Form->submit('Create new company',array('class' => 'btn btn-success'));
						?>
					</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>