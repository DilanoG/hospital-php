<h2>Species</h2>
<table id="myTable" class="display">
	<thead>
		<tr>
			<th>Description</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($species as $specie) {
				echo "<tr><td> ".$specie['species_description']." </td>";
				echo '<td class="center"><a href="edit/'. $specie['species_id'] .'">edit</a></td>';
				echo '<td class="center"><a href="delete/'. $specie['species_id'] .'">delete</a></td></tr>';
			}
		?>
	</tbody>
</table>
<p><a href="<?= URL ?>species/create">Create</a></p>