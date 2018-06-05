<form action="/hospital-php/species/editSpecies/<?php echo $species[0]['species_id']; ?>" method="POST">
<h1>Vul gegevens in</h1>
<h2>Species Type <input autocomplete="off" required="true" type="text" name="species_description" value="<?php echo $species[0]['species_description']; ?>"></h2>
<button type="submit">Opslaan</button>
</form>