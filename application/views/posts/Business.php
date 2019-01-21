<img src="<?php echo base_url();?>/images/pet store banner 5 png (1).png" alt="Inage is not available right now.">

<h2>Service</h2>
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
	<label style="color:red;"><?php echo validation_errors(); ?></label>
	<?php echo form_open('Posts/business');?>
	<!-- <form action="<?php// echo base_url();?>Posts/business" method="get"> -->
		<!--<label for="">Client Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="Clientname"> <br>
		<label for="">*My Pet</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="mypet"><br>
		<input type="submit" value="Add New One">
		-->
		<?php //echo validation_errors(); ?>
		<table>
			<tr>
				<td><label for="">*First Name:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="service_firstname"></td>
				<td><label style="color:red;">
					<?php //echo form_error('service_firstname');?>
				</label></td>
			</tr>
			<tr>
				<td><label for="">*Last Name:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="service_lastname"></td>
				<td><label style="color:red;">
					<?php //echo form_error('service_lastname');?>
				</label></td>
			</tr>
			<tr>
				<td><label for="">*Email</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="Email" name="service_email"></td>
				<td><label style="color:red;">
					<?php //echo form_error('service_email');?>
				</label></td>
			</tr>
			<tr>
				<td><label for="">Phone:</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="tel" name="service_phone"></td>
				<td><label style="color:red;">
					<?php //echo form_error('service_phone');?>
				</label></td>
			</tr>
			<tr>
				<td><label for="">Business Type</label></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="service_businesstype"></td>
				<td><label style="color:red;">
					<?php //echo form_error('service_businesstype');?>
				</label></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit" name="service_submit"></td>
				<td></td>
			</tr>
		</table>
	</form>