<form method="POST" action="<?php echo base_url('register/register_submit'); ?>">
	<table>
		<tr>
			<td>
				Username:
			</td>
			<td>
				<input class="form-control" type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input class="form-control" type="password" name="password">
			</td>
		</tr>
		<tr>
			<td>
				Confirm Password:
			</td>
			<td>
				<input class="form-control" type="Cpassword" name="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<i style="color: red;"><?php echo $error; ?></i>
			</td>
			
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
				<button class="btn btn-primary">Submit</button>
				<a class="btn btn-danger" href="<?= base_url(); ?>">Cancel</a>
			</td>
		</tr>
		 
	</table>
</form>