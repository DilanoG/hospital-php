<?php

function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function selectSpecies($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function insertSpecies() {
	$db = openDatabaseConnection();
	$species = $_POST['species_description'];
	$sql = "INSERT INTO species (species_description) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":species" => $species 
	));
	$db = null;
	return $query->fetchAll();
}

function getSpecies($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id 
	));
	$db = null;
	return $query->fetchAll();
}

function editSpeciesDB($id) {
	$db = openDatabaseConnection();
	$description = $_POST['species_description'];
	$sql = "UPDATE species SET species_description=:description WHERE species_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":description" => $description,
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function deleteSpecies($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM species WHERE species_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}