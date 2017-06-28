<div id="id01" class="modal">
	<form action="/login" method="post" class="modal-content animate">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display = 'none'"
				class="close" title="Close Modal">&times;</span>
		</div>
		
		<div class="container1">
			<table cellpadding="1" cellspacing="1" align="center">
				<tr>
					<p align='center'>USERNAME</p>
					<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
							name="username" placeholder='username' required></td>
				</tr>
			</table><br>
			
			<table cellpadding="1" cellspacing="1" align="center">
				<tr>
					<p align='center'>PASSWORD</p>
					<td><input class="w3-input w3-border w3-round-xxlarge"
							type="password" name="password" placeholder='password' required></td>
				</tr>
			</table><br>
			
			<center>
				<button class='w3-button w3-green w3-round-xxlarge' type="submit"
					name="login" value='Login'>&nbsp;LOG IN&nbsp;</button>
			</center>
		</div>
	</form>
</div>
