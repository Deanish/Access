<div class="row">
	<div class="col-md-4" style="padding-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title text-center">User Details</h3>
			</div>
			<div style="padding: 10px;">
				<table width=100%>
					<tr>
						<td>User ID:</td>
						<td><?php echo h($user['User']['id']); ?></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><?php echo h($user['User']['username']); ?></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><?php echo h($user['User']['firstname']); ?></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><?php echo h($user['User']['lastname']); ?></td>
					</tr>
					<tr>
						<td>Created:</td>
						<td><?php echo h($user['User']['created']); ?></td>
					</tr>
					<tr>
						<td>Modified:</td>
						<td><?php echo h($user['User']['modified']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>