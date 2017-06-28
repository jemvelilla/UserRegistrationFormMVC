<div class="rightdiv">
	<div class="rightdiv-inner">
		<h1>Create a New User Account</h1>
		<p class="join"> Join us for free! </p>
			
		<form action="/add-user" method="post">
			<div class="container1">
				<table cellpadding="1" cellspacing="1">
					<tr>
						<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
							name="firstname" placeholder='Firstname' maxlength="50" size="15" required></td>
						<td>&nbsp;</td>
						<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
							name="lastname" placeholder='Lastname' maxlength="50" size="15" required></td>
					</tr>
				</table>
				<br>
				<table cellpadding="1" cellspacing="1">
					<tr>
						<td><input class="w3-input w3-border w3-round-xxlarge"
							type="text" name="username" placeholder='Username' size="40" minlength="3" maxlength="12" required></td>
					</tr>
				</table>
				<br>
				<table cellpadding="1" cellspacing="1">
					<tr>
						<td><input class="w3-input w3-border w3-round-xxlarge"
							type="password" name="password" placeholder='New Password' size="40" required></td>
					</tr>
				</table>
				<br>
				<table cellpadding="1" cellspacing="1">
					<tr>
						<td><input class="w3-input w3-border w3-round-xxlarge"
							type="email" name="email" placeholder='Email Address' size="40" required></td>
					</tr>
				</table>
				<br>
				<table cellpadding="1" cellspacing="1">
					<tr>BIRTHDAY</tr>
					<tr>
						<td><input class="w3-input w3-border w3-round-xxlarge" type="date" name="birthdate" required></input></td>
					</tr>
					<br>
					<table cellpadding="1" cellspacing="1">
					<tr>
						<td><input class="w3-radio" type="radio" name="gender" value="male" required> Male
						</td>
						<td>&nbsp;</td>	
						<td>	
							<input class="w3-radio" type="radio" name="gender" value="female" required> Female
						</td>
					</tr>
				</table>
				<br>
				<center>
					<button class='w3-button w3-green w3-round-xxlarge' type="submit"
						name="create" value='Create'>&nbsp;CREATE&nbsp;</button>
				</center>
			</div>
		</form>
	</div>
</div>
