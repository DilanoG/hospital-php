<h2>Patients</h2>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th name='name'>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Gender</th>
            <th>Client</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
            <?php
            foreach ($patients as $patient) {
                echo "<tr>";
                echo "<td>" . $patient['patient_name'] . "</td>";
                echo "<td>" . $patient['species_description'] . "</td>";
                echo "<td>" . $patient['patient_status'] . "</td>";
                echo "<td>" . $patient['patient_sex'] . "</td>";
                echo "<td>" . $patient['client_firstname'] . "</td>";
                echo "<td><a href='edit/" . $patient['patient_id'] . "'>edit</a></td>";
                echo "<td><a href='delete/" . $patient['patient_id'] . "'>delete</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<p><a href="<?= URL ?>patient/create">Create</a></p>
