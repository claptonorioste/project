<div class="main-container">
		<div class="contents">
			<table border="1" style="margin-left: 10px;">
				<tr>
					<td>
						<div class="sub-container">
							<div class="content-title">My Profile</div>
								<div class="option-container">
							  		<div class="panel-group">
							   			 <div class="panel panel-default">
							      			<div class="panel-heading">
							        			<h4 class="panel-title">
							          				<div class="set-padding" data-toggle="collapse" href="#collapse1">Profile</div>
							        			</h4>
							     			 </div>
							       				 <ul class="list-group">
							       				 	<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">My Profile</a></li>
							          				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Edit Profile</a></li>
							         				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Account Setting</a></li>
							          				<li class="list-group-item"><a class="set-padding" href="<?php echo base_url('menu/logout'); ?>">Logout</a></li>
							        			</ul>

							      			<div class="panel-heading">
							        			<h4 class="panel-title">
							          				<div class="set-padding" data-toggle="collapse" href="#collapse2">Bank Operation</div>
							        			</h4>
							     			 </div>
							     			
							       				 <ul class="list-group">
							          				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Deposit</a></li>
							          				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Withdraw</a></li>
							         				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">My Wallet</a></li>
							        			</ul>
							      			
							      			<div class="panel-heading">
							        			<h4 class="panel-title">
							          				<div class="set-padding" data-toggle="collapse" href="#collapse3">Loan</div>
							        			</h4>
							     			 </div>
							     			 
							       				 <ul class="list-group">
							          				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Create Loan</a></li>
							          				<li class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Pay Loan</a></li>
							         				<li id="last" class="list-group-item"><a class="set-padding" data-toggle="collapse" href="#collapse1">Loan Details</a></li>
						
							        			</ul>
							      			</div>
							   			
							  		</div>
								</div>
							</div>
						</td>
						<td>
			<div class="profile-container">
				<table >
					<tr>
				<!-- 	<td colspan="3">
						

					</td> -->
					</tr>
					<tr>
						<td align="center">
							<div class="profile-pic-container">
								<img src="<?php echo base_url('public/contents-css/logo/sample-profile-pic.png')?>"></img><br>
								<button>Change Picture</button>
							</div>
			        	</td>
						<td>
							<div class="frm_container">
				        		<div class="frm_heading"><span>Personal Info</span></div>
				        		<div class="frm_inputs">
					        		<table class="info_view">
					        			<tbody><tr>
					        				<td>First Name:</td>
					        				<td>
					        					<?php 
					        						if($profileinfo->num_rows()>0){
					        					 		echo $profileinfo->row()->first_name;
					        					 	}else{
					        							echo "None";
					        						}
					        					?>	
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Middle Name:</td>
					        				<td>
					        					<?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->middle_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>	
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Last Name:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->last_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Age:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->age; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Place of Birth:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->birth_place; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Date of Birth:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->date_of_birth; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Nationality:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->nationality; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Sex:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->sex; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Civil Status:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->civil_status; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Blood Type:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->blood_type; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Home Address</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->home_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>

					        			</tr>
					        			<tr>
					        				<td>Phone/Cellphone:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->phone_no; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Email Address:</td>
					        				<td><?php 
					        						if($profileinfo->num_rows()>0){
					        							echo $profileinfo->row()->email_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					     
					        		</tbody></table>
				        		</div>
			        		</div>
			        	</td>

			        	

			        	<td>
							<div class="frm_container">
				        		<div class="frm_heading"><span>Educational Info</span></div>
				        		<div class="frm_inputs">
					        		<table class="info_view">
					        			<tbody><tr>
					        				<td>Elementary Year:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->elementary_year!=""){
					        							echo $educinfo->row()->elementary_year; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>School Name/Address:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->elementary_address!=""){
					        							echo $educinfo->row()->elementary_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Remarks:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->elementary_remarks!=""){
					        							echo $educinfo->row()->elementary_remarks; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Highschool Year:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->highschool_year!=""){
					        							echo $educinfo->row()->highschool_year; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>School Name/Address:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->highschool_address!=""){
					        							echo $educinfo->row()->highschool_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Remarks:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->highschool_remarks!=""){
					        							echo $educinfo->row()->highschool_remarks; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>College Year:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->college_year!=""){
					        							echo $educinfo->row()->college_year; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>School Name/Address:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->college_address!=""){
					        							echo $educinfo->row()->college_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Remarks:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->college_remarks!=""){
					        							echo $educinfo->row()->college_remarks; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Post Graduate Year:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->post_grad_year!=""){
					        							echo $educinfo->row()->post_grad_year; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>School Name/Address:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->post_grad_address!=""){
					        							echo $educinfo->row()->post_grad_address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Remarks:</td>
					        				<td>
					        					<?php 
					        						if($educinfo->num_rows()>0 && $educinfo->row()->post_grad_remarks!=""){
					        							echo $educinfo->row()->post_grad_remarks; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>
					     
					        		</tbody></table>
				        		</div>
			        		</div>
			        	</td>
			        	
			        </tr>
			        <tr>
			        	<td>
			        		<div class="frm_container">
				        		<div class="frm_heading"><span>Family Background</span></div>
				        		<div class="frm_inputs">
					        		<table class="info_view">
					        			<tbody><tr>
					        				<td>Spouse First Name:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->spouse_first_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Spouse Middle Name:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->spouse_middle_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Spouse Last Name:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->spouse_last_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>No. of Children</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->no_of_children; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>

					        			</tr>
					        			<tr>
					        				<td>Occupation</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->occupation; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Gross Income</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->gross_income; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Date of Birth:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->date_of_birth; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Age:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->age; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Postion:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->position; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Status:</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->status; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Take-Home Pay</td>
					        				<td>
					        					<?php 
					        						if($familyinfo->num_rows()>0){
					        							echo $familyinfo->row()->take_home_pay; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
	
					     
					     
					        		</tbody></table>
				        		</div>
			        		</div>
							
			        	</td>
			        	<td>
							<div class="frm_container">
				        		<div class="frm_heading"><span>Employment Info</span></div>
				        		<div class="frm_inputs">
					        		<table class="info_view">
					        			<tbody><tr>
					        				<td>Name of Firm:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->name_of_firm; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>

					        			</tr>
					        			<tr>
					        				<td>Address:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Employment Started:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->employment_date; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Gross Income:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->gross_income; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Posistion:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->position; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Telephone No.:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->tel_no; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Year Started:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->year_started; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Take-Home Pay:</td>
					        				<td>
					        					<?php 
					        						if($empinfo->num_rows()>0){
					        							echo $empinfo->row()->take_home_pay; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>

					     
					     
					        		</tbody></table>
				        		</div>
			        		</div>
			        	</td>
			        	<td>
							<div class="frm_container">
				        		<div class="frm_heading"><span>Business Info</span></div>
				        		<div class="frm_inputs">
					        		<table class="info_view">
					        			<tbody><tr>
					        				<td>Business Type:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->business_type; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>

					        			</tr>
					        			<tr>
					        				<td>Address:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->address; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Ownership:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->ownership; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Capital:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->capital; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Trade Name:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->trade_name; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Telephone No.:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->tel_no; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Year Started:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->year_started; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>Gross Income:</td>
					        				<td>
					        					<?php 
					        						if($businessinfo->num_rows()>0){
					        							echo $businessinfo->row()->gross_income; 
					        						}else{
					        							echo "None";
					        						}
					        					?>
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>
					        			<tr>
					        				<td>&nbsp;</td>
					        				<td>&nbsp;</td>
					        			</tr>
					     
					     
					        		</tbody></table>
				        		</div>
			        		</div>
			        	</td>
			        </tr>
			    </table> 
			</div>
		</td>
	</tr>
</table>
			
