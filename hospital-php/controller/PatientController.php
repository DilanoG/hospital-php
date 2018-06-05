<?php

require(ROOT . "model/ClientsModel.php");
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index(){
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function editPatient($id){
	editPatientDB($id);
	header("Location: /PHP/hospital-php/patient/index");
}

function edit($id){
	render("patients/edit", array(
		"resultP" => getPatient($id),
		"resultC" => selectClient($id),
		"resultS" => selectSpecies($id)
	));
}

function create(){
	render("patients/create", array(
		"resultC" => getAllClients(),
		"resultS" => getAllSpecies()
	));
}

function insert(){
	insertPatient();
	header("Location: /PHP/hospital-php/patient/index");
}

function delete($id){
	deletePatient($id);
	header("Location: /PHP/hospital-php/patient/index");
}