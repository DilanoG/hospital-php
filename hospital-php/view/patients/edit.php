<form action="/hospital-php/patient/editPatient/<?php echo $resultP[0]['patient_id']; ?>" method="POST">
<h1>Vul gegevens in</h1>
<h2>Naam <input required="true" autocomplete="off" type="text" name="patient_name" value="<?php echo $resultP[0]['patient_name']; ?>"></h2>

<h2>Species
	<select name="species_id">
		<?php
			foreach ($resultS as $species) {
				echo '<option ';
				if ($species['species_id'] == $resultP[0]['species_id']) {
					echo "selected";
				}
				echo ' value=" '. $species['species_id'] .'">';
				echo $species['species_description'];
				echo "</option>";
			}
		?>
		</option>
	</select>
</h2>

<h2>Sex</h2>

<h5 class="radio">Male 
	<input class="radiobutton" required="true" type="radio"
	<?php
	if ($resultP[0]['patient_sex'] == "Male") {
		echo "checked";
	}
	?>
	value="Male" name="patient_sex">
</h5>

<h5 class="radio">Female
	<input class="radiobutton" required="true" type="radio"
	<?php
	if ($resultP[0]['patient_sex'] == "Female") {
		echo "checked";
	}
	?>
	value="Female" name="patient_sex">
</h5>
<h2 class="margintop">Patient Status <input autocomplete="off" class="textfield" required="true" type="text" name="patient_status" value="<?php echo $resultP[0]['patient_status']; ?>"></h2>

<h2>Client
	<select name='client_id'>
		<?php
			foreach ($resultC as $client) {
				echo '<option ';
				if ($client['client_id'] == $resultP[0]['client_id']) {
					echo "selected";
				}
				echo ' value=" '. $client['client_id'] .'">';
				echo $client['client_firstname'];
				echo "</option>";
			}
		?>
	</select>
</h2>
<button type="submit">Opslaan</button>
</form>