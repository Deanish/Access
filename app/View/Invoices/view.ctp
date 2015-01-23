<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Invoice Details</h3>
			</div>
			<div style="padding: 10px;">
				<table width=100%>
					<tr>
						<td>Invoice ID:</td>
						<td><?php echo h($invoice['Invoice']['id']); ?></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><?php echo $this->Html->link($invoice['User']['firstname'], array('controller' => 'users', 'action' => 'view', $invoice['User']['id'])); ?></td>
					</tr>
					<tr>
						<td>Company Name:</td>
						<td><?php echo $this->Html->link($invoice['Company']['name'], array('controller' => 'companies', 'action' => 'view', $invoice['Company']['id'])); ?></td>
					</tr>
					<tr>
						<td>Product Details:</td>
						<td><?php echo h($invoice['Invoice']['product']); ?></td>
					</tr>
					<tr>
						<td>Amount:</td>
						<td>₹ <?php echo h($invoice['Invoice']['price']); ?></td>
					</tr>
					<tr>
						<td>VAT:</td>
						<td><?php echo h($invoice['Invoice']['vat']); ?>%</td>
					</tr>
					<tr>
						<td>Total:</td>
						<td>₹ <?php echo h($invoice['Invoice']['total']); ?></td>
					</tr>
					<tr>
						<td>Created:</td>
						<td><?php echo h($invoice['Invoice']['created']); ?></td>
					</tr>
					<tr>
						<td>Modified:</td>
						<td><?php echo h($invoice['Invoice']['modified']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>