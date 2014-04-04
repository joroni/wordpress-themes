<?php include 'header.php' ?>

<table class="row">
	<tr>
		<td class="wrapper last">

			<table class="twelve columns">
				<tr>
					<td>

						<p>ENQUIRY DETAILS</p>
						<table>
							<thead>
								<tr>
									<th width="0"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Request Type:</td>
									<td><?php echo $client_request ?></td>
								</tr>
								<tr>
									<td>Sent Date Time:&nbsp;&nbsp;</td>
									<td><?php echo $sentDateTime ?></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?php echo $client_name ?></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><?php echo $client_email ?></td>
								</tr>
								<tr>
									<td>Phone:</td>
									<td><?php echo $client_number ?></td>
								</tr>
								<tr>
									<td>Message:</td>
									<td><?php echo $client_message ?></td>
								</tr>
							</tbody>
						</table>
						
					</td>
					<td class="expander"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php include 'footer.php' ?>