<form action="/hospital-php/client/editClient/<?php echo $clients[0]['client_id']; ?>" method="POST">
<h1>Vul gegevens in</h1>
<h2>Firstname <input autocomplete="off" required="true" type="text" name=client_firstname value="<?php echo $clients[0]['client_firstname']; ?>"></h2>
<h2>Lastname <input autocomplete="off" required="true" type="text" name="client_lastname" value="<?php echo $clients[0]['client_lastname']; ?>"></h2>
<button type="submit">Opslaan</button>
</form>