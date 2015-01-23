<div class="row">
	<div class="col-md-6" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Company Details</h3>
			</div>
			<div style="padding: 10px;">
				<table width=100%>
					<tr>
						<td>Company ID:</td>
						<td><?php echo h($company['Company']['id']); ?></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><?php echo $this->Html->link($company['User']['firstname'], array('controller' => 'users', 'action' => 'view', $company['User']['id'])); ?></td>
					</tr>
					<tr>
						<td>Company Name:</td>
						<td><?php echo h($company['Company']['name']); ?></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><?php echo h($company['Company']['address']); ?></td>
					</tr>
					<tr>
						<td>Created:</td>
						<td><?php echo h($company['Company']['created']); ?></td>
					</tr>
					<tr>
						<td>Modified:</td>
						<td><?php echo h($company['Company']['modified']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>