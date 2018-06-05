<form action="<?= URL ?>patient/insert" method="POST">
<h1>Vul gegevens in</h1>
<h2>Naam <input required="true" autocomplete="off" type="text" name="patient_name"></h2>

<h2>Species
	<select name="species_id">
		<?php
			foreach ($resultS as $species) {
				echo '<option value="'. $species['species_id'] .'">';
				echo $species['species_description'];
				echo "</option>";
				var_dump($species);
			}
		?>
	</select>
</h2>

<h2 class="margintop">Sex</h2>

<h5 class="radio">Male 
	<input class="radiobutton" required="true" type="radio" value="Male" name="patient_sex">
</h5>

<h5 class="radio">Female
	<input class="radiobutton" required="true" type="radio" value="Female" name="patient_sex">
</h5>

<h2 class="margintop">Patient Status <input autocomplete="off" class="textfield" required="true" type="text" name="patient_status"></h2>

<h2>Client
	<select name="client_id">
		<?php
			foreach ($resultC as $client) {
				echo '<option value="'. $client['client_id'] .'">';
				echo $client['client_firstname'];
				echo "</option>";
			}
		?>
	</select>
</h2>
<button type="submit">Opslaan</button>
</form>