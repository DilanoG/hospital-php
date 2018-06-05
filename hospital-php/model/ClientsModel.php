<?php

function getAllClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function insertClient() {
	$db = openDatabaseConnection();
	$name = $_POST['client_firstname'];
	$lastname = $_POST['client_lastname'];
	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:name, :lastname)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":lastname" => $lastname
	));
	$db = null;
	return $query->fetchAll();
}

function editClientDB($id) {
	$db = openDatabaseConnection();
	$clientFirstname = $_POST['client_firstname'];
	$clientLastname = $_POST['client_lastname'];
	$sql = "UPDATE clients SET client_firstname=:clientFirstname, client_lastname=:clientLastname WHERE client_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(    
        ":clientFirstname" => $clientFirstname,
        ":clientLastname" => $clientLastname,
        ":id" => $id   
    ));
	$db = null;
	return $query->fetchAll();
}

function getClient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function deleteClient($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function selectClient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
