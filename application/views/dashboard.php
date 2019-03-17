<div class="container-fluid">
	<h4>SIS ADMIN</h4>
	<hr>
	<div class="panel">
		<?php 

			foreach($users as $key){
				echo $key->username." | <a href='".base_url('dashboard/update?userid='.$key->userid)."' class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a> | <a href='".base_url('dashboard/disable?userid='.$key->userid)."' class='btn btn-sm btn-danger'><i class='fas fa-ban'></i></a>";
				echo "<br><hr>";
			}

		?>
	</div>	
</div>