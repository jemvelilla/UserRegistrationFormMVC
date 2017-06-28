<?php foreach ( $users as $user ) : ?>
	<tr>
		<td><div class="radio">
			<center><?= $user->Username; ?></center>
		</div></td>
		
		<td><div class="radio">
			<center><?= $user->Password; ?></center>
		</div></td>
					
		<td><div class="radio">
			<center><?= $user->Email; ?> </center>
		</div></td>
					
		<td><div class="radio">
			<center><?= $user->First_Name; ?></center>
		</div></td>
					
		<td><div class="radio">
			<center><?= $user->Last_Name; ?></center>
		</div></td>
					
		<td><div class="radio">
			<center><?= $user->Birthdate; ?></center>
		</div></td>
					
		<td><div class="radio">
			<center><?= $user->Gender; ?></center>
		</div></td>
					
		<td><div class="radio">
			<form action='/select' method='post'>
				<button class="w3-button w3-green w3-round-xxlarge" type="submit"
					value="<?= $user->id ?>" name="update"><i class="fa fa-pencil"></i> UPDATE
				</button>
			</form>
		</div></td>
					
		<td><div class="radio">
			<form action='/delete' method='post'>
				<button class="w3-button w3-green w3-round-xxlarge" type="submit"
					value="<?= $user->id ?>" name="delete"><i class="fa fa-trash-o"></i> DELETE
				</button>
			</form>
		</div></td>
	</tr>
	<?php endforeach ;?>
		
	</table>
</div>
</div>