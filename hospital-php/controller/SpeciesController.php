<?php

require(ROOT . "model/ClientsModel.php");
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index(){
	render("species/index", array(
		'species' => getAllSpecies()
	));
}

function create(){
	render("species/create");
}

function insert(){
	insertSpecies();
	header("Location: /hospital-php/species/index");
}

function edit($id){
	render("species/edit", array(
		"species" => getSpecies($id)
	));
}

function editSpecies($id){
	editSpeciesDB($id);
	header("Location: /hospital-php/species/index");
}

function delete($id){
	deleteSpecies($id);
	header("Location: /hospital-php/species/index");
}