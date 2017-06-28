<p>Update User</p>
	<?php foreach ($users as $user): ?>
	<form action="/update-user" method="post" style = "display:inline">
		<input type="text" class="w3-input w3-section" placeholder="Username" value="<?php echo $user['Username'] ?>" name="username" minlength="3" maxlength="12" required >
		<input type="password" class="w3-input w3-section" placeholder="Current password" value="" name="oldpassword" required>
		<input type="password" class="w3-input w3-section" placeholder="New password" value="" name="password" required>
		<input type="email" class="w3-input w3-section" placeholder="Email" value="<?php echo $user['Email'] ?>" name="email" required>
		<input type="text" class="w3-input w3-section" placeholder="First Name" value="<?php echo $user['First_Name'] ?>" name="firstname" maxlength="50" required>
		<input type="text" class="w3-input w3-section" placeholder="Last Name" value="<?php echo $user['Last_Name'] ?>" name="lastname" maxlength="50" required>
		<input type="date" class="w3-input w3-section" placeholder="Birthdate" value="<?php echo $user['Birthdate'] ?>" name="birthdate" required>
        
        <?php 
		if ($user['Gender'] == "male"){
			$checked = "checked";
		?> 
			<input class="w3-radio" type="radio" name="gender" value="male" required checked="<?php $checked?>"> Male
			<input class="w3-radio" type="radio" name="gender" value="female" required> Female
		<?php 
		} else if($user['Gender'] == "female"){
			$checked = "checked";
		?>  
			<input class="w3-radio" type="radio" name="gender" value="male" required> Male
			<input class="w3-radio" type="radio" name="gender" value="female" required checked="<?php $checked?>"> Female
		<?php 
		}
		?>
		<br><br>
        <button class="w3-button w3-green w3-round-xxlarge" type="submit" value="UpdateUser" name="updateUser">
        	<i class="fa fa-pencil"></i> UPDATE</a>
        </button>
	</form>
   	<?php endforeach; ?>
    	<a href="/view">
        	<button class="w3-button w3-green w3-round-xxlarge" type="submit" value="Cancel" name="cancel">
            	<i class="fa fa-trash-o"></i> CANCEL
            </button>
    	</a>