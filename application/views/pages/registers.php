<div class="main-container">
			<form method="POST" action="<?php echo base_url('register/register_submit'); ?>">
				<table align="center" border="0" style="width: 50%" class="table">
					<tr>
						<tr>	
							<td >
								<div class="register-header" >Username:</div>
								<div class="register-input"><input class="form-control" type="text"
									name="username" ></div>
							</td>
							<td>
								<div class="register-header" >Password:</div>
								<div class="register-input"><input class="form-control"type="password" 
									name="password"></div></td>
			
						</tr>
						<tr>
							<th><div align="center">Personal Information</div></th>
							<th><div align="center">Educational Information</div></th>
						</tr>
						<tr>
							
							<td>
								<div class="register-header" >Firstname:</div>
								<div class="register-input"><input class="form-control" type="text" name="first_name" ></div>
							</td>
							<td>
								<div class="register-header" >Elementary Year:</div>
								<div class="register-input"><input class="form-control" type="text" name="e_year" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Middlename:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="middle_name"></div>
							</td>
							<td>
								<div class="register-header" >School Name/Address:</div>
								<div class="register-input"><input class="form-control" type="text" name="e_address" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Lastname:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="last_name"></div>
							</td>
							<td>
								<div class="register-header" >Remarks:</div>
								<div class="register-input"><input class="form-control" type="text" name="e_remarks" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Place of Birth:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="place_of_birth"></div>
							</td>
							<td>
								<div class="register-header" >Highschool Year:</div>
								<div class="register-input"><input class="form-control" type="text" name="hs_year" ></div>
							</td>
						</tr>
						<tr>
							<td style="width: 50%">
								<div class="register-header">Date of Birth:</div>
								<div class="register-input">
									<input class="form-control" placeholder="YYYY" style="width: 32.5%;float: left;" type="text"  name="year">
									<input class="form-control" placeholder="MM"style="margin-left: 5px;width: 31.5%;float: left;"  type="text"  name="month">
									<input class="form-control" placeholder="DD"style="margin-left: 5px;width: 31.5%;float: left;" type="text"  name="day">
								</div>
							</td>
							<td>
								<div class="register-header" >School Name/Address:</div>
								<div class="register-input"><input class="form-control" type="text" name="hs_address" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Nationality:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="nationality"></div>
							</td>
							<td>
								<div class="register-header" >Remarks:</div>
								<div class="register-input"><input class="form-control" type="text" name="hs_remarks" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Sex:</div>
								<div class="register-input">
									<select class="form-control" style="width: 100%" name="sex">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</td>
							<td>
								<div class="register-header" >College Year:</div>
								<div class="register-input"><input class="form-control" type="text" name="c_year" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Civil Status:</div>
								<div class="register-input">
									<select class="form-control" style="width: 100%" name="civil_status">
										<option>Maried</option>
										<option>Widowed</option>
										<option>Seperated</option>
										<option>Divorced</option>
										<option>Single</option>
									</select>
								</div>
							</td>
							<td>
								<div class="register-header" >School Name/Address:</div>
								<div class="register-input"><input class="form-control" type="text" name="c_address" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Blood Type:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="blood_type"></div>
							</td>
							<td>
								<div class="register-header" >Remarks:</div>
								<div class="register-input"><input class="form-control" type="text" name="c_remarks" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Home Address:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="home_address"></div>
							</td>
							<td>
								<div class="register-header" >Post Graduate Year:</div>
								<div class="register-input"><input class="form-control" type="text" name="post_year" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Phone/Cellphone:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="phone_no"></div>
							</td>
							<td>
								<div class="register-header" >School Name/Address:</div>
								<div class="register-input"><input class="form-control" type="text" name="p_address" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Email Address:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="email_address"></div>
							</td>
							<td>
								<div class="register-header" >Remarks:</div>
								<div class="register-input"><input class="form-control" type="text" name="p_remarks" ></div>
							</td>
						</tr>
						<tr>
							<th><div align="center">Employment Information</div></th>
							<th><div align="center">Business Information</div></th>
						</tr>
						<tr>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Name of Firm:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="name_of_firm"></div>
							</td>
							<td>
								<div class="register-header" >Business Type:</div>
								<div class="register-input"><input class="form-control" type="text" name="business_type" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Address:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="emp_address"></div>
							</td>
							<td>
								<div class="register-header" >Address:</div>
								<div class="register-input"><input class="form-control" type="text" name="business_addrss" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Employment Started:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="emp_started"></div>
							</td>
							<td>
								<div class="register-header" >Ownership:</div>
								<div class="register-input"><input class="form-control" type="text" name="b_ownership" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Gross Income:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="gross_income"></div>
							</td>
							<td>
								<div class="register-header" >Capital:</div>
								<div class="register-input"><input class="form-control" type="text" name="capital" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Position:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="position"></div>
							</td>
							<td>
								<div class="register-header" >Trade Name:</div>
								<div class="register-input"><input class="form-control" type="text" name="trade_name" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Telephone No.:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="emp_tel"></div>
							</td>
							<td>
								<div class="register-header" >Telephone No.:</div>
								<div class="register-input"><input class="form-control" type="text" name="busi_tel" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Year Started:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="emp_year"></div>
							</td>
							<td>
								<div class="register-header" >Year Started:</div>
								<div class="register-input"><input class="form-control" type="text" name="bsi_year" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="register-header" >Take-Home Pay:</div>
								<div class="register-input"><input class="form-control"  style="width: 100%" type="text" name="emp_take"></div>
							</td>
							<td>
								<div class="register-header" >Gross Income:</div>
								<div class="register-input"><input class="form-control" type="text" name="b_gross" ></div>
							</td>
						</tr>
						<tr>
							<td>
								<button style="width: 100%" class="btn btn-success">Register</button>
							</td>
							<td>
								<a style="width: 100%" class="btn btn-danger">Cancel</a>
							</td>
						</tr>
					</tr>
     	</table>	
	</form>
</div>
