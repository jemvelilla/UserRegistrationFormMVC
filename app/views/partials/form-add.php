<p>Add New User</p>
	<form action="/add-user" method="post" style = "display:inline">
    	<input class="w3-input w3-section" type="text" placeholder="Username" value="" name="username" minlength="3" maxlength="12" required>
        <input class="w3-input w3-section" type="password" placeholder="Password" value="" name="password" required>
		<input class="w3-input w3-section" type="email" placeholder="Email" value="" name="email" required>
        <input class="w3-input w3-section" type="text" placeholder="First Name" value="" name="firstname" maxlength="50" required>
        <input class="w3-input w3-section" type="text" placeholder="Last Name" value="" name="lastname" maxlength="50" required>
        <input class="w3-input w3-section" type="date" placeholder="Birthdate" value="" name="birthdate" required>
        <input class="w3-radio" type="radio" name="gender" value="male" required> Male
        <input class="w3-radio" type="radio" name="gender" value="female" required> Female    
                
        <br><br>
                
        <button class="w3-button w3-green w3-round-xxlarge" type="submit" value="AddUser" name="addUser">
         	<i class="fa fa-pencil"></i> ADD & SAVE
        </button>
          		
        <button class="w3-button w3-green w3-round-xxlarge" type="submit" value="AddAnother" name="addAnother">
            <i class="fa fa-pencil"></i> ADD ANOTHER
        </button>
                	
	</form>
	
	<a href="/view">
		<button class="w3-button w3-green w3-round-xxlarge" type="submit" value="Cancel" name="cancel">
			<i class="fa fa-trash-o"></i> CANCEL
		</button>
	</a>