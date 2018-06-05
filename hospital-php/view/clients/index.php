<h2>Clients</h2>
<table id="myTable" class="display">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($clients as $client) {
				echo "<tr><td> ".$client['client_firstname']." </td>";
				echo "<td> ".$client['client_lastname']." </td>";
				echo '<td class="center"><a href="edit/'.$client['client_id'].'">edit</a></td>';
				echo '<td class="center"><a href="delete/'.$client['client_id'].'">delete</a></td></tr>';
			}
		?>
	</tbody>
</table>
<p><a href="<?= URL ?>client/create">Create</a></p>

