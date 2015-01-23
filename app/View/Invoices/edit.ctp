<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Edit Invoice Details</h3>
			</div>
			<div style="padding: 10px;">
			<?php echo $this->Form->create('Invoice'); ?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('company_id',array(
					'class' => 'form-control',
					'placeholder' => 'Company Name',
					'label' => ''
					));
				echo $this->Form->input('product', array(
					'class' => 'form-control',
					'placeholder' => 'Product Details',
					'label' => '',
					'type' => 'textarea'
					));
				echo $this->Form->input('price', array(
					'class' => 'form-control',
					'placeholder' => 'Amount',
					'label' => '',
					'type' => 'text'
					));
				echo $this->Form->input('vat', array(
					'class' => 'form-control',
					'placeholder' => 'VAT in percentage',
					'label' => '',
					'type' => 'text'
					));
				echo $this->Form->input('total', array(
					'class' => 'form-control',
					'placeholder' => 'Total',
					'label' => '',
					'disabled' => true
					));
				echo "<br />";
				echo $this->Form->submit('Update Invoice',array('class' => 'btn btn-success'));
				echo $this->Form->end();
			?>
			</div>
		</div>
	</div>
</div>