<img src="<?php echo base_url();?>/images/pet store banner 5 png (1).png" alt="Inage is not available right now.">

<h2>Client</h2>
	<p>Required Information is marked with an asterisk (*)</p>
	
	<!--<ul>
		<li>Grooming</li>
		<li>Vaccines</li>
		<li>Implants</li>
		<li>Dental Cleaning</li>
		<li>Travel Documents</li>
	</ul>
	<p>Pet Store<br>1999 All Pets Road<br>Round Rock, TX 95555</p>
	
	<p>888-555-5555</p>-->
	<?php echo form_open('Posts/client');?>
	<!-- <form action="<?php echo base_url();?>/Posts/client" method="get"> -->
		<!--<label for="">Client Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="Clientname"> <br>
		<label for="">*My Pet</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="mypet"><br>
		<input type="submit" value="Add New One">
		-->
		<label style="color:red;"><?php echo validation_errors();?></label>
		<table>
			<tr>
				<td><label for="">*First Name:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="client_firstname"></td>
				<td><label style="color:red;">
					
				</label></td>
			</tr>
			<tr>
				<td><label for="">*Last Name:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="client_lastname"></td>
				<td><label style="color:red;">
					
				</label></td>
			</tr>
			<tr>
				<td><label for="">*Email</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="client_email"></td>
				<td><label style="color:red;">
					
				</label></td>
			</tr>
			<tr>
				<td><label for="">Phone:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="tel" name="client_phone"></td>
				<td><label style="color:red;">
					
				</label></td>
			</tr>
			<tr>
				<td><label for="">Business Type</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="client_businesstype"></td>
				<td><label style="color:red;">
					
				</label></td>
			</tr>
			<tr>
				<td><input name="client_submit" type="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>