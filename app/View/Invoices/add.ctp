<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">New Invoice</h3>
			</div>
			<div style="padding: 10px;">				
				<?php echo $this->Form->create('Invoice'); ?>
				<?php
					echo $this->Form->input('company_id', array(
						'class' => 'form-control',
						'label' => 'Company Name'
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
						'placeholder' => 'VAT in percent',
						'label' => '',
						'type' => 'text'
						));
					echo "<br />";
					echo $this->Form->submit('Generate new Invoice',array('class' => 'btn btn-success'));
				?>				
			</div>
		</div>
	</div>
</div>